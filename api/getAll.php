<?php
//headres
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');


//inicializing api
include_once('../core/inicialize.php');

//instantiate Trackinginfo
$trackinginfo = new Trackinginfo($db_conn);

//trackinginfo query
$result = $trackinginfo->getAll();
$num = $result->rowCount();

//if find record with match creteria
if($num>0){
    $record_arr = array();
    
    //setting field data to variables
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $record_item = array(
            'InternalClient'=>$InternalClient,
            'Client'=>$Client,
            'Module'=>$Module,
            'Language'=>$Language,
            'URL'=>$URL,
            'Date'=>$Date,
            'Width'=>$Width,
            'Height'=>$Height,
            'Browser'=>$Browser,
            'BrowserVersion'=>$BrowserVersion,
            'Java'=>$Java,
            'Mobile'=>$Mobile,
            'OS'=>$OS,
            'OSVersion'=>$OSVersion,
            'Cookies'=>$Cookies,
            'track'=>$track
        );
        //creat array from data
        array_push($record_arr, $record_item);
    }

    // convert to JSON and output
    echo json_encode($record_arr);
    // return error message
} else {
    echo json_encode(array('message' => 'No record found'));
}


