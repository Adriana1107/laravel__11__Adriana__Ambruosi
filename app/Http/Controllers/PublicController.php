<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;
use Exception;


class PublicController extends Controller
{
     public function welcome(){
        return view('welcome');
    }


}
