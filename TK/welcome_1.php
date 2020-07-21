<html>
    <head>
        <title>Tech Kart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="welcome.css">
    </head>
    <body>
        <header>
        <div class="container">
            <div id="b"><h1 style="text-align: center;color: white"><span class="highlight"> <img src="tk1.png" width="170" height="70"/> </span></h1></div>
              
        <nav> 
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        </div>
    </header>
        <section id="section1">
            <div class="container">
     <h1>TechKart</h1>
     <p><b>SUBSCRIBED SUCCESFULLY.</b></p>
                <p>WE'RE HAPPY TO CONNECT WITH YOU.</p>
            </div>
        </section>
        <section id="subscribe1">
            <div class="container">
                <h1>Subscribe to Tech Kart now.</h1>
                <form>
                    <p>Subscribed succesfully.</p>
                </form>
            </div>
        </section>
                <section id="section1">
            <div class="container">
                <h1>TechKart</h1>
                <p>Providing best services from July, 2017. </p>
                <p>Known for best security, animation and project services.</p>
            </div>
        </section>
        <footer>
            <p>Tech Kart, copyright &copy; 2017</p>
        </footer>
    </body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nid";
$emailid = $_POST['emailid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO nidhi1 (emailid)
VALUES ('$emailid')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>