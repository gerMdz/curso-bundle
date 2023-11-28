<?php

namespace App\Service;

use KnpU\LoremIpsumBundle\KnpUWordProvider;

class CustomWordProvider extends KnpUWordProvider
{
    /**
     * @return array
     */
    public function getListaPalabras(): array
    {
        $words = parent::getListaPalabras();

        $words[] = 'montaña';

        return $words;
    }
}