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
/*
 * rakenda loodud funktsioon iga pesa värvimiseks
 */


/*
 * koosta funktsioon nimega tekstiTabel, mis võtab parameetrina
 * 4 sõna ja väljastab tabeli, mis koosneb 4st reast, iga rida sisaldab
 * üht sõna, mis on parameetrina määratud
 *
 * lahenduses ei tohi kasutada koodi dubleerimist! - st. ei ole võimalik
 * 4 korda kirjutada sama koodi , vaid tuleb mõelda, kuidas saab
 * tsüklite ja muutujate defineerimisega lahendada antud ülesannet
 *
 * vihje - võib kasutada dünaamilise muutuja loomise võimalust
 *
 * katseta nii tekstiTabel('see', 'on', 'minu', 'tabel');
 */
function tekstiTabel($sona1, $sona2, $sona3, $sona4){
    echo '<table border="1">';

     for ($reaNumber = 1; $reaNumber <= 4; $reaNumber++){
         echo '<tr>';
             echo '<td>';
                echo ${'sona'.$reaNumber};
             echo '</td>';
         echo '</tr>';
     }
    echo '</table>';

}
tekstiTabel('see', 'on', 'minu', 'tabel');


function genereeriVarv()
{
    header('Refresh: 0.2');
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
