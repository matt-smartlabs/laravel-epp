<?php

require __DIR__.'/autoload.php';

use LaravelEPP\Registrars\Nominets\NominetTag;

$username = getenv('NOMINET_LIVE_USERNAME');
$password = getenv('NOMINET_LIVE_PASSWORD');
$host = 'epp.nominet.org.uk';

$nr = new NominetTag();
$nr->setHost($host);
$nr->setUsername($username);
$nr->setPassword($password);

$response = $nr->list();

var_dump($response);