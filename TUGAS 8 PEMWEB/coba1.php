
<?php
$tingkatmiskin=25;

if($tingkatmiskin >= 100){
     $h="kaya";
} else if ($tingkatmiskin >= 50){
    $h ="sedang";    
}
else if ($tingkatmiskin >= 25){
    $h ="miskin";    
}
echo "jumlah uang :$tingkatmiskin <br>";
echo "Kategori :$h ";

?>
