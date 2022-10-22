<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Enums\Service;
use Exception;

class RequestServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Http\Requests\Core\User\AbstractCreateRequest::class, function ($app) {
            // MEMO:ここではrequestをつかってるがheaderを使ったりmatchの条件は適宜変更
            $request = $app->make(\Illuminate\Http\Request::class);
            return match ($request->get('service', null)) {
                Service::A->value => new \App\Http\Requests\User\ServiceACreateRequest(),
                Service::B->value => new \App\Http\Requests\User\ServiceBCreateRequest(),
                default => throw new Exception('request error.'),
            };
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

    }
}
