<?php 

$grade = "";

if ($grade >= 89) {
    $nilai = "sangat baik";
    
} else if  ($grade >= 79) {
   $nilai = "baik";
    
} else if ($grade >= 69) {
   $nilai = "kurang";

} else if ($grade >= 59) {
    $nilai = "kurang";

} else if ($grade >= 0) {
   $nilai = "kurang baik";
} else {
    echo "Nilai tidak Tersedia";
}

echo ("nilai anda adalah ". $nilai);



?>