<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        // Aggiungi il messaggio di successo alla sessione
        session()->flash('success', 'Registration successful!');

        return redirect()->intended(config('fortify.home'));
    }
}
