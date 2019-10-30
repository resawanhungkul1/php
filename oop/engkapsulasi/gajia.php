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
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">   
                <div class="card badge-dark">
                    <div class="card-header"><center>Data Kelas XI RPL 2</center></div>
                    <div class="card-body">
                        <form action="progaji.php" method="post">
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" name="wali" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>NIp</label>
                                <input type="text" name="km" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>alamat</label>
                                <textarea type="text" name="sk" required class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>jumlah hari kerja</label>
                                <input type="number" name="be" required class="form-control" max="30">
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