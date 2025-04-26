<?php

namespace App\Services;

use App\Helpers\TranslationHelper;
use Illuminate\Support\Facades\File;

class AutoTranslationService
{
    protected $langPath;

    public function __construct()
    {
        $this->langPath = resource_path('lang');
    }

    public function autoFillMissingTranslations($sourceLang = 'en', $forceRefresh = false)
    {
        $languages = TranslationHelper::$majorLanguages;

        foreach ($languages as $lang) {
            if ($lang === $sourceLang) {
                continue; // skip source language
            }

            $sourceFile = $this->langPath . '/' . $sourceLang . '/messages.php';
            $targetFile = $this->langPath . '/' . $lang . '/messages.php';

            if (!File::exists($sourceFile)) {
                continue;
            }

            $sourceArray = File::exists($sourceFile) ? include($sourceFile) : [];
            $targetArray = File::exists($targetFile) ? include($targetFile) : [];

            foreach ($sourceArray as $key => $value) {
                if (!isset($targetArray[$key]) || $forceRefresh) {
                    $translated = TranslationHelper::autoTranslate($value, $lang, $sourceLang);
                    $targetArray[$key] = $translated;
                    echo "Translated [$key] to [$lang]: $translated" . PHP_EOL;
                }
            }

            // Save back to file
            $this->writeLangFile($targetFile, $targetArray);
        }
    }

    protected function writeLangFile($path, $array)
    {
        $content = "<?php\n\nreturn " . var_export($array, true) . ";\n";
        File::ensureDirectoryExists(dirname($path));
        File::put($path, $content);
    }
}
