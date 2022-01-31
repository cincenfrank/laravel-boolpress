<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        // validation
        $data = $request->all();

        Mail::to('fpetrangeli1@gmail.com')->send(new SendContactMail($data));
    }
}
