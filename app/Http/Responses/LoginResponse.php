<?php



namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        // Aggiungi il messaggio di successo alla sessione
        session()->flash('success', 'You have successfully logged in!');
        
        return redirect()->intended(config('fortify.home'));
    }
}
