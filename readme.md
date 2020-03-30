switch php version: 
sudo update-alternatives --set php /usr/bin/php5.6
sudo update-alternatives --set php /usr/bin/php7.2

switch in apache2:
sudo a2dismod php5.6
sudo a2enmod php7.2
sudo service apache2 restart
