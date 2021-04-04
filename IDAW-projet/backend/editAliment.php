<?php
            require_once('config.php');

            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $query1 = "UPDATE aliments
                SET Nom = '$_POST[nom]' , Type ='$_POST[type]'
                WHERE ID_aliments = '$_POST[id]'" ;
                
                $dbco -> exec($query1);
                


                $query2 = "UPDATE a_pour_apport
                           SET Ratio = '$_POST[prot]'
                           WHERE ID_aliments = '$_POST[id]' AND ID_apport = 1" ;

                $dbco -> exec($query2);
                
                $query3 = "UPDATE a_pour_apport
                           SET Ratio = '$_POST[gluc]'
                           WHERE ID_aliments = '$_POST[id]' AND ID_apport = 2" ;
                $dbco -> exec($query3);
                
                $query4 = "UPDATE a_pour_apport
                           SET Ratio = '$_POST[lip]'
                           WHERE ID_aliments = '$_POST[id]' AND ID_apport = 3" ;
                $dbco -> exec($query4);
                
                $query5 = "UPDATE a_pour_apport
                           SET Ratio = '$_POST[suc]'
                           WHERE ID_aliments = '$_POST[id]' AND ID_apport = 4" ;
                $dbco -> exec($query5);

                
            }
            
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                
?>