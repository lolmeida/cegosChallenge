<?php   
    
    // Headers
    header('Access-Control_Aloow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Control-Type, Access-Control-Allow-Methods, Autorization, X-Requested-with');

    // includes API
    include_once('../core/inicialize.php');
    
    //inicializing trackinginfo object
    $obj = new Trackinginfo($db_conn);

    //setting properties
    $data = json_decode(file_get_contents('php://input'));
    $obj->InternalClient = $data->InternalClient;
    $obj->Client = $data->Client;
    $obj->Module = $data->Module;
    $obj->Language = $data->Language;
    $obj->URL = $data->URL;
    $obj->Width = $data->Width;
    $obj->Height = $data->Height;
    $obj->Browser = $data->Browser;
    $obj->BrowserVersion = $data->BrowserVersion;
    $obj->Java = $data->Java;
    $obj->Mobile = $data->Mobile;
    $obj->OS = $data->OS;
    $obj->OSVersion = $data->OSVersion;
    $obj->Cookies = $data->Cookies;
    
    //setting json message
    if($obj->create()){
        echo json_encode(array('message' => 'Trackinginfo created successfull.'));
    } else {
        echo json_encode(array('message' => 'ERROR! Trackinginfo not created.'));
    }

