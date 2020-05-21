<?php

namespace App\Http\Rules;

use Illuminate\Contracts\Validation\Rule;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CurrentPassword implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $user = Auth::user();

        return Hash::check($value, $user->password);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.current_password');
    }
}
