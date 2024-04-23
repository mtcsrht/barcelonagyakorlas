<?php
include("Classes/Db.class.php");
if($_SERVER['REQUEST_METHOD']=='GET'){

    header('Content-Type: application/json');
    
    $conn = new Db("localhost", "root", "", "landmarks");
    $conn = $conn->connect();
    $response = $conn->query("SELECT * FROM landmarks");

    if(!$response){
        http_response_code(505);
        die("Error during query!". $conn->error);
    }

    $results = array();
    while($row = $response->fetch_assoc()){
        $results[] = $row;
    }

    echo(json_encode($results));
    $conn->close();

}
else{
    http_response_code(405);
}