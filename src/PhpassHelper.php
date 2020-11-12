<?php

namespace Juntals01\Phpass;

class PhpassHelper {
    
    private static $_iterationCount = 8;
    private static $_portableHashes = TRUE;

    public static function passwordHash()
    {
        return new PasswordHash(self::$_iterationCount, self::$_portableHashes);
    }

    public static function passwordVerify($plainText, $hash)
    {

        $passwordHash = new PasswordHash(self::$_iterationCount, self::$_portableHashes);
        
        if($passwordHash->CheckPassword($plainText, $hash)){
            return true;
        }

        if($passwordHash->CheckPassword(md5($plainText), $hash)){
            return true;
        }

        return false;
    }

    public static function hash($plainText, $legacyCompatibility = true)
    {
        $passwordHash = new PasswordHash(self::$_iterationCount, self::$_portableHashes);
        if( $legacyCompatibility ){
            return $passwordHash->HashPassword(md5($plainText));
        }

        return $passwordHash->HashPassword($plainText);
        
    }
}