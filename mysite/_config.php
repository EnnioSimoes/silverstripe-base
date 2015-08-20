<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => '123',
	"database" => 'one-ring',
	"path" => '',
);

require_once('conf/ConfigureFromEnv.php');

//Security::setDefaultAdmin('Admin', 'password123');
// Set the site locale
i18n::set_locale('en_US');