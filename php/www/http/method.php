<?php
namespace Http;

require_once('response.php');
use Http\Response;
use Exception;

class Method {
    static function get () {
        $requestMethod = $_SERVER["REQUEST_METHOD"] === 'GET';
        if(!$requestMethod) {
            throw new Exception(Response::MethodNotAllowed());
        }
        return $requestMethod;
    }

    static function post () {
     
        $requestMethod = $_SERVER["REQUEST_METHOD"] === 'POST';
        if(!$requestMethod) {
            throw new Exception(Response::MethodNotAllowed());
        }
        return $requestMethod;
         
    }

    static function put ($message , $code) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => "bad request",
            "code" => 400
        ]);
        return;
    }

    static function delete ($message , $code) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => "bad request",
            "code" => 400
        ]);
        return;
    }
}
?>