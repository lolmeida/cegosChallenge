<?php
//headres
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


//inicializing api
include_once('../core/inicialize.php');

//instantiate Trackinginfo
$trackinginfo = new Trackinginfo($db_conn);
$trackinginfo->track = isset ($_GET['track']) ? $_GET['track']: die();
$row=$trackinginfo->getByTrack();






