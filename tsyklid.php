<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 15.12.2017
 * Time: 10:30
 */
//täienda antud lahendust nii, et paaris arvud oleks
//punast värvi ja paaritud arvud
//sinist värvi
$varv ='';
for ($arv = 1; $arv <= 10; $arv++){
    if($arv % 2 == 0){
        $arv = 'red';
    }
    else {
        $arv = 'blue';
    }
    echo '<p style="color:'.$varv.';">'.'</p>';
}
$kord = 1;
while/$kord <= 5) {
    echo '<i>'.$kord.'<i>';
    $kord++;
}

