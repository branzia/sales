<?php

namespace Branzia\Sales;
use Illuminate\Support\Facades\File;
use Branzia\Blueprint\BranziaServiceProvider;

class SalesServiceProvider extends BranziaServiceProvider
{
     public function moduleName(): string
    {
        return 'Sales';
    }
    public function moduleRootPath():string{
        return dirname(__DIR__);
    }

    public function boot(): void
    {
        parent::boot();
    }

    public function register(): void
    {
        parent::register();
    }

    public static function filamentDiscoveryPaths(): array
    {
        return [
            'resources' => [
                ['path' => __DIR__.'/Filament/Resources', 'namespace' => 'Branzia\\Sales\\Filament\\Resources'],
            ],
            'pages' => [
                ['path' => __DIR__.'/Filament/Pages', 'namespace' => 'Branzia\\Sales\\Filament\\Pages'],
            ],
            'clusters' => [
                ['path' => __DIR__.'/Filament/Clusters', 'namespace' => 'Branzia\\Sales\\Filament\\Clusters'],
            ],
            'widgets' => [
                ['path' => __DIR__.'/Filament/Widgets', 'namespace' => 'Branzia\\Sales\\Filament\\Widgets'],
            ],
        ];
    }
}

