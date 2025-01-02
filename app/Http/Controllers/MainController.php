<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    // Tipagem no retorno com php OMG!!
    public function initMethod(): string
    {
        return "Hello World";
    }

    public function viewPage(): View
    {
        return view("home");
    }
}
