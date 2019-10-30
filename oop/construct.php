<?php
class Siswa{
    public function __destruct()
    {
        echo "<br> ini adalah Destructor";
    }

    public function  hallo(){
        return "<br> Hello php";
    }

    public function __construct() {
        echo "ini adalah Constructor";
    }
}
$hello= new Siswa();
echo $hello->hallo();

?>