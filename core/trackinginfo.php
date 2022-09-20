<?php

class Trackinginfo
{
    //db stuff
    private $conn;
    private $table = 'Trackinginfo';

    //Trackinginfo properties
    public $InternalClient;
    public $Client;
    public $Module;
    public $Language;
    public $URL;
    public $Date;
    public $Width;
    public $Height;
    public $Browser;
    public $BrowserVersion;
    public $Java;
    public $Mobile;
    public $OS;
    public $OSVersion;
    public $Cookies;
    public $track;

    //constructor with db connetion
    public function __construct($db_conn)
    {
        $this->conn = $db_conn;
    }


    //Search for  Trackinginfo in database
    public function searchAll($column, $search)
    {
        //create query
        
        $query = "SELECT * FROM " . $this->table . " where ? = ?";
        //prepare statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $column);
        $stmt->bindParam(2, $search);
        $stmt->execute();

        return $stmt;
    }

    //gettin Trackinginfo from database
    public function getAll()
    {
        //create query

        $query = "SELECT * FROM " . $this->table . ";";
        //prepare statement
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    //gettin Trackinginfo by track from database
    public function getByTrack()
    {
        //create query

        
        $query = "SELECT * FROM " . $this->table . " where track = :track ";
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //binding parrams
        $stmt->bindParam(':track', $this->track);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row['InternalClient'] == null) {
            echo json_encode(array('message' => 'No record found'));
            return;
        }

        $this->InternalClient = $row['InternalClient'];
        $this->Client = $row['Client'];
        $this->Module = $row['Module'];
        $this->Language = $row['Language'];
        $this->URL = $row['URL'];
        $this->Date = $row['Date'];
        $this->Width = $row['Width'];
        $this->Height = $row['Height'];
        $this->Browser = $row['Browser'];
        $this->BrowserVersion = $row['BrowserVersion'];
        $this->Java = $row['Java'];
        $this->Mobile = $row['Mobile'];
        $this->OS = $row['OS'];
        $this->OSVersion = $row['OSVersion'];
        $this->Cookies = $row['Cookies'];
        $this->track = $row['track'];


        echo (json_encode($row));
    }



    public function create()
    {
        $query = "
        INSERT INTO TRACKINGINFO
        (InternalClient, Client, Module, Language, URL, Width, Height, Browser, BrowserVersion, Java, Mobile, OS, OSVersion, Cookies, track)
        VALUES
        (:InternalClient, :Client, :Module, :Language, :URL, :Width, :Height, :Browser, :BrowserVersion, :Java, :Mobile, :OS, :OSVersion, :Cookies, :track);";

        $stmt = $this->conn->prepare($query);
        $this->InternalClient = htmlspecialchars(strip_tags($this->InternalClient));
        $this->Client = htmlspecialchars(strip_tags($this->Client));
        $this->Module = htmlspecialchars(strip_tags($this->Module));
        $this->Language = htmlspecialchars(strip_tags($this->Language));
        $this->URL = htmlspecialchars(strip_tags($this->URL));
        $this->Width = htmlspecialchars(strip_tags($this->Width));
        $this->Height = htmlspecialchars(strip_tags($this->Height));
        $this->Browser = htmlspecialchars(strip_tags($this->Browser));
        $this->BrowserVersion = htmlspecialchars(strip_tags($this->BrowserVersion));
        $this->Java = htmlspecialchars(strip_tags($this->Java));
        $this->Mobile = htmlspecialchars(strip_tags($this->Mobile));
        $this->OS = htmlspecialchars(strip_tags($this->OS));
        $this->OSVersion = htmlspecialchars(strip_tags($this->OSVersion));
        $this->Cookies = htmlspecialchars(strip_tags($this->Cookies));


        $hashId =
            $this->InternalClient . ';' .
            $this->Client . ';' .
            $this->Module . ';' .
            $this->Language . ';' .
            $this->URL . ';' .
            $this->Width . ';' .
            $this->Height . ';' .
            $this->Browser . ';' .
            $this->BrowserVersion . ';' .
            $this->Java . ';' .
            $this->Mobile . ';' .
            $this->OS . ';' .
            $this->OSVersion . ';' .
            $this->Cookies;


        $hashTrack = array_shift(unpack('H*', $hashId));
        $this->track = $hashTrack;

        $stmt->bindParam(':InternalClient', $this->InternalClient);
        $stmt->bindParam(':Client', $this->Client);
        $stmt->bindParam(':Module', $this->Module);
        $stmt->bindParam(':Language', $this->Language);
        $stmt->bindParam(':URL', $this->URL);
        $stmt->bindParam(':Width', $this->Width);
        $stmt->bindParam(':Height', $this->Height);
        $stmt->bindParam(':Browser', $this->Browser);
        $stmt->bindParam(':BrowserVersion', $this->BrowserVersion);
        $stmt->bindParam(':Java', $this->Java);
        $stmt->bindParam(':Mobile', $this->Mobile);
        $stmt->bindParam(':OS', $this->OS);
        $stmt->bindParam(':OSVersion', $this->OSVersion);
        $stmt->bindParam(':Cookies', $this->Cookies);
        $stmt->bindParam(':track', $this->track);

        if ($stmt->execute()) {
            return true;
        }

        //print error if something goes wrong
        printf("Error %s. \n", $stmt->error);
    }

   

    
}
