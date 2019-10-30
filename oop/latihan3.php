<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="padding:20px;">   
                <div class="card badge-dark">
                    <div class="card-header"><center>Data Kelas XI RPL 2</center></div>
                    <div class="card-body">
                        <form action="prolatihan3.php" method="post">
                            <div class="form-group">
                                <label>Nama wali kelas</label>
                                <input type="text" name="wali" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Ketua Murid</label>
                                <input type="text" name="km" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Sekretaris</label>
                                <input type="text" name="sk" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Bendahara</label>
                                <input type="text" name="be" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>jumlah Siswa</label>
                                <input type="text" name="sw" required class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</body>
</html>