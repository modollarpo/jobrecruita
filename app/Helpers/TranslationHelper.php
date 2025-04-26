<?php

namespace App\Helpers;

use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationHelper
{
    // List of major languages (ISO 639-1 codes)
    public static $majorLanguages = [
        'en', // English
        'fr', // French
        'de', // German
        'es', // Spanish
        'it', // Italian
        'pt', // Portuguese
        'ru', // Russian
        'zh-CN', // Chinese (Simplified)
        'ja', // Japanese
        'ko', // Korean
        'ar', // Arabic
        'hi', // Hindi
        'bn', // Bengali
        'tr', // Turkish
        'vi', // Vietnamese
        'id', // Indonesian
        'pl', // Polish
        'nl', // Dutch
        'ro', // Romanian
        'sv', // Swedish
        'uk', // Ukrainian
    ];

    public static function autoTranslate($text, $targetLang = 'fr', $sourceLang = 'en')
    {
        try {
            $tr = new GoogleTranslate($targetLang, $sourceLang);
            return $tr->translate($text);
        } catch (\Exception $e) {
            return $text; // fallback if translation fails
        }
    }

    // Bonus: Translate into ALL major languages at once
    public static function autoTranslateAllLanguages($text, $sourceLang = 'en')
    {
        $translations = [];

        foreach (self::$majorLanguages as $lang) {
            $translations[$lang] = self::autoTranslate($text, $lang, $sourceLang);
        }

        return $translations;
    }
}
