<?php
    include('crud.php');
    $crud = new Crud;

?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--    Fontawesome.com-->

    <title>Aplikasi CRUD</title>
</head>
<body>
<h1>Daftar Nilai Mahasiswa</h1>
<h5>Vincent Nathaniel M / A11.2019.11652</h5>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $update = $crud->read_data('nilai_mhs','nim',$id);
        foreach ($update as $upd){
            $nim = $upd['nim'];
            $nama_mhs = $upd['nama_mhs'];
            $matakuliah = $upd['matakuliah'];
            $nilai_angka = $upd['nilai_angka'];
            $nilai_huruf = $upd['nilai_huruf'];
            $predikat = $upd['predikat'];
            $action = 'update';
        }
    }else{
        $nim = '';
        $nama_mhs = '';
        $matakuliah = '';
        $nilai_angka = '';
        $nilai_huruf = '';
        $predikat = '';
        $action = 'simpan';
    }
?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Input Nilai</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entry data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="simpanBarang.php" method="post">
                    <table class="table table-borderless">
                        <tr>
                            <td class="col-form-label">NIM</td>
                            <td>
                                <input type="text" name="nim" value="<?php echo $nim;?>" class="form-control">
                                <input type="hidden" name="id_lama" value="<?php echo $id;?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Mahasiswa</td>
                            <td>
                                <input type="text" name="nama_mhs"  value="<?php echo $nama_mhs;?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Matakuliah</td>
                            <td>
                                <input type="text" name="matakuliah" value="<?php echo $matakuliah;?>" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Angka</td>
                            <td>
                                <input type="number" name="nilai_angka" id="nilai_angka" value="<?php echo $nilai_angka;?>" class="form-control">

                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Huruf</td>
                            <td>
                                <input type="text" name="nilai_huruf" id="nilai_huruf" value="<?php echo $nilai_huruf;?>" class="form-control" readonly>

                            </td>
                        </tr>
                        <tr>
                            <td>Predikat</td>
                            <td>
                                <input type="text" name="predikat" id="predikat" value="<?php echo $predikat;?>" class="form-control" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td>
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                <input type="hidden" name ="action" value="<?php echo $action;?>">


                            </td>
                        </tr>
                    </table>
                </form>
            </div>


        </div>
    </div>
</div>

<table class="table table-bordered" >
    <tr style="background-color: blue; color: white">
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Matakuliah</th>
        <th>Nilai Angka</th>
        <th>Nilai Huruf</th>
        <th>Predikat</th>
        <th>Aksi</th>
    </tr>
    <?php

        $barang = $crud->read_data('nilai_mhs',null,null);
        $nomor = 1;
        foreach ($barang as $brg){
        ?>
            <tr>
                <td> <?php echo $nomor++; ?> </td>
                <td> <?php echo $brg['nim']; ?> </td>
                <td> <?php echo $brg['nama_mhs']; ?> </td>
                <td> <?php echo $brg['matakuliah']; ?> </td>
                <td> <?php echo $brg['nilai_angka']; ?> </td>
                <td> <?php echo $brg['nilai_huruf']; ?> </td>
                <td> <?php echo $brg['predikat']; ?> </td>

                <td>
                    <a href="updateBarang.php?id=<?php echo $brg['nim'];?>" class="btn btn-primary">Edit</a>
                    <a href="hapusBarang.php?id=<?php echo $brg['nim'];?>" class="btn btn-danger">Hapus</a>

                </td>
            </tr>
        <?php
        }
        ?>
</table>




</body>
<script>
    var nilai_angka = document.getElementById('nilai_angka');
    var nilai_huruf = document.getElementById('nilai_huruf');
    var predikat = document.getElementById('predikat');

    nilai_angka.addEventListener('keyup',function (){
        if(nilai_angka.value >= 90){
            nilai_huruf.value = 'A';
            predikat.value = 'Istimewa'
        }else if (nilai_angka.value >= 70){
            nilai_huruf.value = 'B';
            predikat.value = 'Terpuji'
        }else if (nilai_angka.value >= 60) {
            nilai_huruf.value = 'C';
            predikat.value = 'Cukup';
        }else if (nilai_angka.value >= 50) {
            nilai_huruf.value = 'D';
            predikat.value = 'Kurang'
        }else{
            nilai_huruf.value = 'E';
            predikat.value = 'Sangat Kurang'
        }
    })
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>