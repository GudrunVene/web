<?php
/**
 * Created by PhpStorm.
 * User: gudrun.vene
 * Date: 11.12.2017
 * Time: 12:38
 */
//defineeri 8 muutujat, mille väärtusteks
//on täisarvud, reaalarvud, sõned ja
//boolean väärtused
$var1 = 5;
$var2 = 5.0;
$var3 = '5';
$var4 = 2;
$var5 = 2.0;
$var6 = '2';
$var7 = true;
$var8 = false;

//väljastame väärtused ja nende tüübid
//gettype(muutuja)
echo $var1.'-'.gettype($var1).'<br />';
echo $var2.'-'.gettype($var2).'<br />';
echo $var3.'-'.gettype($var3).'<br />';
echo $var4.'-'.gettype($var4).'<br />';
echo $var5.'-'.gettype($var5).'<br />';
echo $var6.'-'.gettype($var6).'<br />';
echo $var7.'-'.gettype($var7).'<br />';
echo $var8.'-'.gettype($var8).'<br />';

//võrdleme erinevaiv väärtuseid omavahel
$tulemus = $var1 == $var2;
echo 'kas $vae1 == $var2? - '.$tulemus;
echo '<br />';
$tulemus = $var1 == $var3;
echo 'kas $vae1 == $var3? - '.$tulemus;

// == - võrdne
// === - võrdne väärtus ja tüüp
echo '<br />';
$tulemus = $var1 === $var3;
echo 'kas $vae1 === $var3? - '.$tulemus;

// != - ei võrdu
echo '<br />';
$tulemus = $var1 != $var4;
echo 'kas $var1 != $var4? - '.$tulemus;
echo '<br />';

// ++ --
$a = 2; $b = 5;
$c = $a++; // a= 2; b= 5; ei kehti
$d = $b--; // c= 3; d= 4; ei kehti;
echo 'a = '.$a.
    '; b = '.$b.
    '; c = '.$c.
    '; d = '.$d.'<br />';

$a = 2; $b = 5;
$c = ++$a; // a= 2; b= 5;
$d = --$b; // c= 3; d= 4;
echo 'a = '.$a.
    '; b = '.$b.
    '; c = '.$c.
    '; d = '.$d.'<br />';

// katsetame sõne suurendamist
$s = '5';
$s++;
echo $s.'<br />';

// konstantide defineerimine ja kasutamine
define('NUMBER', 5);//defineerimine
echo NUMBER.'<br />'; //väljastamine
//NUJBER++; - ei saa olla