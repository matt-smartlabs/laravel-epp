<?php

namespace LaravelEPP\Registrars\Nominets;

use LaravelEPP\EPP\EppClient;
use LaravelEPP\Registrars\Nominets\Nominet;

/**
 * Nominet Reseller class service
 */
class NominetDomain extends Nominet
{

  function __construct()
  {
    parent::__construct();
  }

  function __destruct()
  {
    $this->logout();
    parent::__destruct();
  }

  function update($parameters)
  {
    if ($this->login()) {
      $xml = file_get_contents($this->getDataXMLPath('update-reseller'));
      $mappers = [
        '{reference}'    => $parameters['reference'],
        '{domain}' => $parameters['domain'],
      ];
      $xml = $this->mapParameters($xml, $mappers);
      return  $this->epp_client->sendRequest($xml);
    }
  }
}
