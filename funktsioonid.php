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
 *//*
 * rakenda loodud funktsioon iga pesa värvimiseks
 */
function genereeriVarv()
{
    $varv = '#';
    for ($kord = 1; $kord <= 6; $kord++) {
        $juhuTaisarv = rand(0, 15);
        $juhuHex = dechex($juhuTaisarv);
        $varv = $varv . $juhuHex;
    }
    return $varv;
}
function valjastaTabel($ridadeArv, $veergudeArv){
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
            echo '<td style="background-color: '.genereeriVarv().';">';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';

    }
    echo '</table>';
}
valjastaTabel(5,7);
