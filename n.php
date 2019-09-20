<?php

if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $bersih = "cls";
} else {
    $bersih = "clear";
}

date_default_timezone_set('Asia/Jakarta');
$date = date('d~M~Y H:i:s');
$green = "\e[92m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$nick = "XerXez7 $red Gans
kjj";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";
$bg = "\033[41;2;32m";
$gb = "\033[0;0m";
$dg = "\033[0;0m";
$apalah = "$red SMS WHIT $gb [ TERMUX ]\n$red A]$dg SMS GRATISS             $red B]$dg INSTALL BAHAN \n $red            $red  C]$dg EXIT PROGRAM\n \n PILIH -#AgIl \n#XerXez7$>>";
pilih:
    system($bersih);

echo "
═╗ ╦$lightpurple$gb ┌─┐┬─┐$gb ═╗ ╦$lightpurple ┌─┐┌─$gb\n╔╩╦╝$lightpurple ├┤ ├┬┘ ╔╩╦╝$lightpurple ├┤ ┌─┘$gb\n╩ ╚═$lightpurple └─┘┴└─$gb ╩ ╚═$lightpurple └─┘└─┘$gb\n▒▒ ░ ░▓ ░░░ ▒░ ░░ ▒▓ ░▒\n░░   ░▒ ░ ░ ░  ░  ░▒ ░\n ░    ░     ░     ░░$lightpurple 2E4H-GBLG CREW-BSN-BUFT
$apalah
";
