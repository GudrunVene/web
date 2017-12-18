<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 18.12.2017
 * Time: 14:12
 */
/*
 * 1. koosta funktsioon nimega arvuSumma, mis võtab
 * parameetrina suvalise numbri ja arvutab numbri
 * arvude summat - juhul, kui on argumendina
 * funktsioonile antud number 123, siis programm
 * peab leidma 1+2+3 summa, ehk 6.
 * Lahendamiseks ei tohi kasutada sõnetöötluse võimalusi.
 * Funktsioon peab tagastama leitud summa põhiprogrammile.
 * Põhiprogrammis kasutada väljatrükis tagastatud väärtust koos
 * selgitava tekstiga.
 */
/*
 * täienda antud ülesannet, et funktsiooni kontroll toimuks 5 korda
 * juhuslikult genereeritud arvu alusel vahemikus 0-10000
 */
function arvuSumma($number){
    $summa = 0;
     while($number != 0) {
         $arv = $number % 10;
         $summa = $summa + $arv;
         $number = $number /  10;
         settype($number, 'integer');
     }
     return $summa;
}
for ($kord = 1; $kord <= 5; $kord++){
    $number = rand(0, 10000);
    echo 'Numbri '.$number.' arvude summa on '.arvuSumma($number).'<br/>';
}
