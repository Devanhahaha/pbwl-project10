<h2>Edit Keluarga</h2>

<form action="<?php echo URL; ?>/keluarga/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
    <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" value="<?php echo $data['row']['nik']; ?>" required></td>
        </tr>
        <tr>
            <td>Nama Kepala Keluarga</td>
            <td><input type="text" name="nama_kepala_keluarga" value="<?php echo $data['row']['nama_kepala_keluarga']; ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>Jumlah Anggota</td>
            <td><input type="text" name="jumlah_anggota" value="<?php echo $data['row']['jumlah_anggota']; ?>" required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>