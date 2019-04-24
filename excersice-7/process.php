

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<?php 

$short = "SELECT firstName, lastName,birthDate,CASE card WHEN 1 then 'Yes' ELSE 'no'
end as card,
CASE WHEN cardNumber IS NULL then 'No card available'
else cardNumber
end as cardNumber
FROM clients";

$sth = $handler->prepare("$short");
$sth->execute(); 


    if (isset($_POST["default"])){
        $sth = $handler->prepare("$short");
        $sth->execute();
    }

    if (isset($_POST["top"])){
        $sth = $handler->prepare("$short LIMIT 20");
        $sth->execute();
    }

    if (isset($_POST["loyal"])){   
            $sth = $handler->prepare("$short where card = '1'");
            $sth->execute();
        }

    if (isset($_POST["m"])){   
        $sth = $handler->prepare("$short WHERE lastName LIKE 'M%' ORDER BY lastName ");
        $sth->execute();
    } 

    
?>