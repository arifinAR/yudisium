<p style="text-align: center;"><strong>SURAT KETERANGAN YUDISIUM</strong></p>
<p style="text-align: center;"><strong>DEPARTEMEN INFORMATIKA</strong></p>
<p style="text-align: center;"><strong>SEKOLAH TINGGI TEKNOLOGI ADISUTJIPTO</strong></p>
<p>&nbsp;</p>
<hr />
<p style="text-align: left;">&nbsp;Yang bertanda tangan dibawah ini, Kepala Departemen Informatika Sekolah Tinggi Teknologi Adisutjipto menyatakan bahwa:</p>
<?php foreach ($mahasiswa as $mhs) : ?>
<p style="text-align: left;">Nama : <?= $mhs['nama']; ?></p>
<p style="text-align: left;">NIM : <?= $mhs['nim']; ?></p>
<p style="text-align: left;">Program studi : <?= $mhs['nm_prodi'] ?></p>
<?php endforeach; ?>
<p style="text-align: left;">Telah dinyatakan memenuhi semua persyaratan yudisium.</p>
<p style="text-align: left;">&nbsp;</p>
<table style="height: 90px; float:right;" width="193">
<tbody>
<tr style="height: 25px; text-align: center;">
<td style="width: 183px; height: 25px; text-align: center;">Yogyakarta</td>
</tr>
<tr style="height: 65px; text-align: center;">
<td style="width: 183px; height: 65px;">&nbsp;</td>
</tr>
<tr style="height: 30px;">
<td style="width: 183px; height: 30px; text-align: center;">Kepala Departemen Informatika</td>
</tr>
</tbody>
</table>