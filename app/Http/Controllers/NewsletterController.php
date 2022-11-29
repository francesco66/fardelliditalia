<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter) {

        request()->validate(['email' => 'required|email']);
    
        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'Questa email non può essere aggiunta alla newsletter!'
            ])->redirectTo('/#newsletter');
        }
    
        return redirect('/')->with('success', 'Sei iscritto alla nostra newsletter!');
    }

}
