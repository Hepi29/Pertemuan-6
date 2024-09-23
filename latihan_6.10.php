<?php
class StudiKasus {
    public function pengulangan() {
        for ($baris = 0; $baris < 5; $baris++) {
            for ($kolom = $baris; $kolom <= 5; $kolom++) {
                echo "&nbsp;&nbsp;&nbsp;";
            }
            for ($kolom = 0; $kolom <= $baris; $kolom++) {
                echo " * * ";
            }
            echo "<br/>";
        }
    }

    public function array() {
        $array = array ('*','* *','* * *','* * * *','* * * * *','* * * * *','* * * *','* * *','* *','*');
        foreach ($array as $key) {
            echo $key."<br/>";
        }
    }
}
$studikasus1 = new StudiKasus();
echo "<br/>";
echo $studikasus1->pengulangan()."<br/>";
$studikasus2 = new StudiKasus();
echo "<br/>";
echo $studikasus2->array()."<br/>";
?>