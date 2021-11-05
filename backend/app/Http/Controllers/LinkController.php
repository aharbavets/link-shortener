<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{

    function shorten(Request $request) {
        $baseUrl = $request->getSchemeAndHttpHost() . $request->getBasePath();

        $link = new Link();
        $link->original_url = $request->json()->get('url');
        $link->code = '';
        $link->visit_count = 0;
        $link->save();

        try {
            $code = $link->id * 100000 + random_int(0, 99999);
            $code = base_convert($code, 10, 36);
            $link->code = $code;
            $link->save();
        } catch (\Exception $e) {
        }

        return json_encode([
            'result' => $baseUrl . '/' . $link->code
        ]);
    }

}
