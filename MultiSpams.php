
clear
figlet ╔══════════╗
  ║██████████╚╗
  ║██╔══╗█╔═╗█║
  ║██║╬╔╝█╚╗║█║
  ║██╚═╝█║█╚╝█║
  ╚╗█████████═╝
     ╚╗║╠╩╩╩╩╩╝
        ║║┈ 🄼🅄🄻🅃🄸 🅂🄿🄰🄼🅂
        ║██╠╦╦╦╗
        ╚╗██████
           ╚════╝ | lolcat
echo "
════════════════════════════════
════════════════════════════════
[π] Author  = Zen
[π] Github   =https://github.com/Zen-Clay
[π] Contact = @aditiastrom
════════════════════════════════
════════════════════════════════" | lolcat
sleep 1
echo $blue." Pilih Nomornya gan =" | lolcat
echo $red." [1] SpamCall Grab Unlimited" | lolcat
echo $green." [2] SpamSms Brutal" | lolcat
echo $yellow." [3] SpamGmail Unlimited" | lolcat
echo $red." [4] Spam Whatsapp OTP Bukalapak" | lolcat
echo " Nomor  : " | lolcat
read nomor

if [ $nomor = 1 ] || [ $eue = 01 ]
then
clear
echo " Installing Calls-Spams..... " | lolcat
sleep 1
pkg install php -y
git clone https://github.com/Zen-Clay/Calls-Spams
cd Calls-Spams
php Calls-Spams.php
fi

if [ $nomor = 2 ] || [ $nomor = 02 ]
then
clear
echo " Installing brutallsms.. " | lolcat
pkg  install python2 -y
git clone https://github.com/TERMUXID3/brutal-sms
cd brutal-sms
python2 run.py
fi

if [ $nomor = 3 ] || [ $nomor = 03 ]
then
clear
echo " Installing gmailsspams...." | lolcat
pkg install php -y
git clone https://github.com/Zen-Clay/gmails
cd gmails
php gmails.php
fi

if [ $nomor = 4 ] || [ $nomor = 04 ]
then
clear
echo " Installing SpamsWhatsapp.." | lolcat
pkg install php -y
git clone https://github.com/siputra12/prank
cd prank
php wa.php
fi




