<?php
            require_once('config.php');

            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                
                $query1 = "UPDATE repas
                           SET Date = '$_POST[date]',Type = '$_POST[type]',Email = '$_POST[email]'
                           WHERE ID_repas = '$_POST[id]' " ;

                $dbco -> exec($query1);
                
                $query4 = "UPDATE consommation
                           SET Quantite = '$_POST[qnt]', ID_Aliment = '$_POST[id]', ID_repas = '$_POST[id]'
                           WHERE ID_Aliment = '$_POST[id]' " ;
                $dbco -> exec($query4);
                

                
                $query5 = "UPDATE aliment
                           SET Nom = '$_POST[aliment]' 
                           WHERE ID_Aliment = '$_POST[id]'" ;
                $dbco -> exec($query5);

                
            }
            
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                
?>