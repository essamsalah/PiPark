<?php

/**
 * Class for storing global variables.
 * Essam: Modifed to use Environment Variables
 * @author	Humphrey Shotton
 * @version	1.2 (2019-07-22)
 */

class Conf{
	// MySQL Database Settings.
	const DB_HOST = $_ENV["DB_HOST"];
	const DB_USER = $_ENV["DB_USER"];
	const DB_PASS = $_ENV["DB_PASS"];
	const DB_DATABASE = $_ENV["DB_DATABASE"];
	
	// Base URL on the server.
	const URL_BASE = $_ENV["URL_BASE"];
	
	// The password for the pi's to submit data.
	const PI_PASSWORD = $_ENV["PI_PASSWORD"];
	
	// Title of the website.
	const TITLE = $_ENV["TITLE"];
	
	// Google maps API key
	const MAPS_API_KEY = $_ENV["MAPS_API_KEY"];
}
?>