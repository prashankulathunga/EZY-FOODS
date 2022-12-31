<?php

            //MYSQL
            $db = parse_ini_file('app.ini');
            $servername = $db['servername'];
            $username = $db['username'];
            $password = $db['password'];
            $database = $db['database'];
            $table = $db['table'];

            //create connection
            $connection = new mysqli($servername, $username, $password, $database);

            //check connection
            if($connection->connect_error) {
                die("connection failed: " . $connect->connect_error);
            }
?>