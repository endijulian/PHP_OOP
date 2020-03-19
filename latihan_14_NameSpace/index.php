<?php 

	require_once 'App/init.php';
		
		// $Produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000,100);
		// $Produk2 = new Game("uncharted", "neil druckman", "sony computer", 25000,50);

		// $cetakproduk = new CetakInfoProduk();
		// $cetakproduk->tambahproduk($Produk1);
		// $cetakproduk->tambahproduk($Produk2);
		// echo $cetakproduk->cetak();

		// echo "<hr>";

		use App\Service\User as ServiceUser;
		use App\Produk\User as ProdukUser;

		new ServiceUser();
		echo"<br>";
		new ProdukUser;












 ?>