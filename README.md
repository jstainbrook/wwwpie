<h3>Retropie based game server/system management/monitoring tool dev site</h3>
Proof of Concept will run with snex9x - this readme file serves only as a brainstorm dump at the moment.

Requirements:

Python3
Python
Emscripten (embed c progs in www)
Lampstack (apache2, curl,  mariadb-server, mariadb-client, php7) – mariadb then sudo  mysql_secure_installation, libapache2-mod-php7.0)
htop
mod-rewrite enabled
misc utils:
sudo apt-get -y install php7.0-mysql php7.0-curl php7.0-gd php7.0-intl php-pear php-imagick php7.0-imap php7.0-mcrypt php-memcache php7.0-pspell php7.0-recode php7.0-sqlite3 php7.0-tidy php7.0-xmlrpc php7.0-xsl php7.0-opcache php-apcu composor 

framework
phpmini: https://github.com/panique/mini
filemanager script: https://github.com/prasathmani/tinyfilemanager

must sudo apt-get update and sudo-apt get upgrade on rpi - developing on retropie v 4.4

web-ui tools:
jquery
bootstrap
font-awesome
datatables





