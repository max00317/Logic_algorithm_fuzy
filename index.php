<?php include "koneksi.php"; ?>


<?php // kode baru *************************************************// ?>

<?php
//*******************************************************************//
// menyusun variabel
// sesuaikan variabel dibawah dengan nama yang sesuai pada sistem anda 
// karna isi variabel dibawah hanyalah contoh

//*******************************************************************//
// nama tabel sekolah dari database yang telah dibuat
// ini penting untuk di isi dengan benar dikarnakan akan mempengaruhi saat proses update data
$table='mytable';
//*******************************************************************//
// nama field yang mengandung kata kunci atau primary pada tabel data sekolah
// ini penting untuk di isi dengan benar dikarnakan akan mempengaruhi saat proses update data
$id_primary='npsn';
//*******************************************************************//
// nama field yang menampung nama sekolah
// ini tidak terlalu penting untuk di isi dikarnakan tidak akan mempengaruhi saat proses update data
// berfungsi agar data yg di perbarui lebih jelas dengan melihat nama sekolah nya satu persatu
$Nama_Sekolah='nama_sekolah';
//*******************************************************************//
?>




<?php // kode baru *************************************************// ?>


<div class="table-responsive ">
			<h3 class="title-1 m-b-25">** Perbarui Lebih Banyak Data.</h3>
                <table class="table ">
                   <thead>
		   			<tr>
						<td><div align="center">No</div></td>
						<td><div align="center">Pilih</div></td>
						<td>NPSN</td>
						<td>Nama Sekolah</td>
						<td>Akses Transportasi</td>
						<td>Sarana Pendidikan</td>
						<td>Fasilitas Listrik</td>
						<td>Fasilitas Informasi dan Komunikasi</td>
						<td>Hambatan/Tantangan Alam</td>
						<td>Fasilitas Kesehatan</td>
						<td>Sarana Air Bersih</td>
						<td>Pemenuhan Kebutuhan Hidup</td>
						<td>Fuzy</td>
						
						
					</tr>
					</thead>
					<tbody>
					<form action="fuzy.php" method="post" enctype="multipart/form-data" >
		<?php
		// memanggil dan menampilkan data sekolah untuk dimasukkan kedalam form input.
		// selanjutnya data di kelola menggunakan algoritma fuzzy logic pada form ini.
		// kemudian data dikirim dan diproses untuk dapat memperbarui data yang sudah ada 
		// dengan memperbarui table data sekolah pada field fuzy..
			$sql="select * from `$table` ";
 			$query=mysqli_query($koneksi,$sql);
			$no=1;
			while($data=mysqli_fetch_array($query)) { 
		?>	
					<tr>
						<td><div align="center"><?= $no++ ?></div></td>
						<td>
							<input type="checkbox" name="id[]" checked="checked" class="form-control" value="<?= $data [$id_primary] ?>" title="pilih data yg ingin diperbarui" />					
						</td>
						<td><input type="text" name="NSS[]" value="<?= $data [$id_primary] ?>"></td>
						<td><input type="text" name="NamaSekolah[]" value="<?= $data [$Nama_Sekolah] ?>"></td>
					
						<td>
							<select name="Tranportasi[]" class="custom-select dblock w-100">
							<option>--Jenis Tranportasi apa yang digunakan untuk bisa sampai ke Sekolah ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.dapat_dilalui_kendaraan_roda_4_atau_angkutan_umum</option>
							<option>2.dapat_dilalui_kendaraan_roda_2</option>
							<option>3.hanya_dapat_dilalui_oleh_pejalan_kaki</option>
							</select>
						</td>
					
						<td>
							<select name="Pendidikan[]" class="custom-select dblock w-100">
							<option>--Apakah Sarana Pendidikan sudah terpenuhi dan aman untuk operasional ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.sudah_lengkap_dan_aman</option>
							<option>2.cukup_dan_aman</option>
							<option>3.serba_terbatas_dan_membahayakan_jika_cuaca_buruk</option>
							</select>
						</td>
					
						<td>
							<select name="Listrik[]" class="custom-select dblock w-100">
							<option>--Apakah Fasilitas Listrik telah ada ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.ya_ada</option>
							<option>2.belum_ada</option>
							</select>
						</td>
					
						<td>
							<select name="Informasi[]" class="custom-select dblock w-100">
							<option>--Apakah Fasilitas Informasi dan Komunikasi mudah diakses ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.mudah_karna_kebanyakan_telah_memiliki_smartphone</option>
							<option>2.telah_memiliki_jaringan_wifi</option>
							<option>3.sulit_karna_kebanyakan_masih_gaptek</option>
							</select>
						</td>
					
						<td>
							<select name="TantanganAlam[]" class="custom-select dblock w-100">
							<option>--Apakah Akses jalur yang ditempuh sering mendapati hambatan ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.tidak_karna_dapat_melalui_jalan_raya</option>
							<option>2.ya_atau_terkadang_karna_melewati_hutan_belantara_atau_sungai_tanpa_jembatan_yang_layak_atau_sering_terjadi_bencana_alam</option>
							</select>
						</td>
					
						<td>
							<select name="Kesehatan[]" class="custom-select dblock w-100">
							<option>--Apakah terdapat Fasilitas kesehatan seperti klinik,RS,dll ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.ya_ada</option>
							<option>2.belum_ada</option>
							</select>
						</td>
					
						<td>
							<select name="AirBersih[]" class="custom-select dblock w-100">
							<option>--Apakah Air Bersih mudah didapat ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.mudah</option>
							<option>2.sulit</option>
							</select>
						</td>
					
						<td>
							<select name="Sdm[]" class="custom-select dblock w-100">
							<option>--Apakah Pekerjaan mudah didapat ?--</option>
							<option>pilih salah satu jawaban dibawah :</option>
							<option></option>
							<option>1.mudah</option>
							<option>2.sulit</option>
							</select>
						</td>
						<td><?= $data ['Fuzy'] ?></td>
					</tr>	
					
		 		<?php } ?>
				<tr>
				<td >
				  <div align="center">
				    <button type="submit" name="fuzy" class="btn btn-danger">Kirim</button>
			      </div></td>
				</tr>
					</form>
					</tbody>
		   		</table>
		   	</div>
<br />