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
   
}

