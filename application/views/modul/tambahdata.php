<form action= "<?php echo base_url('myadmin/aksi_tambah_data')?>" method="POST" accept-charset="utf-8">

<input type="number" name="npm" maxlength="12" placeholder="Masukan NPM ..." required><br>
<input type="text" name="nama" placeholder="Masukan NAMA Mahasiswa ..." required><br>
<select name="semester" id="">
	<?php for ($i=1; $i < 10; $i++) { ?>
		<option value="<?= $i; ?>"><?= $i; ?> </option>}
		<?php } ?>
</select>
<br>
<button type="submit">Simpan</button>
</form>

<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Npm</th>
			<th>Nama</th>
			<th>Semester</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
			<?php
			$no=1; 
			foreach ($tampil as $tpl) {
				echo "<tr><td>" .$no. "</td>";
				echo "<td>" .$tpl->int_npm. "</td>";
				echo "<td>" .$tpl->str_nama. "</td>";
				echo "<td>" .$tpl->int_semester. "</td>";				
				echo "<td></td></tr>";


			$no++;
			} ?>
	</tbody>
</table>