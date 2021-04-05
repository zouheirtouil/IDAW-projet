
<?php
        function renderMenuToHTML($currentPageId){
            $mymenu = array(
                // idPage titre
                'accueil' => array( 'Accueil' ),
                'CRUD' => array('Aliments'),
                'journal' => array('Journal'),
                'profils' => array('Profils'),

                
            );
                 
            echo "<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">";
            echo "<div class=\"container\">";
            echo "<a class=\"navbar-brand js-scroll-trigger\" href=\"index.php?page=accueil\">i Manger Mieux</a>";
            echo "<button class=\"navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
            echo "Menu";
            echo "<i class=\"fas fa-bars\"></i>";
            echo "</button>";
            echo "<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">";
            echo "<ul class=\"navbar-nav ml-auto\">";
            foreach($mymenu as $pageId => $pageParameters) {
                echo "<li class=\"nav-item mx-0 mx-lg-1\">";
                echo "<a";
                echo " class=\"";
                if($pageId === $currentPageId)
                    echo "selected " ;
                echo "nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger\"";
                echo "href=index.php?page=$pageId>$pageParameters[0]</a>";
                echo "</li>";
            }
            echo "</ul></div></div></nav>";
            
            
            
            
            
            
            
            
            
            
            
           
     }
?>
