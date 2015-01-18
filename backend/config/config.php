<?php

/*
* @version		$Id: copyright.php 
* @Credit: 		Carlos Servín 2015 
* @package		Apollus! Business CRM
* @copyright	Copyright (C) 2015 Carlos Servín. http://www.servin.mx
* @license		GNU/GPL, see http://www.gnu.org/licenses/gpl-2.0.html
* Apollus! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See copyright.php for copyright notices and details.
*/
 
/*****************	WEB Options Definitions ******************/
define("SYS_TITLE",				"Big Busness 0.1");
define("SYS_URL",				"http://localhost/erp");
define("WEB_MAIL",				"clowd@erp.com");
define('SYS_MAIL', 				'clowd@erp.com');
define('PFX_SYS', 				'sf_');

/****************** Main DB Configuration ******************/ 
define("DB_HOST", 				'127.0.0.1');
define("DB_USERNAME", 			'root');
define("DB_PASSWORD", 			'root');
define("DB_NAME", 				'apollus');
define("PFX_MAIN_DB", 			'crm_');

/**************** 	Paths Definitions	 ******************/
define("DIRECTORY_CLASS",		"class/");
define("DIRECTORY_VIEWS", 		"views/");
define("DIRECTORY_BASE", 		"base/");
define("DIRECTORY_TEMPLATES",	"templates/");
define("DIRECTORY_AVATAR", 		"avatar/"); 
define("DIRECTORY_UPLOADS",		"uploads/"); 
define("DIRECTORY_FUNCS",		"funcs/");  
define("DIRECTORY_AJAX",		"ajax/"); 
define("DIRECTORY_IMAGES",		"img/"); 

/**************** 	Errors Definitions	 ****************/
$error_num = 0;
define("LOGIN_SUCCESS", 		$error_num++);
define("LOGIN_BADLOGIN",  		$error_num++);
define("LOGIN_DBFAILURE", 		$error_num++);

$error_num = 100;
define("ERR_DB_CONN",			$error_num++);
define("ERR_DB_EXEC",			$error_num++);
define("ERR_DB_QRY",			$error_num++);
define("ERR_DB_NOT_FOUND",		$error_num++);

$error_num = 200;
define("SES_RESTRICTED_ACTION", $error_num++);
define("SES_RESTRICTED_ACCESS", $error_num++);
define("SES_INVALID_ACTION", 	$error_num++);
define("SES_INVALID_ACCESS", 	$error_num++);

// Validation
$error_num = 300;
define("ERR_VAL_EMPTY",			$error_num++);
define("ERR_VAL_INVALID",		$error_num++);
define("ERR_VAL_NOT_UNIQUE",	$error_num++);
define("ERR_VAL_NOT_INT",		$error_num++);
define("ERR_VAL_NOT_DATE",		$error_num++);
define("ERR_VAL_NOT_EMAIL",		$error_num++); 

$error_num = 400;
define("ERR_FILE_INVALID",		$error_num++);
define("ERR_FILE_UPLOAD",		$error_num++);
define("ERR_FILE_PERMISSION",	$error_num++);
define("ERR_FILE_NOT_FOUND",	$error_num++);

/************** 	Views Configuration 	****************/
$_command=1001;

/**************		LOGGING Definitions 	****************/
define('LOG_DIR', 'log/');
define('LOG_FILE', 'sf_log');
define('LOG_TMPLT', '[%s] %s @ %s: %s');
define('LOG_MAX_SIZE', '1073741824'); // 1G = 1073741824 bytes

define('LOG_PRC_DOWN',  1);
define('LOG_TRANS_ERR', 2);
define('LOG_DB_ERR',  	3);
define('LOG_SESS_ERR',  4);
define('LOG_INFO_ERR',  5);
define('LOG_API_ERR',   6);

define('COLOR1_DEFAULT', '#518351');
define('COLOR2_DEFAULT', '#fafafa');
define('COLOR3_DEFAULT', '#454545');

?>
