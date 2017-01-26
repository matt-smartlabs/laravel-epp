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
  'contact_id' => 'TYDBLZ1KMD6ID-01',
];
$response = $nc->info($parameters);

var_dump($response['dom']->getContactInfo());
