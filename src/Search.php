<?php

namespace BuscaCep;

class Search
{
  private $url = "http://viacep.com.br/ws/";

  public function getAddressFromZipCode(string $zipCode): array{
    $zipCode = preg_replace('/[^0-9]/im' , '', $zipCode);

    $get = file_get_contents($this->url . $zipCode . "/json");
    
    return (array) json_decode($get);
  }
}

