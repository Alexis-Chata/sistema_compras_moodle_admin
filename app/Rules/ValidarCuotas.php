<?php

namespace App\Rules;

use App\Models\Cuota;
use App\Models\Gcuota;
use App\Models\Grupo;
use App\Models\Modalidad;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ValidarCuotas implements Rule
{
    private $splan;
    private $grupo;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($splan,$grupo)
    {
        $this->splan = $splan;
        $this->grupo = $grupo;
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
        $modl = Cuota::where('modalidad_id',$this->splan)->whereExists(function ($query)  {
            $query->select()
                  ->from(DB::raw('gcuotas'))
                  ->whereColumn('gcuotas.cuota_id', 'cuotas.id')
                  ->where('gcuotas.grupo_id',$this->grupo);
        })->get();

        if ($modl == "[]")
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'no se puede agregar este grupo a esta cuota por que ya se le asigno en otra cuota del plan';
    }
}
