<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Tech Kart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="servicecss.css">
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            
        </script>
    </head>
    <body>
        <header>
        <div class="container">
            <div id="b"><h1 style="text-align: center;color: white"><span class="highlight"> <img src="tk1.png" width="170" height="70"/> </span></h1></div>
              
        <nav> 
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="current"><a href="service.php">Services</a></li>
                <li><a href="gallery.html" >Gallery</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        </div>
    </header>
        <section id="section1">
            <div class="container">
  
            </div>
        </section>
        <section id="subscribe1">
            <div class="container">
                <h1>Subscribe to Tech Kart now.</h1>
                <form action="welcome.php" method="post" class="quote" enctype="multipart/form-data">
                    <input id="a" type="email" placeholder="Enter email" name="emailid"/>
                    <button type="submit" class="button_1">Subscribe</button>
                </form>
            </div>
        </section>
        <div class="container">
  <h2>List of available projects and services</h2>
  <p>Type something in the input field to search the list for specific items:</p>  
 <!-- <input class="form-control" id="myInput" type="text" placeholder="Search..">-->
  <br>
  <ul class="list-group" id="myList">
      <li class="list-group-item"><a href="da.png" target="new">Dual App</a></li>
      <li class="list-group-item"><a href="da1.png" target="new">Cryptography</a></li>
      <li class="list-group-item"><a href="da2.png" target="new">Cafe Management</a></li>
      <li class="list-group-item"><a href="http://renforcermotorsports.com/" target="new">Live website</a></li>
      <li class="list-group-item"><a href="http://map.norsecorp.com/#/" target="new">Norse Map attack</a></li>
      <li class="list-group-item"><a href="smile.html" target="new">computer animation</a></li>
      <li class="list-group-item"><a href="yo.html" target="new">animation</a></li>
  </ul>  
</div>


        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">
                        SERVICES
                    </h1>
                    <ul id="services">
                        <li><h3>Desktop Application</h3>
                            <p>Create offline applications that require no internet connection. easy to deploy and use. 
                            We take care of the User Interface.</p>
                            <p>Price: 90$</p>
                        </li>
                        <li><h3>Website design</h3>
                            <p>Design websites for clients. We create responsive websites considering our clients
                            perspective.
                            </p>
                            <p>Price: $200</p>
                        </li>
                        <li><h3>Applet</h3>
                            <p> We design applets for our clients according to their demands and requirements. </p>
                            <p>Price: 50$</p>
                        </li>
                        <li><h3>Mobile Application</h3>
                            <p>Develop mobile applications of all domains.</p>
                            <p>Price: 150$</p>
                        </li>
                        <li><h3>Norse Map View</h3>
                            <p>Every moment the no. of security attacks increase. 
                            we need to be safe.</p>
                            
                        </li>
                    </ul>
                </article>
            
            <aside id='sidebar'>
                <div class="dark">
                    <h3>Suggestions/Complaints</h3>
                    <form action='config.php' method="post" class="quote" enctype="multipart/form-data">
                        <div>
                            <label>Name</label><br>
                            <input id="n" type="text" placeholder="Name" name="name" />
                        </div>
                        <div>
                            <label>E-Mail</label><br>
                            <input id="e" type="text" placeholder="E-Mail" name="email"/>
                        </div>
                        <div>
                            <label>Message</label><br>
                            <textarea id="m" placeholder="Message"name="message"></textarea>
                        </div>
                      
                        <button id="mybtn" class="button_1" type='submit'>Send</button>
                    </form>
            </aside>
</div>
        </section>
       
        <footer>
            <p>Tech Kart, copyright &copy; 2017</p>
        </footer>
    </body>
</html>
