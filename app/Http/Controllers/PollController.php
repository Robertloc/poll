<?php

namespace App\Http\Controllers;
use App\Choices;
use App\Polls;
use App\Users;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         
    }
    public function index()
    { 
        $polls=Polls::get();
       

       $view=view('polls/index',['polls'=> $polls]);

       return $view;

    }
    
    
}


