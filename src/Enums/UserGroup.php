<?php

namespace LaravelEnso\UserGroups\Enums;

enum UserGroup: int
{
    case Admin = 1;

    public function isAdmin()
    {
        return $this === self::Admin;
    }
}
