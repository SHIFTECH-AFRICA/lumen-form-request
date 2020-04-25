<?php

namespace ShiftechAfrica;

use Illuminate\Support\ServiceProvider;
use ShiftechAfrica\LumenMake\Commands\JobMakeCommand;
use ShiftechAfrica\LumenMake\Commands\ConsoleMakeCommand;
use ShiftechAfrica\LumenMake\Commands\ControllerMakeCommand;
use ShiftechAfrica\LumenMake\Commands\ModelMakeCommand;
use ShiftechAfrica\LumenMake\Commands\MiddlewareMakeCommand;
use ShiftechAfrica\LumenMake\Commands\ExceptionMakeCommand;
use ShiftechAfrica\LumenMake\Commands\RequestMakeCommand;

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
        $this->commands(ExceptionMakeCommand::class);
    }
}
