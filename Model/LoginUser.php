<?php
/**
 * class LoginUser
 * class to manage Login Functionality
 */
class LoginUser {

    /**
     * @param $userName
     * @param $password
     * @return array
     */
    public function verifyUser($userName, $password) {

    require $_SERVER['DOCUMENT_ROOT'] . '/api/DB/db.php';
    $sql = "select * from user_details where name='". $userName ."' AND password ='" .$password . "';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { //condition which says more then one row of data exists
    // output data of each row
    // while($row = $result->fetch_assoc()) { //if you want to traverse all path

        return [
            'status'=>202,
            'msg'=>'Success'
        ];
    // }
        $conn->close();
    }
    return [
        'status'=>202,
        'msg'=>'Failure'
    ];
    } 

    /**
     * 
     * @return array
     */
    public function getData()
    {
        return [
            'status'=>202,
            'msg'=>'Failure'
        ];
    }
}