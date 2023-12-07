<?php

namespace App\Models;

use App\Core\Model;

class Keluarga extends Model
{

      public function show()
      {
            $query = "SELECT * FROM db_keluarga";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama_kepala_keluarga = $_POST['nama_kepala_keluarga'];
            $alamat = $_POST['alamat'];
            $jumlah_anggota = $_POST['jumlah_anggota'];

            $sql = "INSERT INTO db_keluarga
            SET nama_kepala_keluarga=:nama_kepala_keluarga, alamat=:alamat, jumlah_anggota=:jumlah_anggota";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_kepala_keluarga", $nama_kepala_keluarga);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":jumlah_anggota", $jumlah_anggota);

            $stmt->execute();
      }  
      public function edit($id)
      {
            $query = "SELECT * FROM db_keluarga WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama_kepala_keluarga = $_POST['nama_kepala_keluarga'];
            $alamat = $_POST['alamat'];
            $jumlah_anggota = $_POST['jumlah_anggota'];
            $id = $_POST['id'];

            $sql = "UPDATE db_keluarga
                  SET nama_kepala_keluarga=:nama_kepala_keluarga, alamat=:alamat, jumlah_anggota=:jumlah_anggota
                  WHERE id=:id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_kepala_keluarga", $nama_kepala_keluarga);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":jumlah_anggota", $jumlah_anggota);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
        $sql = "DELETE FROM db_keluarga WHERE id=:id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
}
}