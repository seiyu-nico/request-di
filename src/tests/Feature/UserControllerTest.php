<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function ServiceACreate()
    {

        $params = [
            'service' => 'A',
            'hoge' => 'piyoA',
            'foo' => 'barA',
        ];
        $response = $this->post('/api/users', $params);
        $response->assertExactJson(
            [
                'class_name' => \App\Http\Requests\User\ServiceACreateRequest::class,
            ]
        );
    }

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function ServiceBCreate()
    {

        $params = [
            'service' => 'B',
            'hoge' => 'piyo',
        ];
        $response = $this->post('/api/users', $params);

        $response->assertExactJson(
            [
                'class_name' => \App\Http\Requests\User\ServiceBCreateRequest::class,
            ]
        );
    }
}
