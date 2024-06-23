<?php
class Database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "db_akademik";
    var $connectdb;

    public function __construct()
    {
        $this->connectdb = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connectdb->connect_error) {
            die("Koneksi gagal: " . $this->connectdb->connect_error);
        }
    }

    public function tampil()
    {
        $data = array();
        $sql = "SELECT * FROM mahasiswa";
        $result = $this->connectdb->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function simpan($nama, $alamat, $umur)
    {
        $sql = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES('$nama', '$alamat', '$umur')";

        if ($this->connectdb->query($sql) === true) {
            echo "Data berhasil disimpan";
        } else {
            echo "Error: " . $sql . "<br>" . $this->connectdb->error;
        }
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM mahasiswa WHERE id=$id";
        if($this->connectdb->query($sql) === true) {
            echo "Data berhasil dihapus";
        } else {
            echo "Gagal menghapus data: " . $this->connectdb->error;
        }
    }
}