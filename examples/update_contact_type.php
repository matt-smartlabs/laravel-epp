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

$parameters = [
  'contact_id' => 'NEO_63785850',
  'type' => NominetContact::CONTACT_TYPE_INDIVIDUAL,
];
$response = $nc->updateType($parameters);

var_dump($response);
