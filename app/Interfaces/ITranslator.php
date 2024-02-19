<?php


namespace App\Interfaces;


interface ITranslator{
    public function translate($text, $sourceLanguage, $targetLanguage);
}

?>
