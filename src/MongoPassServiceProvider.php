<?php

namespace Pdustdar\MongoPass;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Pdustdar\MongoPass\Console\ClientCommand;


class MongoPassServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Passport::useAuthCodeModel(AuthCode::class);
        Passport::useClientModel(Client::class);
        Passport::usePersonalAccessClientModel(PersonalAccessClient::class);
        Passport::useTokenModel(Token::class);
        Passport::routes();
        Passport::personalAccessTokensExpireIn(Carbon::now()->addHours(24));


        $this->commands([
            ClientCommand::class,
        ]);
    }
}
