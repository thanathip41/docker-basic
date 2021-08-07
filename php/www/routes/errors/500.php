<?php

http_response_code(500);
echo json_encode([
    "success" => false,
    "message" => "errors",
    "code" => 500
]);
return;

?>