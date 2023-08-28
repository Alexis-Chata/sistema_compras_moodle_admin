<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidarTotal implements Rule
{
    private $des_monto;
    private $total;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($des_monto,$total)
    {
        $this->des_monto = $des_monto;
        $this->total = $total;
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

        if ($this->total > $this->des_monto){return true;}
        else{return false;}

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'no se puede agregar un descuente que genere un comprobante negativo';
    }
}
