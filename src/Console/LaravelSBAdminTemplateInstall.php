<?php

namespace KyKurniawan\LaravelSBAdminTemplate\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class LaravelSBAdminTemplateInstall extends Command
{
    protected $signature = 'laravel-sb-admin-template:install';

    protected $description = 'Install the Laravel SB Admint Template';

    public function handle()
    {
        $this->info('Installing Template...');

        $this->info('Publishing configuration...');

        if (!$this->configExists('laravel-sb-admin-template.php')) {
            $this->publishConfiguration();
            $this->info('Configuration published');
        } else {
            if ($this->shouldOverwriteConfig()) {
                $this->info('Overwriting configuration file...');
                $this->publishConfiguration($force = true);
            } else {
                $this->info('Existing configuration was not overwritten');
            }
        }

        $this->info('Publishing assets...');

        $this->publishAssets();

        $this->info('Assets published');

        $this->info('Installed Laravel SB Admin Template');
    }

    private function configExists($fileName)
    {
        return File::exists(config_path($fileName));
    }

    private function shouldOverwriteConfig()
    {
        return $this->confirm(
            'Config file already exists. Do you want to overwrite it?',
            false
        );
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "KyKurniawan\LaravelSBAdminTemplate\ServiceProvider",
            '--tag' => "sb-admin-config"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

        $this->call('vendor:publish', $params);
    }

    private function publishAssets($forcePublish = false)
    {
        $params = [
            '--provider' => "KyKurniawan\LaravelSBAdminTemplate\ServiceProvider",
            '--tag' => "sb-admin-assets"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

        $this->call('vendor:publish', $params);
    }
}
