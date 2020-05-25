# XML---projekt
Projekt iz kolegija "XML programiranje" - forma namijenjena turističkim agencijama, nakon popunjavanja informacije se spremaju u XML pomoću php-a

POKRETANJE:

1.) instalirati XAMPP i startati Apache server (https://www.apachefriends.org/xampp-files/7.4.4/xampp-windows-x64-7.4.4-1-VC15-installer.exe)

2.) u C:\xampp\htdocs kopirati file putovanje.php i priložene slike

3.) otvoriti u browseru http://localhost/putovanje.php


SVRHA:

Napravljena je forma za turističke agencije u Hrvatskoj. Korisnik bi ispunjavanjem forme i njenim slanjem dobio povratni odgovor na e-mail koji je naveo. E-mail šalje turistička agencija koja koristi formu, a ponude za putovanje unutar Hrvatske šalje na temelju toga što je korisnik ispunio (starost, mogućnost vlastitog prijevoza ili ne, trajanje putovanja, datum polaska, s kim putuje, ima li kućnog ljubimca, gdje želi odsjesti, u koju regiju Hrvatske bi želio putovati, koji su njegovi interesi i koliko želi izdvojiti). 
Turistička agencija povratne informacije prima u XML formatu koji je ispunjen na temelju korisnikovih odgovora. XML je zapisan pomoću php-a, a sama forma je realizirana pomoću Bootstrap-a. Svaki XML u imenu ima datum i vrijeme kada je ispunjen pa na temelju toga agencija može odgovarati i izrađivati ponude onim redoslijedom kako su poslani (primjer XML-a: putovanje2020-05-25_12-06-59.xml).
