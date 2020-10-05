<?php 

require $_SERVER['DOCUMENT_ROOT'] . '/api/Model/LoginUser.php';
$loginUser = new LoginUser(); //Object Creation
try {
    if(isset($_POST['user_name']) && isset($_POST['password'])){ //Condition for post name & password
        echo json_encode($loginUser->verifyUser($_POST['user_name'], $_POST['password'])); //printing when some post user_name & password in api 
    } else {
        //if user_name and password is not sent to server
        echo json_encode([
            'status'=>404,
            'msg'=>'please enter proper input data'
        ]);
    }
} catch (\Throwable $th) {
echo $th->getMessage();
}
?>