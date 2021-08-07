<?php

http_response_code(404);
echo json_encode([
    "success" => false,
    "message" => "page not found",
    "code" => 404
]);
return;

?>