<?php

namespace App\Service;

use GerMdz\LoremIpsumBundle\KnpUWordProvider;

class CustomWordProvider extends KnpUWordProvider
{
    /**
     * @return array
     */
    public function getListaPalabras(): array
    {
        $words = parent::getWordList();

        $words[] = 'montaña';

        return $words;
    }
}