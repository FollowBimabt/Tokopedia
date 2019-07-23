<?php
include 'bom.php';

$init = new Bom();

os.system('clear');
echo "\n \033[33;1m╔╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╣";
echo "\n \033[31;1m[</>]\033[36;1mPembuat : \033[32;1mBima Bagus T";
echo "\n \033[31;1m[</>]\033[36;1mYoutube : \033[32;1mBima Cube";
echo "\n \033[31;1m[</>]\033[36;1mGithub  : \033[32;1mhttps://github.com/FollowBimabt";
echo "\n \033[31;1m[</>]\033[36;1mWhatsapp: \033[32;1m085695570951";
echo "\n \033[33;1m╔╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╩╣";
echo "\n";
echo "\n";
os.system('toilet -f big -F gay BBT TOOLS');

echo "\n \033[35;1m Masukan nomor korban \033[33;1m: ";
$a = trim(fgets(STDIN));
echo "\n \033[31;1m[WARNING]\033[36;1m [1:SMS] \033[32;1m: ";
echo "\n \033[31;1m[WARNING]\033[36;1m [2:CALL] \033[32;1m: ";
echo "\n";
echo "\n \033[37;1m Mau pilih nomor berapa ? \033[32;1m:";
$b = trim(fgets(STDIN));
$init->type = "$b";
$init->no = "$a";

if ($init->type == 1) {
        for ($i=0; $i < 2; $i++) {
            $init->Verif($init->no,$init->type);
        }
}elseif ($init->type == 2) {
         $init->Verif($init->no,$init->type);
}
