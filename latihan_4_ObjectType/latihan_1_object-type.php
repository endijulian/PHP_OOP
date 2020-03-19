<?php 

	class Produk{

		public  $judul,
				$penulis,
				$penerbit,
				$harga;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
				$this->judul = $judul;
				$this->penulis = $penulis;
				$this->penerbit = $penerbit;
				$this->harga = $harga;
		}

		public function getLabel(){
			return "$this->penulis,$this->penerbit";
		}
}


	class CetakInfoProduk{
		public function cetak( Produk $Produk ){
			$str = "{$Produk->judul} | {$Produk->getLabel()},{$Produk->harga}";
			return "$str";
		}
	}


		$Produk1 = new Produk("naruto", "masashi kishimoto", "shonen jump", 30000);
		$Produk2 = new Produk("uncharted", "neil druckman", "sony computer", 25000);
		echo "Komik : " . $Produk1->getLabel();
		echo "<br>";
		echo "Game : ". $Produk2->getLabel();
		echo "<br>";

		$CetakInfoProduk1 = new CetakInfoProduk();
		echo $CetakInfoProduk1->cetak($Produk1);


 ?>