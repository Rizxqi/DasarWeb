<?php
include('Model.php');

class BukuModel extends Model {
    protected $db;
    protected $table = 'm_buku';
    protected $driver;

    public function __construct() {
        include_once('../lib/Connection.php');
        $this->db = $db;
        $this->driver = $use_driver;
    }

    public function insertData($data) {
        if ($this->driver == 'mysql') {
            // Prepare statement untuk query insert
            $query = $this->db->prepare("INSERT INTO {$this->table} (kategori_id, buku_kode, buku_nama, jumlah, deskripsi, gambar) VALUES (?, ?, ?, ?, ?, ?)");
            // Binding parameter ke query
            $query->bind_param('ississ', $data['kategori_id'], $data['buku_kode'], $data['buku_nama'], $data['jumlah'], $data['deskripsi'], $data['gambar']);
            // Eksekusi query
            $query->execute();
        } else {
            // Eksekusi query untuk menyimpan ke database
            sqlsrv_query($this->db, "INSERT INTO {$this->table} (kategori_id, buku_kode, buku_nama, jumlah, deskripsi, gambar) VALUES (?, ?, ?, ?, ?, ?)", [
                $data['kategori_id'],
                $data['buku_kode'],
                $data['buku_nama'],
                $data['jumlah'],
                $data['deskripsi'],
                $data['gambar']
            ]);
        }
    }

    public function getData() {
        if ($this->driver == 'mysql') {
            // Query untuk mengambil data dari tabel
            return $this->db->query("SELECT * FROM {$this->table}")->fetch_all(MYSQLI_ASSOC);
        } else {
            // Query untuk mengambil data dari tabel
            $query = sqlsrv_query($this->db, "SELECT * FROM {$this->table}");
            $data = [];
            while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function getDataById($id) {
        if ($this->driver == 'mysql') {
            // Query untuk mengambil data berdasarkan ID
            $query = $this->db->prepare("SELECT * FROM {$this->table} WHERE buku_id = ?");
            $query->bind_param('i', $id);
            $query->execute();
            return $query->get_result()->fetch_assoc();
        } else {
            // Query untuk mengambil data berdasarkan ID
            $query = sqlsrv_query($this->db, "SELECT * FROM {$this->table} WHERE buku_id = ?", [$id]);
            return sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
        }
    }

    public function updateData($id, $data) {
        if ($this->driver == 'mysql') {
            // Query untuk update data
            $query = $this->db->prepare("UPDATE {$this->table} SET kategori_id = ?, buku_kode = ?, buku_nama = ?, jumlah = ?, deskripsi = ?, gambar = ? WHERE buku_id = ?");
            $query->bind_param('ississi', $data['kategori_id'], $data['buku_kode'], $data['buku_nama'], $data['jumlah'], $data['deskripsi'], $data['gambar'], $id);
            $query->execute();
        } else {
            // Query untuk update data
            sqlsrv_query($this->db, "UPDATE {$this->table} SET kategori_id = ?, buku_kode = ?, buku_nama = ?, jumlah = ?, deskripsi = ?, gambar = ? WHERE buku_id = ?", [
                $data['kategori_id'],
                $data['buku_kode'],
                $data['buku_nama'],
                $data['jumlah'],
                $data['deskripsi'],
                $data['gambar'],
                $id
            ]);
        }
    }

    public function deleteData($id) {
        if ($this->driver == 'mysql') {
            // Query untuk delete data
            $query = $this->db->prepare("DELETE FROM {$this->table} WHERE buku_id = ?");
            $query->bind_param('i', $id);
            $query->execute();
        } else {
            // Query untuk delete data
            sqlsrv_query($this->db, "DELETE FROM {$this->table} WHERE buku_id = ?", [$id]);
        }
    }
}
?>
