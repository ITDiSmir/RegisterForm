<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"></html>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <link rel="stylesheet" href="cssform.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="formjq.js"></script>
</head>

<body>
    <fieldset>
        <legend align="right">Registration Form</legend>
        <div class="container">
            <?php 
            if(isset($_SESSION['status'])){
                echo "<h4>".$_SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
            ?>
            <form id="registrationForm" action="phpform.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fullname" placeholder="Write your Name">
                    </div>
                    <div class="input-box">
                        <span class="details">User Name</span>
                        <input type="text" name="username" placeholder="Write your User Name">
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Write your Email">
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phone" placeholder="Write your Phone Number">
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="passwordform" id="password" placeholder="Write your Password">
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="confirmpass" id="conf" placeholder="Confirm your Password">
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="Male">
                    <input type="radio" name="gender" id="dot-2" value="Female">
                    <input type="radio" name="gender" id="dot-3" value="Prefer not to say" checked>
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                        <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                        <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="registr_button" value="Register">
                </div>
            </form>
        </div>
    </fieldset>
</body>