<?php

    include "connect.php";

    if (isset($_POST['submit'])) {
        # code...
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $topic = $_POST['topic'];

        $sql = "INSERT INTO webinar(firstname, lastname, email, topic) VALUES ('$firstname', '$lastname', '$email', '$topic')";

        $query = mysqli_query($conn, $sql);

        if($query){
            $result = "Records inserted successfully.";
        }    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Webinar Registration</title>
</head>
<body>
    <div class="col-lg-12 mr-5">
        <form method="post">
            <div class="register card">
                <div class="register-title card-header">
                    <h1 class="display-4 text-center">Register</h1>
                </div>

                <div class="m-3">
                    <label for="firstname">FirstName: </label>
                    <input type="text" name="firstname" class="form-control" required>
                </div>

                <div class="m-3">
                    <label for="lastname">LastName: </label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>
                
                <div class="m-3">
                    <label for="email">Email: </label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="m-3">
                    <label for="topic">Topic: </label>
                    <select class="form-select" name="topic"> 
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Python">Python</option>
                        <option value="Java">Java</option>
                    </select>
                </div>

                <div class="m-auto pb-2">
                    <button type="submit" class="btn btn-success" name="submit">Register</button>
                </div>   
            </div>
        </form>
    </div>
</body>
</html>
