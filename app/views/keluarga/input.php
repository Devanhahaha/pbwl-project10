<h2>Input Keluarga</h2>

<form action="<?php echo URL; ?>/keluarga/save" method="post">
    <table>
    <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" required></td>
        </tr>
        <tr>
            <td>Nama Kepala Keluarga</td>
            <td><input type="text" name="nama_kepala_keluarga" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>Jumlah Anggota</td>
            <td><input type="text" name="jumlah_anggota" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>