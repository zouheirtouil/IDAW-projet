<?php
require_once('config.php');

try{
        $dbco = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query1 = "INSERT INTO aliments (ID_aliments, Nom, Type) VALUES('$_POST[id]', '$_POST[nom]', '$_POST[type]')";
        $dbco -> exec($query1);
                

        $query2 =
        "INSERT INTO a_pour_apport(ID_apport, ID_aliments, Ratio)
             VALUES 
                (1,'$_POST[id]','$_POST[prot]'),
                (2,'$_POST[id]','$_POST[gluc]'), 
                (3,'$_POST[id]','$_POST[lip]'), 
                (4,'$_POST[id]','$_POST[suc]');
                ";
                
                $dbco -> exec($query2);
            }
            
        catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
                
?>