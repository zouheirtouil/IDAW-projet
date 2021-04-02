
<?php
        function renderMenuToHTML($currentPageId){
            $mymenu = array(
                // idPage titre
                'accueil' => array( 'Accueil' ),
                'aliments' => array( 'Aliments' ),
                'journal' => array('Journal'),
                'CRUD' => array('CRUD')
            );

            
                echo "<nav class=\"menu\"><ul>";
                foreach($mymenu as $pageId => $pageParameters) {
                    echo "<li><a ";
                    if($currentPageId == $pageId)
                        echo "id=\"currantpage\"";  
                        echo "href=index.php?page=$pageId>$pageParameters[0]</a></li>";
                    }
                echo  "</ul></nav>";
     }
?>
