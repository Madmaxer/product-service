<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    private $projectName = 'products';

    public function register(): void
    {
        $this->mergeConfig();
    }

    public function boot(): void
    {
        $this->publishConfig();
    }

    private function mergeConfig(): void
    {
        $path = $this->getConfigPath();
        $this->mergeConfigFrom($path, $this->projectName);
    }

    private function publishConfig(): void
    {
        $path = $this->getConfigPath();
        $this->publishes([$path => config_path(sprintf('%s.php', $this->projectName))], 'config');
    }

    private function getConfigPath(): string
    {
        return __DIR__ . sprintf('/../config/%s.php', $this->projectName);
    }
}
