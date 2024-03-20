<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles.css">
        <title>Create an Account</title>
    </head>
    <body>
        <form method="POST" action="meds.php">
            
        <?php
        require_once 'connection.php';
        ?>
            
        <p>Medication Dose Tracker</p>
        <hr>
        <div id="wrapper">
            <div id="newUser">
            <center>
            <h1>Create an Account</h1>
            
            <p>Full Name</p>
            <input type="text" name="full_name" placeholder="Enter your full name"/>
            <br>
            
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter your email address"/>
            <br>
            
            <p>Password</p>
            <input type="text" name="password" placeholder="Enter your password"/>
            <br>
            
            <p>Confirm Password</p>
            <input type="text" name="confirm_password" placeholder="Confirm your password"/>
            <br>
            <br>
            
            <button type="submit" value="Login">Sign Up</button>
        
        <?php
        // put your code here
        ?>
        </center>
        </div>
        
        <div id="returningUser">
            <center>
            <h1>Login</h1>
            
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter your email address"/>
            <br>
            
            <p>Password</p>
            <input type="text" name="password" placeholder="Enter your password"/>
            <br>
            
            <?php
            // put your code here
            ?>
            <br>
            <button type="submit" value="Login">Sign Up</button>
            </center>
            </div>
        </div>
        </form>
    </body>
</html>
