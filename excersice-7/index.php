<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud exersice - 7</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    <style>
	    body{font-family: 'PT Sans', sans-serif; background: #2c3e50;}
	</style>
</head>
<body>
<?php 
    session_start();
    include_once("connect.php");
    include_once("process.php");

?>

    <div class = "container">
        
        <div class="row d-flex justify-content-center">  
            <div class=" col-md-12">
                <div class ="d-flex justify-content-center">
                    <h1 class="text-white">Clients</h1>
                </div>
            
                <table class = "table table-hover table-curved table-md table-bordered table-dark rounded m-1">
                    <thead class="rounded">
                        <tr>
                            <th>
                                <form method="post">
                                    <input type="submit" name="default" class="btn btn-primary m-2" value="Default">
                                    <input type="submit" name="top" class="btn btn-primary m-2" value="Top 20"> 
                                    <input type="submit" name="m" class="btn btn-primary m-2" value="Only letter 'M'">   
                                </form> 
                                Customers Name: 
                            </th> 
                            <th>
                                <form method = "post">
                                    <input type="submit" name="loyal" class="btn btn-danger m-2" value="Loyalty users">
                                </form>
                                First Name:
                            </th>
                            <th>Date of birth: </th>
                            <th>Loyalty card: </th>
                            <th>Card Number</th>
                        </tr>
                    </thead>
                    <?php
                        while($row = $sth->fetch(PDO::FETCH_ASSOC)): 
                    ?>
                    
                    <tr>
                        
                        <td><?php echo $row['lastName']; ?></td>
                        <td><?php echo $row['firstName']; ?></td>
                        <td><?php echo $row['birthDate']; ?></td>
                        <td><?php echo $row['card']; ?></td>
                        <td><?php echo $row['cardNumber']; ?></td>
                    </tr>

                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>