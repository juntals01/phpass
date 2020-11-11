<?php

namespace Jun\Phpass;

class PhpassHelper {
    
    public static function passwordHash()
    {
        return new PasswordHash(8, TRUE);
    }
}