<?php

namespace App\Services\User;

use Illuminate\Support\Facades\App;

class UserFactory
{
    /**
     * @param string $type
     * @return AbstractUser
     */
    public function create(string $type)
    {
        App::bind(AbstractUser::class, 'App\Services\User\\' . ucfirst($type));
        return App::make(AbstractUser::class);
    }
}