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
function arvuSumma($number){
    $summa = 0;
     while($number != 0) {
         $arv = $number % 10;
         echo 'arv ='.$arv.'<br/>';
         $number = $number /  10;
         settype($number, 'integer');
         echo 'number = '.$number.'<br/>';
     }
}
arvuSumma(123);
