<?php
require_once('../../connection/index.php');
require_once('../../http/method.php');
require_once('../../util/header.php');
use Connection\DB;
use Http\Method;
use Util\Header;
   
    try {
        Header::init();
        Method::get();
        
        $db = DB::connection();
        $query = $db->prepare("SELECT * FROM users");
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode([
            "success" => true,
            "users" => $users
        ]);
        return;
    } catch (Exception $err) {
        // echo json_encode([
        //     "success" => false,
        //     "message" => $err->getMessage()
        // ]);
        echo $err->getMessage();
        // return;
        // return Response::BadRequest();
    }
?>