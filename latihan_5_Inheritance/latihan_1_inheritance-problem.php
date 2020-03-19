<?php 

	class Produk{

		public  $judul,
				$penulis,
				$penerbit,
				$harga,
				$jmlhalaman,
				$waktumain,
				$tipe;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain= 0, $tipe ){
				$this->judul = $judul;
				$this->penulis = $penulis;
				$this->penerbit = $penerbit;
				$this->harga = $harga;
				$this->jmlhalaman = $jmlhalaman;
				$this->waktumain = $waktumain;
				$this->tipe = $tipe;
		}

		public function getLabel(){
			return "$this->penulis,$this->penerbit";
		}

			public function getInfoLengkap(){
			// komik : Naruto | masashi kishimoto,shonen jump (Rp.30000) - 100 halaman
			$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})"; 
			if ($this->tipe == "komik") {
				$str .= " - {$this->jmlhalaman} Halaman.";
			}else if ($this->tipe == "game") {
				$str .= "~{$this->waktumain} jam.";
			}
			return $str;
		}
		
}


	class CetakInfoProduk{
		public function cetak( Produk $Produk ){
			$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
			return $str;
		}
	}


		$Produk1 = new Produk("naruto", "masashi kishimoto", "shonen jump", 30000,100,0,"komik");
		$Produk2 = new Produk("uncharted", "neil druckman", "sony computer", 25000,0, 50,"game");
		
		echo $Produk1->getInfoLengkap();
		echo"<br>";
		echo $Produk2->getInfoLengkap();
		
 ?>