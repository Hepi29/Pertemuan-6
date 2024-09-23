<?php

class Perulangan {
    public function loop() {
        $array = array ('Subang','Bandung','Jakarta','Surabaya','Yogyakarta');
        foreach ($array as $key) {
            echo $key."<br/>";
        }
    }
}
$ObjekPerulangan = new Perulangan();
echo "Nama-nama kota di pulau Jawa : "."<br/>";
echo $ObjekPerulangan->loop()."<br/>";
?>