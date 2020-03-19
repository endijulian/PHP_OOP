 <?php 

interface InfoProduk{
	public function getInfoProduk();
}

Abstract class Produk{

		protected $judul,
				$penulis,
				$penerbit,
				$harga,
				$diskon = 0; 

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
				$this->judul = $judul;
				$this->penulis = $penulis;
				$this->penerbit = $penerbit;
				$this->harga = $harga;
				
		}
		public function setjudul($judul){
			$this->judul = $judul;
		}
		public function getjudul(){
			return $this->judul;
		}

		public function setpenulis($penulis){
			$this->penulis  = $penulis;
		}
		public function getpenulis(){
			return $this->penulis;
		}

		public function setpenerbit($penerbit){
			$this->penerbit =$penerbit;
		}
		public function getpenerbit(){
			return $this->penerbit;
		}

		public function setdiskon($diskon){
			$this->diskon = $diskon;
		}
		public function getdiskon(){
			return $this->diskon;
		}

		public function setharga($harga){
			$this->harga = $harga;
		}
		public function getharga(){
			return $this->harga - ($this->harga * $this->diskon / 100);
		}

		public function getLabel(){
			return "$this->penulis,$this->penerbit";
		}  
		
		abstract public function getInfo();
 
		
}

	class Komik extends Produk implements InfoProduk{

		public $jmlhalaman;

			public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0) {
			parent::__construct($judul, $penulis, $penerbit, $harga);

				$this->jmlhalaman = $jmlhalaman;
			}


		public function getInfo(){
			// komik : Naruto | masashi kishimoto,shonen jump (Rp.30000) - 100 halaman
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})"; 
			
			return $str;
		} 

		public function getInfoProduk(){
			$str = " komik : " .$this->getInfo() . " - {$this->jmlhalaman} halaman.";
			return $str; 
		}

	}

	class Game extends Produk implements InfoProduk {

		public $waktumain;
		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain= 0){
			parent::__construct($judul, $penulis, $penerbit, $harga);

			$this->waktumain = $waktumain;
		}

		public function getInfo(){
			// komik : Naruto | masashi kishimoto,shonen jump (Rp.30000) - 100 halaman
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})"; 
			
			return $str;
		} 

		public function getInfoProduk(){
			$str = " game : ".$this->getInfo()." ~{$this->waktumain} jam.";
			return $str;
		}
	}
	


	class CetakInfoProduk{

		public $daftarproduk = [];

		public function tambahproduk( Produk $produk){
			$this->daftarproduk[] = $produk;
		}

		public function cetak(){
			$str = "DAFTAR PRODUK : <br>";

			foreach ($this->daftarproduk as $p ) {
				$str .="-{$p->getInfoProduk()} <br>";
			}


			return $str;
		}
	}


		$Produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000,100);
		$Produk2 = new Game("uncharted", "neil druckman", "sony computer", 25000,50);

		$cetakproduk = new CetakInfoProduk();
		$cetakproduk->tambahproduk($Produk1);
		$cetakproduk->tambahproduk($Produk2);
		echo $cetakproduk->cetak();

	
		
		
 ?>