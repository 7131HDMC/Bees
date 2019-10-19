<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class CustomEloquentUserProvider extends EloquentUserProvider
{
   public function validateCredentials(UserContract $user, array $credentials)
   {
       $plain = $credentials['password'];

       if ($plain == $seuModoDeValidacao) {
           return true;
       } else {
           return false;
       }


       // caso queira continuar autenticando pelo modo padrao do Laravel
       // ou seja, validar dos dois modos, utilize a linha de codigo abaixo
       // return parent::validateCredentials($user, $credentials);
   }

} 