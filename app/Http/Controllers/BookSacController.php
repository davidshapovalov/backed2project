<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // ← ADD THIS LINE

class BookSacController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $format = $request->input('format');
        return response("Toto je kniha s ID = $id vo formáte: $format.");
    }
}
