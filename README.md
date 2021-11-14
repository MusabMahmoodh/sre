# Venera CMS

Venera CMS is a multipurpose tool kit to support day top day work of managers. Currently this tool have financial transaction tracking feature.

## Installation

First setup XAMPP bundle on the server. 

[Cent OS Guide](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-centos-7)

[Ubuntu Guide](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04)

[Windows Downloads](https://www.apachefriends.org/download.html)

Following guide to show linux based setup.

[Deployment video guide](https://www.youtube.com/watch?v=1mtEwbO3r9A)

Download the latest [wordpess](https://wordpress.org/latest.zip).

```bash
$ wget https://wordpress.org/latest.zip
```

unzip into apache web directory. Mostly it will be at "/var/www/html/"

```bash
$ unzip latest.zip
```

Setup word press based on their [Guide](https://wordpress.org/support/article/how-to-install-wordpress/)

Then clone the Venera CMS source code inside wordpress root directory as "/var/www/html/cms/".

Source code available at github [github](https://github.com/sugunan/venera.git).

Venera CMS also need to be configured to use same wordpress DB. 

Navigate to the CMS path. Mostly it will be "/var/www/html/cms/"

```bash
$ cd /var/www/html/cms/
```

Change the directory read write permission for all. This is temporary for setup only.

```bash
$ sudo chmod -R 777 /var/www/html/cms
```

Edit "public/index.php" file to point correct wordpress loader file. The line look as follows.

```bash
$wp_loader = '/var/www/html/wp-load.php';
```

Edit the codigniter base config "app/Config/App.php" file to setup the base url for CMS.

```bash
public $baseURL = 'https://www.yourdomain-or-ip.com/cms/public/';
```

Edit the codigniter database config "app/Config/Database.php" file to setup the wordpress DB details as "hostname, DB user, DB pass, DB name".

```bash
	public $default = [
		'DSN'      => '',
		'hostname' => 'localhost',
		'username' => 'wp_user',
		'password' => 'WpPass',
		'database' => 'wp_db',
		'DBDriver' => 'MySQLi',
		'DBPrefix' => '',
		'pConnect' => false,
		'DBDebug'  => (ENVIRONMENT !== 'production'),
		'charset'  => 'utf8',
		'DBCollat' => 'utf8_general_ci',
		'swapPre'  => '',
		'encrypt'  => false,
		'compress' => false,
		'strictOn' => false,
		'failover' => [],
		'port'     => 3306,
	];
```

Following command to be executed under CMS root directory to populate DB. Please consider this is not wordpress root, It is from CMS root.

```bash
php spark migrate
php spark db:seed ConfigSeeder
php spark db:seed AccountGroupSeeder
php spark db:seed EntryTypeSeeder
```

Change the directory read write permission back to restricted "755".

```bash
$ sudo chmod -R 755 /var/www/html/cms
```

## Usage

Project only accessible from public folder. So once setup over open the url as follows "cms/public/".

http://baseurl-of-project/cms/public/

It will redirect to wordpress login page. After properly login it will take back to CMS.

[Usage guide](https://www.youtube.com/watch?v=1mtEwbO3r9A)

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change [mail](mailto:zugunan@gmail.com).

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
