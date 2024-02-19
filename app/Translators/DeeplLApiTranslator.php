<?php

namespace App\Translators;

use App\Interfaces\ITranslator;


class DeeplLApiTranslator implements ITranslator
{
    public function translate($text, $sourceLanguage, $targetLanguage)
    {

        $apiKey = getenv('APIDEEPL_KEY');
        $translator = new \DeepL\Translator($apiKey);
        $result = $translator->translateText($text, $sourceLanguage, $targetLanguage);
        return $result->text;
    }
}
