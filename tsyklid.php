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
$kord = 0;
while($kord++ <= 4) {
    if ($kord == 3) continue;
    echo '<i>'.$kord.'<i>';

}
do {
    if ($kord > 5) break;
    echo '<b>' . $kord . '</b>';
    while ($kord <= 5) ;
}


