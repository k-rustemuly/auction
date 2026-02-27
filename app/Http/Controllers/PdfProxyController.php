<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfProxyController extends Controller
{
    public function show(Request $request)
    {
        $file = $request->query('file');
        if (! $file || strtolower(pathinfo($file, PATHINFO_EXTENSION)) !== 'pdf') {
            abort(400, 'PDF url is required');
        }
        $path = storage_path('app/public/'.$file);
        return response()->file($path, [
            'Access-Control-Allow-Origin' => '*',
        ]);
    }
}
