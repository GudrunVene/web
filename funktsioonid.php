<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 15.12.2017
 * Time: 11:29
 */
/*
 * koosta funktsioon nimega valjastaTabel,
 * mis võtab parameetritena tabeli ridade ja
 * veergude arvu ning väljastab vastava suurusega
 * tabel, mille pesad on täidetud
 * juhuarvudega vahemikus 10-99
 */
/*
 * loo funktsioon genereeriVarv mis genereerib ja tagastab põhiprogrammile
 * genereeritud värvi kujul #xxxxxxx
 * vihje: kasuta tsüklis loodud koodi ja teisenda see funktsiooniks
 */
function valjastaTabel($ridadeArv, $veergudeArv){
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
            echo '<td>';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';

    }
    echo '</table>';
}
valjastaTabel(5,7);
function genereeriVarv(){
    $varv ='';
    for ($arv = 1; $arv <= 10; $arv++){
        if($arv % 2 == 0){
            $arv = 'red';
        }
        else {
            $arv = 'blue';
        }
        return $varv;
}