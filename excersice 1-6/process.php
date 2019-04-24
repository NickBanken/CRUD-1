
<?php 


$sth = $handler->prepare("SELECT * FROM clients");
$sth->execute(); 

$mov = $handler->prepare("SELECT * FROM shows ORDER BY title");
$mov->execute();

    if (isset($_POST["default"])){
        $sth = $handler->prepare("SELECT * FROM clients");
        $sth->execute();
    }

    if (isset($_POST["top"])){
        $sth = $handler->prepare("SELECT * FROM clients LIMIT 20");
        $sth->execute();
    }

    if (isset($_POST["loyal"])){   
            $sth = $handler->prepare("SELECT * FROM clients where card = '1'");
            $sth->execute();
        }

    if (isset($_POST["m"])){   
        $sth = $handler->prepare("SELECT * FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ");
        $sth->execute();
    } 

    
?>