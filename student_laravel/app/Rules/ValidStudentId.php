<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidStudentId implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^(CT|ET)\d{3}$/', $value);
    }

    public function message()
    {
        return 'The :attribute must be in the format CT001, ET001, etc.';
    }
}

