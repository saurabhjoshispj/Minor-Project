    <!DOCTYPE html>
    <html>
    <head>
    <link rel="icon"  href="icon.png" type="image/x-icon">    
    <title>Table with database</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon"  href="icon.png" type="image/x-icon">
 <div id="mobile-menu-open" class="shadow-large">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <!-- End #mobile-menu-toggle -->
    <header>
        <div id="mobile-menu-close">
            <span>Close</span> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <ul id="menu" class="shadow">
            <li>
                <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
Home</a>
            </li>
            <li>
                <a href="index7.php"><i class="fa fa-question" aria-hidden="true"></i>
Help</a>
            </li>
         
            <li>
                <a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i>
About</a>
            </li>
            
            <li>
                <a href="contact us.php"><i class="fa fa-phone-square" aria-hidden="true"></i>
Contact us.</a>
            </li>
        </ul>
    </header>
    <!-- End header -->
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon"  href="icon.png" type="image/x-icon">
    <style>
        body { 
    background-image: url("3.jpg");
    height: 100vh;
    background-size: cover; 
    background-position: center;
 }  
    table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    }
    th {
    background-color: #588c7e;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
    <body>
    <table><br><br><br>
    <tr>
    <th>Patient Name</th>
    <th>Date</th>
    <th>Time</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "doctor");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT pname,date, time FROM appointment2";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["pname"]. "</td><td>" . $row["date"] . "</td><td>"
    . $row["time"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
    </body>
    </html>