<?php

namespace Jramos\Jramosmodule\Providers;

use Illuminate\Support\ServiceProvider;
use Jramos\Jramosmodule\Commands\CommandMakeCommand;
use Jramos\Jramosmodule\Commands\ControllerMakeCommand;
use Jramos\Jramosmodule\Commands\DisableCommand;
use Jramos\Jramosmodule\Commands\DumpCommand;
use Jramos\Jramosmodule\Commands\EnableCommand;
use Jramos\Jramosmodule\Commands\EventMakeCommand;
use Jramos\Jramosmodule\Commands\FactoryMakeCommand;
use Jramos\Jramosmodule\Commands\InstallCommand;
use Jramos\Jramosmodule\Commands\JobMakeCommand;
use Jramos\Jramosmodule\Commands\ListCommand;
use Jramos\Jramosmodule\Commands\ListenerMakeCommand;
use Jramos\Jramosmodule\Commands\MailMakeCommand;
use Jramos\Jramosmodule\Commands\MiddlewareMakeCommand;
use Jramos\Jramosmodule\Commands\MigrateCommand;
use Jramos\Jramosmodule\Commands\MigrateRefreshCommand;
use Jramos\Jramosmodule\Commands\MigrateResetCommand;
use Jramos\Jramosmodule\Commands\MigrateRollbackCommand;
use Jramos\Jramosmodule\Commands\MigrateStatusCommand;
use Jramos\Jramosmodule\Commands\MigrationMakeCommand;
use Jramos\Jramosmodule\Commands\ModelMakeCommand;
use Jramos\Jramosmodule\Commands\ModuleMakeCommand;
use Jramos\Jramosmodule\Commands\NotificationMakeCommand;
use Jramos\Jramosmodule\Commands\PolicyMakeCommand;
use Jramos\Jramosmodule\Commands\ProviderMakeCommand;
use Jramos\Jramosmodule\Commands\PublishCommand;
use Jramos\Jramosmodule\Commands\PublishConfigurationCommand;
use Jramos\Jramosmodule\Commands\PublishMigrationCommand;
use Jramos\Jramosmodule\Commands\PublishTranslationCommand;
use Jramos\Jramosmodule\Commands\RequestMakeCommand;
use Jramos\Jramosmodule\Commands\ResourceMakeCommand;
use Jramos\Jramosmodule\Commands\RouteProviderMakeCommand;
use Jramos\Jramosmodule\Commands\RuleMakeCommand;
use Jramos\Jramosmodule\Commands\SeedCommand;
use Jramos\Jramosmodule\Commands\SeedMakeCommand;
use Jramos\Jramosmodule\Commands\SetupCommand;
use Jramos\Jramosmodule\Commands\TestMakeCommand;
use Jramos\Jramosmodule\Commands\UnUseCommand;
use Jramos\Jramosmodule\Commands\UpdateCommand;
use Jramos\Jramosmodule\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
