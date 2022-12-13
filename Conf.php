<?php

class Conf{

	static private $databases = array(
		'hostname' => 'http:/127.0.0.1/',
		'database' => 'mvc',
		'login' => 'root',
		'password' => '' );	
      

	    static public function getHostname() {
	    	return self::$databases['hostname'];
	    }

	    static public function getDatabase() {
	    	return self::$databases['database'];
	    }

	    static public function getLogin() {
	    	return self::$databases['login'];
	    }

	    static public function getPassword() {
	    	return self::$databases['password'];
	    }

    }

?>