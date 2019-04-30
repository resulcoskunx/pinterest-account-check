<?php
try {

	$db=new PDO("mysql:host=localhost;dbname=databese_name",'db_kullanici','db_sifre' );
	$db->query("SET CHARACTER SET utf8");
	//echo "veritabanı bağlantısı başarılı";

}

catch (PDOExpception $e) {

	echo $e->getMessage();
}
