<?php
class connect
{
    protected $connect;

    function __construct()
    {
        $this->connect_database();
    }
    function connect_database()
    {
        try {
            //banco no localhost
            $host = require("../models/private/config.php")['local']['sist_pagamento']['host'];
            $database = require("../models/private/config.php")['local']['sist_pagamento']['banco'];
            $user = require("../models/private/config.php")['local']['sist_pagamento']['user'];
            $password = require("../models/private/config.php")['local']['sist_pagamento']['senha'];

            $this->connect = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);

            if (!$this->connect) {
                //banco no hostinger
                $host = require("../models/private/config.php")['hospedagem']['sist_pagamento']['host'];
                $database = require("../models/private/config.php")['hospedagem']['sist_pagamento']['banco'];
                $user = require("../models/private/config.php")['hospedagem']['sist_pagamento']['user'];
                $password = require("../models/private/config.php")['hospedagem']['sist_pagamento']['senha'];
                $this->connect = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);
                
            }
        } catch (PDOException $e) {

            header('location: ../views/desconnect.php');
            exit();
        }
    }
}
