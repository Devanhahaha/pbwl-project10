<h2>Keluarga</h2>

<a href="<?php echo URL; ?>/keluarga/input" class="btn">Input Keluarga</a>

<table>
      <tr>
            <th>NO</th>
            <th>Nama Kepala Keluarga</th>
            <th>Alamat</th>
            <th>Jumlah Anggota</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_kepala_keluarga']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['jumlah_anggota']; ?></td>
                  <td><a href="<?php echo URL; ?>/keluarga/edit/<?php echo $row['nik']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/keluarga/delete/<?php echo $row['nik']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
        <?php $no++;
        } ?>
</table>