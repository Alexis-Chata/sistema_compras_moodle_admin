<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request): RedirectResponse {
        if (in_array("Estudiante", Auth::user()->getRoleNames()->toArray())) {
            return redirect(route("mycursos"));
        }
        // otro caso
        return redirect(route("profile.show"));
    }
}
