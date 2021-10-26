mkdir /mnt/www/general/www.canopuz.com/cms
sudo ln -s /mnt/www/disk2/git/venera/app /mnt/www/general/www.canopuz.com/cms/app
sudo ln -s /mnt/www/disk2/git/venera/public /mnt/www/general/www.canopuz.com/cms/public
sudo ln -s /mnt/www/disk2/git/venera/resources /mnt/www/general/www.canopuz.com/cms/resources
sudo ln -s /mnt/www/disk2/git/venera/system /mnt/www/general/www.canopuz.com/cms/system
sudo ln -s /mnt/www/disk2/git/venera/tests /mnt/www/general/www.canopuz.com/cms/tests
sudo ln -s /mnt/www/disk2/git/venera/writable /mnt/www/general/www.canopuz.com/cms/writable

sudo chown -R www-data:www-data /mnt/www/disk2/git/venera/writable
