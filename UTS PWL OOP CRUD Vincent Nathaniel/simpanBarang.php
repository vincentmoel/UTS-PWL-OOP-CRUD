<?php
include('crud.php');

// memanggil class crud untuk membangun koneksi
$crud = new Crud();


if($_POST['action'] == 'simpan'){
    $arrData = array(
        'nim' => mysqli_real_escape_string($crud->conn,$_POST["nim"]),
        'nama_mhs' => mysqli_real_escape_string($crud->conn,$_POST["nama_mhs"]),
        'matakuliah' => mysqli_real_escape_string($crud->conn,$_POST["matakuliah"]),
        'nilai_angka' => mysqli_real_escape_string($crud->conn,$_POST["nilai_angka"]),
        'nilai_huruf' => mysqli_real_escape_string($crud->conn,$_POST["nilai_huruf"]),
        'predikat' => mysqli_real_escape_string($crud->conn,$_POST["predikat"]));

    $hasil = $crud->simpan_data('nilai_mhs', $arrData);

}else{

    $arrData = array(
        "nim='".mysqli_real_escape_string($crud->conn,$_POST["nim"])."'",
        "nama_mhs='".mysqli_real_escape_string($crud->conn,$_POST["nama_mhs"])."'",
        "matakuliah='".mysqli_real_escape_string($crud->conn,$_POST["matakuliah"])."'",
        "nilai_angka='".mysqli_real_escape_string($crud->conn,$_POST["nilai_angka"])."'",
        "nilai_huruf='".mysqli_real_escape_string($crud->conn,$_POST["nilai_huruf"])."'",
        "predikat='".mysqli_real_escape_string($crud->conn,$_POST["predikat"])."'");


    $id_value = $_POST['id_lama'];


    $hasil = $crud->update_data('nilai_mhs', $arrData,'nim',$id_value);

}

if($hasil){
    header("Location:dataBarang.php");
}else{
    echo 'Tidak Tersimpan';
}






















