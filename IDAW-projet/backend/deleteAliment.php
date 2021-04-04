<?php
            require_once('config.php');
            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $query1 = 
                    "DELETE FROM a_pour_apport
                     WHERE ID_aliments = ".$_POST['id'];
                $dbco -> exec($query1);


                $query2 = 
                    "DELETE FROM aliments
                    WHERE ID_aliments = ".$_POST['id'];
                $dbco -> exec($query2);
            }
            
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                
?>