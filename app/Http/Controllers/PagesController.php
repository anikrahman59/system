<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return "Call by functions";
    }

    public function index2()
    {
        return view("hello");
    }

    public function profile()
    {
        $name= "Anik";
        $id = "19-40191-1";
        $courses=array("Web", "OS", "Ethics", "Device");

        return view("profile")
        ->with("n", $name)
        ->with("i", $id)
        ->with("c", $courses);
    }


}
