<?php

namespace App\Translators;

use App\Interfaces\ITranslator;
use Stichoza\GoogleTranslate\GoogleTranslate;

class GoogleApiTranslator implements ITranslator
{
    public function translate($text, $sourceLanguage, $targetLanguage)
    {
        $lang = new GoogleTranslate('en');
        return $lang->setSource($sourceLanguage)->setTarget($targetLanguage)->translate($text);
    }
}
