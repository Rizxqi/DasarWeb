<?php  
include('../lib/Session.php'); 

$session = new Session(); 

if ($session->get('is_login') !== true) { 
    header('Location: login.php'); 
}

include_once('../model/BukuModel.php'); 
include_once('../lib/Secure.php'); 

$act = isset($_GET['act']) ? strtolower($_GET['act']) : ''; 

// Action to load Buku data
if ($act == 'load') { 
    $buku = new BukuModel(); 
    $data = $buku->getData(); 
    $result = []; 
    $i = 1; 
    
    foreach ($data as $row) { 
        $result['data'][] = [ 
            $i, 
            $row['buku_kode'], 
            $row['buku_nama'], 
            $row['kategori_id'], 
            $row['jumlah'], 
            $row['deskripsi'], 
            $row['gambar'], 
            '<button class="btn btn-sm btn-warning" onclick="editData(' . $row['buku_id'] . ')">
                <i class="fa fa-edit"></i>
             </button>  
             <button class="btn btn-sm btn-danger" onclick="deleteData(' . $row['buku_id'] . ')">
                <i class="fa fa-trash"></i>
             </button>' 
        ]; 
        $i++; 
    } 
    echo json_encode($result); 
}

// Action to get a specific Buku data by ID
if ($act == 'get') { 
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? $_GET['id'] : 0; 
    $buku = new BukuModel(); 
    $data = $buku->getDataById($id); 
    echo json_encode($data); 
}

// Action to save Buku data
if ($act == 'save') { 
    $data = [ 
        'buku_kode' => antiSqlInjection($_POST['buku_kode']), 
        'buku_nama' => antiSqlInjection($_POST['buku_nama']), 
        'kategori_id' => (int)$_POST['kategori_id'], 
        'jumlah' => (int)$_POST['jumlah'], 
        'deskripsi' => antiSqlInjection($_POST['deskripsi']), 
        'gambar' => antiSqlInjection($_POST['gambar']) 
    ]; 

    $buku = new BukuModel(); 
    $buku->insertData($data); 

    echo json_encode([ 
        'status' => true,  
        'message' => 'Data buku berhasil disimpan.' 
    ]); 
}

// Action to update Buku data
if ($act == 'update') { 
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? $_GET['id'] : 0; 
    $data = [ 
        'buku_kode' => antiSqlInjection($_POST['buku_kode']), 
        'buku_nama' => antiSqlInjection($_POST['buku_nama']), 
        'kategori_id' => (int)$_POST['kategori_id'], 
        'jumlah' => (int)$_POST['jumlah'], 
        'deskripsi' => antiSqlInjection($_POST['deskripsi']), 
        'gambar' => antiSqlInjection($_POST['gambar']) 
    ]; 

    $buku = new BukuModel(); 
    $buku->updateData($id, $data); 

    echo json_encode([ 
        'status' => true,  
        'message' => 'Data buku berhasil diupdate.' 
    ]); 
}

// Action to delete Buku data
if ($act == 'delete') { 
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? $_GET['id'] : 0; 

    $buku = new BukuModel(); 
    $buku->deleteData($id); 

    echo json_encode([ 
        'status' => true,  
        'message' => 'Data buku berhasil dihapus.' 
    ]); 
}
