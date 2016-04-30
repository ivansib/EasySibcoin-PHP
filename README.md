EasySibcoin-PHP
===============

A simple class for making calls to Sibcoin's API using PHP.

Getting Started
---------------
1. Include easysibcoin.php into your PHP script:

	`require_once('easysibcoin.php');`
        
        `use easysibcoin\EasySibcoin as EasySibcoin;`

2. Initialize Sibcoin connection/object:

	`$sibcoin = new EasySibcoin('username','password');`

	Optionally, you can specify a host, port. Default is HTTP on localhost port 1944.

	`$sibcoin = new EasySibcoin('username','password','localhost','1944');`

	If you wish to make an SSL connection you can set an optional CA certificate or leave blank
	`$sibcoin->setSSL('/full/path/to/mycertificate.cert');`

3. Make calls to sibcoind as methods for your object. Examples:

	`$sibcoin->getinfo();`
	`$sibcoin->getrawtransaction('6f3ea24fece8662adf981cbc1aae199579c825d0f594f4f1c16b3e38c2e1539c',1);`
	`$sibcoin->getblock('00000005608dfb4814f3ccb8ecfbbf648ed1f563063b5c96b6eb64f21d43e74b');`

        You can find full example in easysibcoin_example.php

Additional Info
---------------
* When a call fails for any reason, it will throw easysibcoin\EasySibcoinException

* The HTTP status code can be found in $sibcoin->status and will either be a valid HTTP status code or will be 0 if cURL was unable to connect.

* The full response (not usually needed) is stored in $sibcoin->response while the raw JSON is stored in $sibcoin->raw_response