<?php 
$nilai = 80;

if($nilai >0 && $nilai < 50){
    echo "E";
}else if ($nilai >=50 && $nilai<60) {
    echo "D";
}else if ($nilai >=60 && $nilai<70) {
    echo "C";
}else if ($nilai >=70 && $nilai<80) {
    echo "B";
}else if ($nilai >=80 && $nilai<90) {
    echo "A";
}else if ($nilai >= 90 && $nilai<=100){
    echo "A+";
}
?>