<?php
require_once 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = new Database();
    $db->__construct();
    $db->hapus($id);

    header("Location: tampil.php");
} else {
    echo "Id tidak ditemukan";
}