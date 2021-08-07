<?php
    require_once("vender/jwt/JWT.php");
    use \Firebase\JWT\JWT;

    function encodeJwt($user)
    {   
        $time = new DateTimeImmutable();
        $issuedAt   = $time->getTimestamp();
        $expire     = $time->modify('+1 minutes')->getTimestamp(); 
        $key = "my_JWT_key";
        $payload = array(
            "user" => $user,
            'iat'  => $issuedAt,
            'exp'  => $expire,
        );
        $jwt = JWT::encode($payload, $key);
        return $jwt;
    }
    function decodeJwt($jwt)
    {
        $key = "my_JWT_key";
        try{
            $payload = JWT::decode($jwt, $key, array('HS256'));
            return  (array)$payload;
        } catch(Exception $e) {   
            return $e;
        }
    }
?>