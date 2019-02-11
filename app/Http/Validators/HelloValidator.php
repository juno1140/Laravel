<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

/**
 * Description of HelloValidator
 *
 * @author kinoshita
 */
class HelloValidator extends Validator {
    
    public function validateHello($attribute, $value, $parameters) {
        return $value % 2 == 0;
    }
}
