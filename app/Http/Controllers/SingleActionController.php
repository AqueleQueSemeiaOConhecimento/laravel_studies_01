<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): void
    {
        echo "Single Action Controller";
        echo "<br>";
        echo $this->privateMethod();
    }

    private function privateMethod(): string
    {
        return "Private Method";
    }
}
