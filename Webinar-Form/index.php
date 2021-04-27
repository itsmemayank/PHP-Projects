<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Display</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="title display-1 text-center my-5">Webinar Form</h1>
        <div class="col-lg-6" style="float: left">
            <?php 
                include "insert.php"
            ?>
        </div>
        
        <div class="display-table col-lg-6" style="float: right">
            <table class="table table-bordered table-striped table-hover">
                <div class="table-title card-header">
                    <h1 class="display-4 text-center">Display Table</h1>
                </div>
                <thead>
                    <tr class="text-center">
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         $sql = "SELECT * FROM webinar";
                        $query = mysqli_query($conn, $sql);
                        while ($res = mysqli_fetch_array($query)) {
                            # code...
                    ?>
                    <tr class="text-center">
                        <td><?php echo $res['firstname'];?></td>
                        <td><?php echo $res['lastname'];?></td>
                        <td><?php echo $res['email'];?></td>
                        <td><?php echo $res['topic'];?></td>
                        <td><a href="delete.php?id=<?php echo $res['id'];?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>