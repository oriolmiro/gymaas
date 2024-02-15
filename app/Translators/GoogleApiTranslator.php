<?php

namespace App\Translators;

use GuzzleHttp\Client;

class GoogleApiTranslator
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function translate($text, $sourceLanguage, $targetLanguage)
    {
        $client = new Client([
            'base_uri' => 'https://translation.googleapis.com/language/translate/v2/',
        ]);

        $response = $client->request('POST', 'translate', [
            'query' => [
                'key' => $this->apiKey,
                'q' => $text,
                'source' => $sourceLanguage,
                'target' => $targetLanguage,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return $data['data']['translations'][0]['translatedText'] ?? null;
    }
}   
