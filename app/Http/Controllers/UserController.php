<?php 

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function hello()
    {
        return "Hello World";
    }

    public function index()
    {
        return "index";
    }

    public function edit()
    {
        return view("welcome");
    }

    public function po()
    {
        return "PO";
    }
}
