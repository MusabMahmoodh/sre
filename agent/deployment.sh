cd ../

sudo chmod -R 777 /mnt/www/general/www.canopuz.com/cms/writable

php spark db:seed ConfigSeeder
php spark db:seed AccountGroupSeeder
php spark db:seed EntryTypeSeeder

sudo chmod -R 755 /mnt/www/general/www.canopuz.com/cms/writable