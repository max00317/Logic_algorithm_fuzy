<?php include "koneksi.php"; ?>


<?php

// Menambah Data..

if(isset($_POST['tambah']))
	{
	$id=$_POST['id'];
	$NamaSekolah=$_POST['NamaSekolah'];
	
	$jumlah=count($id);
	
	// digunakan jika akan mengupload file atau gambar

	// $file=$_FILES['file']['name'];
	// $source=$_FILES['file']['tmp_name'];
	// $folder='../../../paket/file/';
	// move_uploaded_file($source,$folder.$file);
	for ($s=0; $s<$jumlah; $s++) 
		{
			$sql= "INSERT INTO `fuzy`(`npsn`, `NamaSekolah`) VALUES ('$id[$s]','$NamaSekolah[$s]')";
 			$query=mysqli_query($koneksi,$sql);
		}

 			if($query)
                  {
                   echo " <script> 
                          alert('Proses Berhasil Dijalankan'); 
                          window:location='index.php'; 
                          </script> ";
                  }
               else
                  {
                   echo " <script> 
                          alert('Proses Terhenti,, Silhkan ulangi kembali.'); 
                          window:location='index.php'; 
                          </script> ";
                  }
			}

// Rubah Data..

if(isset($_POST['perbarui']))
	{
	$id=$_POST['id'];
	$NamaSekolah=$_POST['NamaSekolah'];
	$NSS=$_POST['NSS'];
	$Tranportasi=$_POST['Tranportasi'];
	$Pendidikan=$_POST['Pendidikan'];
	$Listrik=$_POST['Listrik'];
	$Informasi=$_POST['Informasi'];
	$TantanganAlam=$_POST['TantanganAlam'];
	$Kesehatan=$_POST['Kesehatan'];
	$AirBersih=$_POST['AirBersih'];
	$Sdm=$_POST['Sdm'];
	$Fuzy=$_POST['fuzy'];

	$jumlah1=count($id);
	for ($a=0; $a< $jumlah1; $a++) 
		{
 		$sql1="UPDATE `fuzy` SET `NamaSekolah`='$NamaSekolah[$a]',`Akses_Transportasi`='$Tranportasi[$a]',`Sarana_Pendidikan`='$Pendidikan[$a]',`Fasilitas_Listrik`='$Listrik[$a]',`Fasilitas_Informasi_Dan_Komunikasi`='$Informasi[$a]',`TantanganAlam`='$TantanganAlam[$a]',`Fasilitas_Kesehatan`='$Kesehatan[$a]',`Sarana_Air_Bersih`='$AirBersih[$a]',`Pemenuhan_Kebutuhan_Hidup`='$Sdm[$a]',`Fuzy`='$Fuzy[$a]' 
 		WHERE `fuzy`.`npsn`='$id[$a]'";
 		$query1=mysqli_query($koneksi,$sql1);

 		$sql2="UPDATE `mytable` SET `Fuzy`='$Fuzy[$a]'
 		WHERE `mytable`.`npsn`='$id[$a]'";
 		$query2=mysqli_query($koneksi,$sql2);
		}
	
 		if($query1)
                  {
                   echo " <script> 
                          alert('Proses Berhasil Dijalankan'); 
                          window:location='index.php'; 
                          </script> ";
                  }
               else
                  {
                   echo " <script> 
                          alert('Proses Terhenti,, Silhkan ulangi kembali.'); 
                          window:location='index.php'; 
                          </script> ";
                  }
    }

?>