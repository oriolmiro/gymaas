<?php

namespace App\Translators;

use Stichoza\GoogleTranslate\GoogleTranslate;

class GoogleApiTranslator
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function translate($text, $sourceLanguage, $targetLanguage)
    {
        $lang = new GoogleTranslate('en');
        return $lang->setSource('en')->setTarget('es')->translate('Hello world.');

        $data = json_decode($response->getBody(), true);

        return $data['data']['translations'][0]['translatedText'] ?? null;
    }
}   
