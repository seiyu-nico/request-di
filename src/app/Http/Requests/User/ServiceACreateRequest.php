<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Core\User\AbstractCreateRequest;

class ServiceACreateRequest extends AbstractCreateRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {

        return [
            ...parent::rules(),
            'hoge' => 'required',
            'foo' => 'required',
        ];
    }
}
