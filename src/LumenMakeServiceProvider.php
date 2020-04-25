<?php

namespace ShiftechAfrica;

use Illuminate\Support\ServiceProvider;
use ShiftechAfrica\Commands\ConsoleMakeCommand;
use ShiftechAfrica\Commands\ControllerMakeCommand;
use ShiftechAfrica\Commands\FactoryMakeCommand;
use ShiftechAfrica\Commands\KeyGenerateCommand;
use ShiftechAfrica\Commands\ListenerMakeCommand;
use ShiftechAfrica\Commands\MailMakeCommand;
use ShiftechAfrica\Commands\MiddlewareMakeCommand;
use ShiftechAfrica\Commands\ModelMakeCommand;
use ShiftechAfrica\Commands\OptimizeCommand;
use ShiftechAfrica\Commands\PolicyMakeCommand;
use ShiftechAfrica\Commands\ProviderMakeCommand;
use ShiftechAfrica\Commands\RequestMakeCommand;
use ShiftechAfrica\Commands\ResourceMakeCommand;
use ShiftechAfrica\Commands\RouteListCommand;
use ShiftechAfrica\Commands\SeederMakeCommand;
use ShiftechAfrica\Commands\ServeCommand;
use ShiftechAfrica\Commands\JobMakeCommand;
use ShiftechAfrica\Commands\TestMakeCommand;
use ShiftechAfrica\Commands\TinkerCommand;

class LumenMakeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands(JobMakeCommand::class);
        $this->commands(ConsoleMakeCommand::class);
        $this->commands(ControllerMakeCommand::class);
        $this->commands(ModelMakeCommand::class);
        $this->commands(MiddlewareMakeCommand::class);
        $this->commands(RequestMakeCommand::class);
        $this->commands(FactoryMakeCommand::class);
        $this->commands(KeyGenerateCommand::class);
        $this->commands(ListenerMakeCommand::class);
        $this->commands(MailMakeCommand::class);
        $this->commands(OptimizeCommand::class);
        $this->commands(PolicyMakeCommand::class);
        $this->commands(ProviderMakeCommand::class);
        $this->commands(ResourceMakeCommand::class);
        $this->commands(RouteListCommand::class);
        $this->commands(SeederMakeCommand::class);
        $this->commands(ServeCommand::class);
        $this->commands(TestMakeCommand::class);
        $this->commands(TinkerCommand::class);
    }
}
