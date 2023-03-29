<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
/**
* @OA\Info(
*      version="1.0.0",
*      title="LiberFly",
*      description="LiberFly Api Documentation",
*      @OA\Contact(
*          email="albertcruz@terra.com.br"
*      )
* )
*
* @OA\Server(
*      url=L5_SWAGGER_CONST_HOST,
*      description="LiberFly API"
* )
*
*/
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
