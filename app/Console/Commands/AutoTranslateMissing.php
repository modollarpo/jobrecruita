<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\AutoTranslationService;

class AutoTranslateMissing extends Command
{
    protected $signature = 'translations:auto {--force : Force refresh all translations}';
    protected $description = 'Automatically translate missing or all language strings.';

    public function handle()
    {
        $service = new AutoTranslationService();
        $force = $this->option('force');

        $service->autoFillMissingTranslations('en', $force);

        $this->info('Translation sync complete.');
    }
}
