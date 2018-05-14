<?php

namespace App\Http\Controllers;

class ContohController extends Controller
{
    public function index() 
    {
        return "Hello World Contoh XXX";
    }

    public function hello()
    {
        return view("hello");
    }
}