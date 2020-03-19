 <?php 

	class Produk{

		private $judul,
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

			public function getInfoProduk(){
			// komik : Naruto | masashi kishimoto,shonen jump (Rp.30000) - 100 halaman
			$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})"; 
			
			return $str;
		}
		
}

	class komik extends Produk{

		public $jmlhalaman;

			public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0) {
			parent::__construct($judul, $penulis, $penerbit, $harga);

				$this->jmlhalaman = $jmlhalaman;
			}

		public function getInfoProduk(){
			$str = " komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} halaman.";
			return $str; 
		}

	}

	class game extends Produk{

		public $waktumain;
		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain= 0){
			parent::__construct($judul, $penulis, $penerbit, $harga);

			$this->waktumain = $waktumain;
		}
		


		public function getInfoProduk(){
			$str = " game : ".parent::getInfoProduk()." ~{$this->waktumain} jam.";
			return $str;
		}
	}
	


	class CetakInfoProduk{
		public function cetak( Produk $Produk ){
			$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
			return $str;
		}
	}


		$Produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000,100);
		$Produk2 = new Game("uncharted", "neil druckman", "sony computer", 25000,50);
		
		echo $Produk1->getInfoProduk();
		echo"<br>";
		echo $Produk2->getInfoProduk();
		echo "<hr>";
		$Produk2->setdiskon(20);
		echo $Produk2->getharga();
		echo "<hr>";

		$Produk1->setpenulis("endi julian");
		echo $Produk1->getpenulis();
		
 ?>