<?php
$tingkatKepuasan = 1   ; // Anda dapat mengganti nilai ini untuk menguji kategori yang berbeda
switch($tingkatKepuasan) {
    case 1:
        echo "Sangat Tidak Puas";
        break;
    case 2:
        echo "Tidak Puas";
        break;
    case 3:
        echo "Cukup Puas";
        break;
    case 4:
        echo "Puas";
        break;
    case 5:
        echo "Sangat Puas";
        break;
    default:
        echo "Tidak Diketahui";
}
?>