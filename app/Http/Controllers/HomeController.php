<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{
    public function index(){

        $messages = Message::all();   //get all rows from db  as a collection

        // foreach($messages as $message){
        //     echo $message->title;
        // }die;                          //die = so that we don't return the view


        return view('home',[
            'messages' => $messages
        ]);
    }
}
