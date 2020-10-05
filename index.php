<?php
$request = $_SERVER['REQUEST_URI']; //to get current url
// try{
//     require __DIR__ . '/views/index.php';die;
// } catch(\Exception $e) {
//     echo $e->getMessage();
//     die;
// }
// echo(json_encode(['status'=>202,'message'=>'dasdasda']));die;
switch ($request) {
    case '/api/notify' : //to check route is api/login
        require __DIR__ . '/views/notify.php'; //require complete file
        break; //to get out of switch and not execute further files
    case '/api/view' : //to check route is api/login
        require __DIR__ . '/views/view.php'; //require complete file
        break; //to get out of switch and not execute further files
    case '/api/login' : //to check route is api/login
        require __DIR__ . '/views/index.php'; //require complete file
        break; //to get out of switch and not execute further files
    case '/api/verifyJson' : //to check route is api/login
        require __DIR__ . '/views/verifyJson.php'; //require complete file
        break; //to get out of switch and not execute further files
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
