<?php
// PHP Grid database connection settings
define("PHPGRID_DBTYPE","Mysql"); // or mysqli
define("PHPGRID_DBHOST","208.91.198.197:3306");
define("PHPGRID_DBUSER","mpanchayat");
define("PHPGRID_DBPASS","Mudichur@123");
define("PHPGRID_DBNAME","panchayat");

// Automatically make db connection inside lib
define("PHPGRID_AUTOCONNECT",0);

// Basepath for lib
//define("PHPGRID_LIBPATH",dirname(__FILE__).DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR);
define("PHPGRID_LIBPATH",DIRECTORY_SEPARATOR."ASISI-wfh".DIRECTORY_SEPARATOR."finalmudichurpanchayat".DIRECTORY_SEPARATOR."lib".DIRECTORY_SEPARATOR);