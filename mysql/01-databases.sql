# create databases
CREATE DATABASE IF NOT EXISTS `dev_laravel`;

CREATE USER 'dev_laravel'@'%' IDENTIFIED BY 'dev_laravel_pass';
GRANT ALL PRIVILEGES ON `dev_laravel`.* TO 'dev_laravel'@'%';
FLUSH PRIVILEGES;
