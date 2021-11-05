<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{

    function shorten(Request $request) {
        $baseUrl = $request->getSchemeAndHttpHost() . $request->getBasePath();

        return json_encode([
            'result' => $baseUrl . '/da98weg3'
        ]);
    }

}
