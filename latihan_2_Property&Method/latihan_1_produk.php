<?php 

	class Produk{

		public  $judul = "judul",
				$penulis = "penulis",
				$penerbit = "penerbit",
				$harga = 0;

		public function getLabel(){
			return "$this->penulis,$this->penerbit";
		}
}

	// $Produk1 = new Produk();
	// $Produk1->judul = "naruto";

	// var_dump($Produk1);

	// $Produk2 = new Produk();
	// $Produk2->judul = "upinipin";
	// $Produk2->TambahProperty = "endijulian";

	// var_dump($Produk2);


	$Produk3 = new Produk();
	$Produk3->judul = "naruto";
	$Produk3->penulis ="masashi kishimoto";
	$Produk3->penerbit = "shonen jump";
	$Produk3->harga = 30000;


	$Produk4 = new Produk();
	$Produk4->judul ="uncharted";
	$Produk4->penulis ="neil druckman";
	$Produk4->penerbit ="sony computer";
	$Produk4->harga = 25000;

	echo "Komik : " . $Produk3->getLabel();
	echo "<br>";
	echo "Game : ". $Produk4->getLabel();


 ?>