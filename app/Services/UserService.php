<?php

namespace App\Services;

use App\Services\User\UserFactory;

class UserService
{
    /** @var UserFactory */
    private $userFactory;

    /**
     * UserService constructor.
     * @param UserFactory $userFactory
     */
    public function __construct(UserFactory $userFactory)
    {
        $this->userFactory = $userFactory;
    }

    public function show(string $type)
    {
        $user = $this->userFactory->create($type);
        $user->show();
    }
}