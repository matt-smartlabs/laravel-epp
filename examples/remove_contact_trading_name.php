<?php

require __DIR__.'/autoload.php';

use LaravelEPP\Registrars\Nominets\NominetContact;

$username = getenv('NOMINET_LIVE_USERNAME');
$password = getenv('NOMINET_LIVE_PASSWORD');
$host = 'epp.nominet.org.uk';

$nc = new NominetContact();
$nc->setHost($host);
$nc->setUsername($username);
$nc->setPassword($password);

$response = $nc->removeTradingName('NEO_63785850');

var_dump($response);
