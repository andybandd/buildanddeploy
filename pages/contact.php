<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Me</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../src/styles.css">
        <link rel="stylesheet" href="../src/contact-styles.css">
        
    </head>
    <body>
        <nav>
            <a href="../bandd.html">
                 <img class="logo"
                 src="../images/logo1.jpg"
                 alt="Build & Deploy Logo"/>
            </a>
            <ul class="nav-bar" id="nav-list">
                <li><a href="../bandd.html">Home</a></li>
                <li><a href="../bandd.html#about-me">About</a></li>
                <li><a href="https://nextjs-blog-sand-delta.vercel.app/">Blog</a></li>
                <li><a href="https://github.com/andybandd" target="_blank">Github</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
            <div class="contact-main">
                <div class="date">
			        <h3><span id="date"></span></h3>
			    </div>
			<section>
                <form method="POST" id="contact-form">
                <div class="input-section">
                    <div class="input-group">
                        <label for="first-name">First name : </label>
                        <input type="text" id="first-name" name="first-name">
                    </div>
                    <div class="input-group">
                        <label for="last-name">Last name : </label>
                        <input type="text" id="last-name" name="last-name">
                    </div>
                </div>
                <div>
                    <div class="input-group">
                        <label for="email">email : </label>
                        <input type="text" id="email" name="email">
                    </div>
                <br>
                </div>
                <div>
                    <div class="input-group">
                        <label for="text-area">Message : </label>
                        <textarea name="text-area" rows="10" cols="60"></textarea>
                    </div>
                </div>
                                   
                <div class="input-section">
                    <input  type="radio" id="office" name="office" value="office">
                    <label for="office">Office</label>
                    <input  type="radio" id="remote" name="remote" value="remote">
                    <label for="remote">Remote</label>
                    <input  type="radio" id="other" name="other" value="other">
                    <label for="other">Other</label>
                </div>
            
                <div class="input-section">
                    <input  type="checkbox" id="contract" name="contract" value="contract">
                    <label for="contract">Contract Work</label>
                    <input  type="checkbox" id="full-time" name="full-time" value="full-time">
                    <label for="full-time">Full Time</label>
                    <input  type="checkbox" id="sponsorship" name="sponsorship" value="sponsorship">
                    <label for="sponsorship">Sponsorship</label>
                </div> 
		        <input  class="button" type="submit" value="Send">
            
                <?php
                  
                if($_POST) {
                    $visitor_first_name = "";
                    $visitor_last_name = "";
                    $visitor_email = "";
                    $visitor_message = "";
                    $email_body = "<div>";
                    
                          
                    if(isset($_POST['first-name'])) {
                        $visitor_first_name = filter_var($_POST['first-name'], FILTER_SANITIZE_STRING);
                        $email_body .= "<div>
                                           <label><b>Visitor First Name:</b></label>&nbsp;<span>".$visitor_first_name."</span>
                                        </div>";
                    }
                 
                    if(isset($_POST['last-name'])) {
                        $visitor_last_name = filter_var($_POST['last-name'], FILTER_SANITIZE_STRING);
                        $email_body .= "<div>
                                           <label><b>Visitor Last Name:</b></label>&nbsp;<span>".$visitor_last_name."</span>
                                        </div>";
                    }
                    
                        
                    
                    if(isset($_POST['email'])) {
                        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
                        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
                        $email_body .= "<div>
                                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                                        </div>";
                    }
                      
                      
                    if(isset($_POST['text-area'])) {
                        $visitor_message = htmlspecialchars($_POST['text-area']);
                        $email_body .= "<div>
                                           <label><b>Visitor Message:</b></label>
                                           <div>".$visitor_message."</div>
                                        </div>";
                    }
                      
                    $recipient = "andy@buildanddeploy.co.uk";
                        $email_body .= "</div>";
                    }
                      
                
                 
                    $headers  = 'MIME-Version: 1.0' . "\r\n"
                    .'Content-type: text/html; charset=utf-8' . "\r\n"
                    .'From: ' . $visitor_email . "\r\n";
                      
                    if(mail($recipient, $email_title, $email_body, $headers)) {
                        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
                    } 
                ?>
                </form>  
            
            </section>
            </div>
			
        <footer>
            <ul class="nav-bar" id="nav-list">
                <li><a href="../bandd.html">Home</a></li>
                <li><a href="../bandd.html#about-me">About Me</a></li>
                <li><a href="https://nextjs-blog-sand-delta.vercel.app/">Blog</a></li>
                <li><a href="https://github.com/andybandd" target="_blank">Github</a></li>
                <li><a href="">Contact Me</a></li>
            </ul>
        </footer>
        <script src="../src/index.js"></script>
    </body>
</html>
   