<?php

namespace App\Translators;

use App\Interfaces\ITranslator;

class TranslatorManager implements ITranslator {
    // === ATTRIBUTES === //
    private int $translationCounter;

    /** 
     * More info about DeepL supported languages
     * URL: https://www.deepl.com/es/docs-api/translate-text/tr
     * */
    private array $ARRAY_DEEPL_SUPPORTED_LANGUAGES = [
        'AR' => 'Arabic',
        'BG' => 'Bulgarian',
        'CS' => 'Czech',
        'DA' => 'Danish',
        'DE' => 'German',
        'EL' => 'Greek',
        'EN' => 'English',
        'ES' => 'Spanish',
        'ET' => 'Estonian',
        'FI' => 'Finnish',
        'FR' => 'French',
        'HU' => 'Hungarian',
        'ID' => 'Indonesian',
        'IT' => 'Italian',
        'JA' => 'Japanese',
        'KO' => 'Korean',
        'LT' => 'Lithuanian',
        'LV' => 'Latvian',
        'NB' => 'Norwegian',
        'NL' => 'Dutch',
        'PL' => 'Polich',
        'PT' => 'Portuguese',
        'RO' => 'Romanian',
        'RU' => 'Russian',
        'SK' => 'Slovak',
        'SL' => 'Slovenian',
        'SV' => 'Swedish',
        'TR' => 'Turkish',
        'UK' => 'Ukranian',
        'ZH' => 'Chinese',
    ];

    // === CONSTRUCTORS === //
    public function __construct() {
        $this->translationCounter = 0;
    }
    
    // === METHODS === //

    /** 
     * Return given sentence translated to given target language.
     * 
     * @param String $text - 
     * @param String $sourceLanguage - 
     * @param String $targetLanguage -
     * 
     * @return String
     * */
    public function translate($text, $sourceLanguage, $targetLanguage) {
        // Check if source and target language are supported in DeepL.
        if (array_key_exists($sourceLanguage, $this->ARRAY_DEEPL_SUPPORTED_LANGUAGES) && array_key_exists($targetLanguage, $this->ARRAY_DEEPL_SUPPORTED_LANGUAGES)) {
            // Set the translator
            $translator = ($this->translationCounter < 6) ? new GoogleApiTranslator() : new DeeplLApiTranslator();
        } else {
            // Set the translator
            $translator = new GoogleApiTranslator();
        }
        
        // Increment or reset translation counter
        $this->translationCounter = ($this->translationCounter < 9) ? $this->translationCounter + 1 : 0;

        // Return translation
        return $translator->translate($text, $sourceLanguage, $targetLanguage);
    }
}

?>