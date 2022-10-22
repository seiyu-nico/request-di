<?php

namespace App\Http\Controllers;

use App\Http\Requests\Core\User\AbstractCreateRequest;

class UserController extends Controller
{

    //
    public function create(AbstractCreateRequest $request)
    {
        return response()->json(
            [
                'class_name' => get_class($request)
            ],
            200
        );
    }

}
