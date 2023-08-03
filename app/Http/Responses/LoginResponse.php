<?php

namespace App\Http\Responses;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request): RedirectResponse {
        $http_referer = $request->server()["HTTP_REFERER"];
        $parametros = parse_url($http_referer);
        if(isset($parametros['query'])){
            parse_str($parametros['query'], $parametros);
            if(isset($parametros["redirect_to"])){
                return redirect($parametros["redirect_to"]);
            }
        }
        if (in_array("Estudiante", Auth::user()->getRoleNames()->toArray())) {
            return redirect(route("dashboard"));
        }
        return redirect(route("mycursos"));
    }
}
