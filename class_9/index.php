<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book_Sign_up_Form</title>
    <link rel="stylesheet" href="./style_9.css">
</head>
<body>

    <!--Heading-->
    <div class="title">
        <h1>Sign-Up</h1>  
    </div>

    <!--User form-->
    <form action="./controllers/PostController.php" method="POST">
      <div class="C1">  
      <!--Author's Title-->
         <div class="text">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="Enter the title">
            <?php

               echo isset($_SESSION['title_error']) ? ($_SESSION['title_error']):"";
               echo '<br>'; 
            ?>
      <!--Author's Name-->
            <div class="text">
            <label for="name">Author's name:</label>
            <input type="name" id="name" name="name" placeholder="Enter your name" >
            <?php
               echo isset($_SESSION['name_error']) ? ($_SESSION['name_error']):"";
               echo '<br>'; 
            ?>
      <!--Author's mail-->
            </div>
            <div class="text">
            <label for="email">Author's email:</label>;
            <input type="email" name="email" placeholder="...@gmail.com" >
            <?php
               echo isset($_SESSION['email_error']) ? ($_SESSION['email_error']):"";
               echo '<br>';
            ?>
            </div>
      <!--Author's Number-->
            <div class="text">
            <label for="number">Author's Number:</label>
            <input type="number" id="number" name="number" placeholder="01*****"  >
            <?php
               echo isset($_SESSION['number_error']) ? ($_SESSION['number_error']):"";
               echo '<br>';
            ?>
            </div>
      <!--Author's Password-->
            <div class="text">
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" placeholder="******" >
            <?php
               echo isset($_SESSION['password_error']) ? ($_SESSION['password_error']):"";
               echo '<br>';
               
            ?>
            </div>
      <!--Author's Description-->
            <div class="text">
            <label for="description">Author's description:</label>
            <textarea name="description" placeholder="post description"></textarea></textarea>
            <?php
            
            echo isset($_SESSION['description_error']) ? ($_SESSION['description_error']):"" ;
            echo '<br>';
            
            ?>
            </div>

            <br>
      <!--Submit Button-->
            <div class="btn">
                <button type="Submit" value="Submit" >Submit</button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>

<?php
    session_unset();
?>