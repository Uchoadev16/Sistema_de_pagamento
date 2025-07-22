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
            $host = 'localhost';
            $database = 'sist_pagamento';
            $user = 'root';
            $password = '';
            $this->connect = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);

            if (!$this->connect) {
                //banco no hostinger
                $host = 'localhost';
                $database = 'u750204740_sist_pagamento';
                $user = 'u750204740_sist_pagamento';
                $password = 'test';
                $this->connect = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);
                
            }
        } catch (PDOException $e) {

            header('location: ../views/desconnect.php');
            exit();
        }
    }
}
