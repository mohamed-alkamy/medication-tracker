<html>
    <head>
        <meta charset="UTF-8">
        <title>Logged in</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            
        <?php
        require_once 'connection.php';
        $query = "SELECT * FROM medications";
        $result = mysqli_query($con, $query);
        $r= mysqli_num_rows ($result);
        ?>    
            
        <p>Medication Dose Tracker</p>
        <a href="index.php">Logout</a>
        <hr>
        <button type="button">Add Medicine</button>
        
        <table>
            <thead>
            <tr>
                <th>Medicine Name</th>
                <th>Dosage</th>
                <th>Frequency</th>
                <th>Actions</th>
            </tr>
            </thead>
            
            <tbody>
                
            </tbody>
        </table>
        <?php
        // put your code here
        ?>
        </form>
    </body>
</html>