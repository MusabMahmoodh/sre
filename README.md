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

## Goals of the challenge

* Establish adequate monitoring for the application to ascertain a correlation of events during standard use
* Identify the failture points of the application through testing, monitoring or diagnostics
* Identify root cause for these identified failtures and suggest prevention of reoccurrence
* Permanantly fix or build temporary workarouns to alleviate the issues at hand

## Details of challenge

* Deploy the tool
  * Deployment guide given above but few steps are missing on it
  * Follow the error messages and try to fix those to complete installation
* Establish adequate monitoring
  * Choose suitable monitoring framework non other than pirated tools
  * We should be able to monitor the infra health of OS, Apache, PHP, MySQL and Network traffic
  * We should be able to find number of hits, status code as 200, 404, 5xx in reports
* Identify the failture points of the application through testing, monitoring or diagnostics
  * Test the application for any bugs and generate bug list [user guide](https://www.youtube.com/watch?v=Znt4QGNRXAo)
  * If any standard issue as coding standards, vulnerbilities, data leakage and backdoors then list that also.
* Identify root cause for these identified failtures and suggest prevention of reoccurrence
  * Explain the steps on how those root cause identified
  * Make sure all vulnerabilities are attended on this list
* Permanantly fix or build temporary workarouns to alleviate the issues at hand

## License
[MIT](https://choosealicense.com/licenses/mit/)
