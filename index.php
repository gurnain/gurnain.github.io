<?php

$error = "";
$successMessage = "";

if ($_POST) {
    
    if (!$_POST["email"]) {
        $error .= "An email address is required.<br>";
    }
    
    if (!$_POST["subject"]) {
        $error .= "The subject is required.<br>";
    }
    
    if (!$_POST["body"]) {
        $error .= "The content field is required.<br>";
    }
    
    if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
        $error .= "The email address is invalid.<br>";
    }
    
    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>'.$error.'</div>';
    } else {
        $emailTo = "gurnaindeepsingh@gmail.com";
        $subject = $_POST["subject"];
        $body = $_POST["body"];
        $headers = "From: ".$_POST["email"];
        
        if (mail($emailTo, $subject, $body, $headers)){
            $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
        } else {
            $successMessage = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent - please try again later</div>';
        }
    }
    
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette|Dancing+Script|Gloria+Hallelujah|Great+Vibes|Handlee|Kaushan+Script|Lobster+Two|Pacifico|Satisfy|Shadows+Into+Light" rel="stylesheet">
      
        <title>MyPortfolio</title>
    </head>
    
    <style type="text/css">
        

        
        .navbar {
            background-color: whitesmoke !important;
            font-family: 'Pacifico', cursive;
        }
        
        @media (min-width: 992px) {
            #myNav {
                padding-top: 0.7rem;
                padding-bottom: 0.7rem;
                -webkit-transition: padding-top 0.3s, padding-bottom 0.3s;
                -moz-transition: padding-top 0.3s, padding-bottom 0.3s;
                transition: padding-top 0.3s, padding-bottom 0.3s;
            }
            
            #myNav .navbar-brand {
                font-size: 2em;
                -webkit-transition: font-size 0.3s;
                -moz-transition: font-size 0.3s;
                transition: font-size 0.3s;
            }
            
            #myNav .navbar-nav {
                margin-top: 0;
            }
            
            #myNav.shrink {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }
            
            #myNav.shrink .navbar-brand {
                font-size: 1.5em;
            }
        }
    
        #home {
            text-align: center; 
            background-image: url("homeImage.jpg");
            min-height: 50%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding-top: 19.4%;
            padding-bottom: 19.4%;
            margin-bottom: 0px;
            color: white;
        }
        
        #home-line {
            background-color: white;
            height: 2px;
        }
        
        
        #about-me-background {
            padding-top: 123px;
            background-color: whitesmoke;
            padding-bottom: 16.5%;
        }
        
        h1 {
            text-align: center;
        }
        
        #about-line {
            background-color: black;
            height: 2px;
            width: 30%;
        }
        
        #projects-line {
            background-color: black;
            height: 2px;
            width: 26%;
        }
        
        #resume-button {
            padding-top: 40px;
        }
        
        #projects {
            padding-top: 100px;
            padding-bottom: 12%;
            
        }
        
        .card-block {
            padding: 10px 10px 10px 10px;
            background-color: whitesmoke;
        }
        
        #contact {
            padding-top: 100px;
            padding-bottom: 13%;
            background-color: whitesmoke;
        }
        
        .section-title {
            font-family: 'Pacifico', cursive;
        }
        
        
    </style>
    
    <body id="top">
    
    
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top navbar-light bg-light" id="myNav">
            
            <a class="navbar-brand js-smooth" href="#top"><span class="navName">Gurnain Saini</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-smooth" href="#home">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-smooth" href="#about-me-background">About</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-smooth" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-smooth" href="#contact">Contact</a>
                    </li>
                </ul>
                
            </div>
        </nav>
        
        <div class="jumbotron" id="home">
            <h1 class="display-2">Gurnain Saini</h1>
            <hr id="home-line" class="my-4">
            <p class="lead">Web Developer - Software Engineer - Embedded Systems Designer</p>
            <p class="lead">
                <a class="btn btn-outline-light btn-lg js-smooth" href="#about-me-background" role="button">Learn more</a>
            </p>
        </div>
        
        <div id="about-me-background">
            <div id="about-me" class="container">

                <h1 class="section-title"><i class="fa fa-star"></i> About Me <i class="fa fa-star"></i></h1>
                <hr id="about-line" class="my-4">
                <div class="row justify-content-center">

                    <div class="col-sm-4">
                    Second year software and embedded systems engineering student at McMaster University. I have great experience in using some of the major programming languages such as Java, C, Python, HTML, CSS, JavaScript and frameworks including jQuery and Bootstrap. I am also familiar with the concepts of object oriented programming, and makefiles in the UNIX OS.
                    </div>

                    <div class="col-sm-4">
                    Furthermore, I will be learning a lot more about shell based programming and bash scripts at McMaster this year. Evidently, I am interested in field of software/web development, but would also like to get experience in the field of embedded computers programming. Currently, I am focusing on web development and learning server side languages such as PHP and MySQL.
                    </div>

                </div>
                <div id="resume-button" class="text-center">
                    <a href="https://drive.google.com/uc?export=download&id=1ZB_3k_cmYn8u8kSymdyLN5n0gxA1Zcob"><button class="btn btn-outline-dark">Download the resume!</button></a>
                </div>


            </div>
        </div>
        
        <div id="projects">
            <div class="container">
                <h1 class="section-title"><i class="fa fa-star"></i> Projects <i class="fa fa-star"></i></h1>
                <hr id="projects-line" class="my-4">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1489389944381-3471b5b30f04?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4868cc90c3c515fb1316574d9aff1640&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title"><i class="fa fa-file-code-o"></i> Code & Play</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <br><br>
                            <a href="http://gurnainsingh-com.stackstaging.com" class="btn btn-secondary">Test your code!</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1494228366869-07a7106eca9f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=92319473d79199f68d30ccb5d72a7737&auto=format&fit=crop&w=1950&q=80" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title"><i class="fa fa-gamepad"></i> Test Your Reaction</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <br><br><br>
                            <a href="#" class="btn btn-secondary">Play the game!</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="https://images.unsplash.com/photo-1511373277659-c604b1f2d61e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c100759fd713f94a4f13c233014565e5&auto=format&fit=crop&w=1951&q=80" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title"><i class="fa fa-android"></i> LocationSet App</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a href="https://github.com/gurnain/LocationSetApp" class="btn btn-secondary">Source code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="contact">
            <div class="container">
                <h1 class="section-title"><i class="fa fa-star"></i> Contact Me <i class="fa fa-star"></i></h1>
                <div id="error"></div>
                <form method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="subject">Name</label>
                        <input type="text" name="subject" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="body">Message</label>
                        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                    </div>
                    <button id="submit" type="submit" class="btn btn-secondary">Send</button>
                </form> 
            </div>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        
        <script type="text/javascript">
            
                $('a.js-smooth[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: (target.offset().top - 70)
                            }, 1000, "easeInOutExpo");
                            return false;
                        }
                    }
                });
                

                $('body').scrollspy({
                    target: '#myNav',
                    offset: 80
                });


                var navbarCollapse = function() {
                    if ($("#myNav").offset().top > 100) {
                        $("#myNav").addClass("shrink");
                    } else {
                        $("#myNav").removeClass("shrink");
                    }
                };
                
                navbarCollapse();
                $(window).scroll(navbarCollapse);
                
                $("form").submit(function(e) {
                
                var error = "";
                
                if ($("#email").val() == "") {
                    error += "The email field is required.<br>";
                }
                
                if ($("#subject").val() == "") {
                    error += "The subject field is required.<br>";
                }
                
                if ($("#body").val() == "") {
                    error += "The content field is required.";
                }
                
                if (error != "") {
                    $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>'+error+'</div>');
                    
                    return false;
                    
                } else {
                    
                    return true;
                    
            });
                    
        </script>
    
    </body>
</html>