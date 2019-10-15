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
      $name = $request->input('nome');
      $email = $request->input('email');
      $msg = $request->input('mensagem');
      echo "<h1>Foi enviado para nosso E-mail de contato: </h1> Nome:",$name,"<br>E-mail:",$email,"<br>Mensagem:",$msg;
    }
}
