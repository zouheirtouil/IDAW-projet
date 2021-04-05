<?php
            require_once('config.php');
            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query1 =
                    "DELETE FROM aliment
                     WHERE ID_Aliment = ".$_POST['id'];

                $dbco -> exec($query1);
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                
?>