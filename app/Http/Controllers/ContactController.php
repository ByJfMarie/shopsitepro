<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
       


     /**
     * Mail for contact
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Mail::to('jf.marie@outlook.fr')
            ->send(new Contact($request));
 
        return 'Votre message a été envoyé';
    }
}
