<?php

namespace Radiocubito\LaravelPackageTools\Commands;

class MakeController extends GeneratorCommand
{
    protected $type = 'Controller';

    protected function getStub()
    {
        return __DIR__.'/stubs/controller.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Http\Controllers';
    }
}
