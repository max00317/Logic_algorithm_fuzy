<?php
//membuat koneksi
//*******************************************************************//
// Struktur yg harus anda ketahui jika ingin membuat sebuah koneksi:
// 1. tentukan Host
// 2. User dari host anda
// 3. password dari host anda
// 4. nama database dari host anda
// 5. perintahkan sistem agar menyambungkan program dan database yg dipilih.
//*******************************************************************//

//*******************************************************************//
// 1. tentukan Host

$host='localhost';

//*******************************************************************//

//*******************************************************************//
// 2. User dari host anda

$user='root';

//*******************************************************************//

//*******************************************************************//
// 3. password dari host anda

$password='';

//*******************************************************************//

//*******************************************************************//
// 4. nama database dari host anda

$database='risetdone';

//*******************************************************************//

//*******************************************************************//
// 5. perintahkan sistem agar menyambungkan program dan database yg dipilih.

$koneksi=mysqli_connect($host,$user,$password,$database);

// Buat sebuah Logika Antara Terhubung atau tidak.

// Jika Terbukti telah terhubung maka sebaiknya logika tidak perlu ditampilkan
// agar tidak mengganggu kenyamanan user saat mengakses

	if($koneksi){
   		/*  echo"database terhubung";*/
	}

// jika tidak terhubung maka sebaiknya logika ditampilkan agar sistem atau program dapat diperbaiki.
	else {
    	echo"database terputus";
	}

//*******************************************************************//

?>
