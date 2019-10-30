
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
     <div class="container-fluid">
        <div class="row"
                    
            
    
            <div class="col-md-12" style="padding:20px;">
                <div class="card badge-light">
                <div class="card-header"><center>Data Kelas XI RPL 2</center></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table " >
                                <tr>
                                    <th>Nama Wali Kelas</th>
                                    <th>Nama Ketua Murid</th>
                                    <th>Nama Sekretaris</th>
                                    <th>Nama Bendahara</th>
                                    <th>Jumlah Siswa</th>
                                </tr>

                                <?php
                        
                        class S{
                           public $wali,$km,$sk,$be,$sw;
                            
                            public function __construct($a,$b,$c,$d,$e) {
                                $this->wali=$a;
                                $this->km=$b;
                                $this->sk=$c;
                                $this->be=$d;
                                $this->sw=$e;
                        
                            }
                            public function organigram() {
                              return  $this->wali.$this->km.$this->sk.$this->be.$this->sw;
  
                        
                            }
                        }
                            if (isset($_POST['simpan'])) {
                                $a=$_POST['wali'];
                                $b=$_POST['km'];
                                $c=$_POST['sk'];
                                $d=$_POST['be'];
                                $e=$_POST['sw'];
                            }
                            $S=new S($a,$b,$c,$d,$e);
                            echo $S->organigram();
                        ?>
                                    <tr>
                                        <td><?php echo $S->organigram(); ?></td>
                                      
                                       
 
                                    </tr>
                        
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <center>&copy; 2019 SMK Assalaam</center>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <!-- Jquery, bebas.js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>

</html>