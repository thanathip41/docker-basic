<?php 
namespace Http;
class Response {
    static function BadRequest ($message = 'bad request') {
        $code = 400;
        http_response_code($code);
        echo json_encode([
            "success" => false,
            "message" => $message,
            "code" => $code
        ]);
        return;
    }

    static function MethodNotAllowed ($message = 'method not allowed') {
        $code = 405;
        http_response_code($code);
        echo json_encode([
            "success" => false,
            "message" => $message,
            "code" => $code
        ]);
        return;
    }
}
?>