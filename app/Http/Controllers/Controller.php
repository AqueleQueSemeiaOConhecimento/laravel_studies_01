<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function cleanUpperCaseString($string): string
    {
        // remover os espaçõs em branco no inicio e fim de uma string
        // converter a string para uppercase

        return strtoupper(trim($string));
    }
}
