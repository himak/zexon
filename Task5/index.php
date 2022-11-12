<?php

class User
{
    public string $role;

    public function __construct(string $role = 'member')
    {
        $this->role = $role;
    }
}

function checkUserType(User $user): bool
{
    return ($user->role === 'admin');
}

$guest = new User();
$zofota = new User('admin');
$admin = 'admin';

var_dump(checkUserType($guest));
var_dump(checkUserType($zofota));
var_dump(checkUserType($admin));
