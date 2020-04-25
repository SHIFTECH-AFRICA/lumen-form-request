<?php
namespace ShiftechAfrica\Commands;

use Illuminate\Console\GeneratorCommand;

class RequestMakeCommand extends GeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:request';

    /**
     * @var string
     */
    protected $description = 'Make a new request.';

    protected $type = 'LumenFormRequest';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/request.stub';
    }

    protected function getDefaultNamespace($namespace)
    {
        return $namespace.'\Http\Requests';
    }
}
