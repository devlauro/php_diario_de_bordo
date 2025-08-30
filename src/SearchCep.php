<?php

namespace Lauro\Php;

class SearchCep
{
    private $url = 'https://viacep.com.br/ws/';

    public function getAddressFromZipCode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/', '', $zipCode);
        $resultado = file_get_contents($this->url . $zipCode . '/json/');
        return (array) json_decode($resultado);
    }
}
