<?php
include('crud.php');
$crud = new Crud;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hasil = $crud->delete_data('nilai_mhs','nim',$id);

    if($hasil){
        header("Location:dataBarang.php");
    }else{
        echo "Gagal Hapus";
    }
}
?>