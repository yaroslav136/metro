<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CardFio implements Rule
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
        if (preg_match("(^[a-zA-Z-]+ [a-zA-Z-]+$)", $value))
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
        return 'Неправильный формат имени и фамилии.';
    }
}
