<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;
class AController extends Controller
{
    public function enviaContato(Request $request)
    {
      Mail::to('apsdewebalexandre@gmail.com')->send(new ContatoEmail($request));
    }
}
