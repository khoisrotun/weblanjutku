<?php
$no = 1;
foreach($db->tampil_data() as $x){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $x['nama']; ?></td>
    <td><?php echo $x['alamat']; ?></td>
    <td><?php echo $x['usia']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
        <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>            
    </td>
</tr>
<h3>Tambah Data User</h3>
<form action="proses.php?aksi=tambah" method="post">
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>Usia</td>
        <td><input type="text" name="usia"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>

<?php 
}
?>
