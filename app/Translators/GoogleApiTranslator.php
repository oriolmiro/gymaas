<?php

namespace App\Translators;

use Stichoza\GoogleTranslate\GoogleTranslate;

class GoogleApiTranslator
{
    public function translate($text, $sourceLanguage, $targetLanguage)
    {
        // Crea una nueva instancia de GoogleTranslate, pasando 'en' como idioma de origen
        $translator = new GoogleTranslate('en');

        // Establece el idioma de origen y de destino, y luego traduce el texto
        return $translator->setSource($sourceLanguage)
                         ->setTarget($targetLanguage)
                         ->translate($text);
    }
}
