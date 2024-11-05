<?php
    $pemasukan=50000000;
    $hutangA=16500000;
    $BungaHutangA=0.05*$hutangA;
    $hutangB=9500000;
    $BungaHutangB=0.045*$hutangB;

    $totalbunga=$BungaHutangA+$BungaHutangB;
    $jumlahhutang=$hutangA+$hutangB+$totalbunga;
    $sisauang=$pemasukan-$jumlahhutang;

    echo"sisauang : " . number_format($sisauang,0,',','.' ). "<br>";
    echo"jumlahhutang : " . number_format($jumlahhutang,0,',','.' ). "<br>";
    echo"totalbunga : " . number_format($totalbunga,0,',','.' ). "<br>";