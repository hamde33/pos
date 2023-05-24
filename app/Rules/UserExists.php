<?php

namespace App\Rules;

use App\Drivers;
use Illuminate\Contracts\Validation\Rule;
use App\Models\Sal_Models\Users_sales;

class UserExists implements Rule
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
       $user= Users_sales::where('phone',$value)->first();
        if(!empty($user)){
          return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'رقم الهاتف غير موجود.';
    }
}
