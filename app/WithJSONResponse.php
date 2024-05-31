<?php

namespace App;

use App\Models\Point;

trait WithJSONResponse
{
    public $codes = [
        "forbidden" => 403,
        "ok" => 200,
        "created" => 201,
        "not found" => 404,
        "bad request" => 400,
        "not acceptable" => 406,
    ];

    function createResponse($code, $items = null, $message = null) {
        // If the $code isn't in $codes then it will throw an error
        // which is expected behaviour
         $response = [
            'status' => $this->codes[$code],
             'message' => $message ?? '',
             'items' => $items ?? '',
        ];

         return response()->json($response);
    }
}
