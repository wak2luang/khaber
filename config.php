<?php
/**Config File Bot
* Pastikan snif/ambil capture di path /apps/daily_khaber/api/add_coin.php (untuk daily khaber)
* /apps/news/api/add_coin.php (untuk newsline)
* ambil data yang di perlukan sebagai berikut
* token
* session
* data (pada request header body copy semua)
* Dan apabila session sudah expired
* Silahkan snif lagi data capture nya
* Cukup ganti session dan data aja, token masih sama
/*

/** Config bot Daily Khaber */
//contoh pengisian token
//$khaber_token='cukup isi token yg didapat dari capture';
$khaber_token='nL9UgrtxqSdOVnetPJl6q';
//contoh penisian session
//$khaber_session='Etxxxxxxxxxxxxxx==';
$khaber_session='1kHb3Egsp2ppdSdyTNVQ+Q==';
//contoh pengisian data
//$khaber_data='data=xxxxxxx&d_info=xxxxxxxxxx';
$khaber_data='data=TK1kaH965gxHEYdDru7lnQ==&d_info=JhXEo0fceZeGsNGB7/XnBzyx504+vHJ5QuY4oLAWX7D6sf01nQ9cizU+Zk30d+WzzvpDCimducDUG0PojrajJdJ2xSHBj7xBdLX9w5N2qkjyDwRGSiQ/0WIHcf+Cv3Oj';
?>
