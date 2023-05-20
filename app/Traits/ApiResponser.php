<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{
    // build success responser
    // success reponser
    public function successReponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type','application/json');

    }

    public function errorMessage($message, $code)
    {

 return response($message, $code)->header('Content-Type','application/json');

    }
}