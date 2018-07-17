<?php

namespace Jramos\Jramosmodule\Providers;

use Illuminate\Support\ServiceProvider;
use Jramos\Jramosmodule\Contracts\RepositoryInterface;
use Jramos\Jramosmodule\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
