<?php

namespace Radiocubito\LaravelPackageTools\Commands;

class MakeLivewire extends GeneratorCommand
{
    protected $type = 'Livewire';

    protected function getStub()
    {
        return __DIR__.'/stubs/livewire.stub';
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Http\Livewire';
    }
}
