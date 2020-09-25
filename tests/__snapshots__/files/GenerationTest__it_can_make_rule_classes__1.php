<?php

namespace Radiocubito\LaravelPackageTools\Rules;

use Illuminate\Contracts\Validation\Rule;

class ExampleRule implements Rule
{
    public function passes($attribute, $value)
    {
        //
    }

    public function message()
    {
        return 'The validation error message.';
    }
}
