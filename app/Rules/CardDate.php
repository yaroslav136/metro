<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CardDate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (preg_match("(^(0[1-9]|1[0-2])/[2-9][2-9]$)", $value))
            return $value;
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Неправильный формат даты.';
    }
}
