<?php

echo "Viva la raza";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="myPage">

    <!-- Sidebar on click -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
            <i class="fa fa-remove"></i>
        </a>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
        <a href="#" class="w3-bar-item w3-button">Link 4</a>
        <a href="#" class="w3-bar-item w3-button">Link 5</a>
    </nav>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>

            <!-- Logo -->
            <a href="#" class="w3-bar-item w3-button w3-blue">roverin</a>

            <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Nosotros</a>
            <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Equipo</a>
            <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Experiencia</a>
            <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contacto</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="#" class="w3-bar-item w3-button">Link</a>
                    <a href="#" class="w3-bar-item w3-button">Link</a>
                    <a href="#" class="w3-bar-item w3-button">Link</a>
                </div>
            </div>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="#team" class="w3-bar-item w3-button">Team</a>
            <a href="#work" class="w3-bar-item w3-button">Work</a>
            <a href="#pricing" class="w3-bar-item w3-button">Price</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact</a>
            <a href="#" class="w3-bar-item w3-button">Search</a>
        </div>
    </div>

    <!-- Image Header -->
    <div class="w3-display-container w3-animate-opacity">
        <img src="/w3images/sailboat.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
        <div class="w3-container w3-display-bottomleft w3-margin-bottom">
            <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">LEARN W3.CSS</button>
        </div>
    </div>

    <!-- Modal -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-top">
            <header class="w3-container w3-teal w3-display-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
                <h4>Oh snap! We just showed you a modal..</h4>
                <h5>Because we can <i class="fa fa-smile-o"></i></h5>
            </header>
            <div class="w3-container">
                <p>Cool huh? Ok, enough teasing around..</p>
                <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
            </div>
            <footer class="w3-container w3-teal">
                <p>Modal footer</p>
            </footer>
        </div>
    </div>

    <!-- Team Container -->
    <div class="w3-container w3-padding-64 w3-center" id="equipo">
        <h2>Nuestros colaboradores</h2>
        <p>Conozca a nuestro equipo</p>

        <div class="w3-row"><br>

            <div class="w3-quarter">
                <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Juan Pablo </h3><h2>Roa</h2>
                <p>Gestor de proyectos</p>
            </div>

            <div class="w3-quarter">
                <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Diego</h3><h2>Restrepo</h2>
                <p>Administrador de imagen</p>
            </div>

            <div class="w3-quarter">
                <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
                <h3>Daniel</h3><h2>Tunarroza</h2>
                <p>Diseñador web</p>
            </div>

        </div>
    </div>

    <!-- Work Row -->
    <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

        <div class="w3-quarter">
            <h2>Our Work</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="/w3images/snow.jpg" alt="Snow" style="width:100%">
                <div class="w3-container">
                    <h3>Customer 1</h3>
                    <h4>Trade</h4>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
                <div class="w3-container">
                    <h3>Customer 2</h3>
                    <h4>Trade</h4>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                </div>
            </div>
        </div>

        <div class="w3-quarter">
            <div class="w3-card w3-white">
                <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
                <div class="w3-container">
                    <h3>Customer 3</h3>
                    <h4>Trade</h4>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                    <p>Blablabla</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Container -->
    <div class="w3-container" style="position:relative">
        <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal" style="position:absolute;top:-28px;right:24px">+</a>
    </div>

    <!-- Projects row -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="/w3images/woods.jpg" alt="Nature" style="width:100%">
                <div class="w3-container">
                    <h3><b>TITLE HEADING</b></h3>
                    <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
                </div>

                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-tag">0</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
                <img src="/w3images/bridge.jpg" alt="Norway" style="width:100%">
                <div class="w3-container">
                    <h3><b>BLOG ENTRY</b></h3>
                    <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
                </div>

                <div class="w3-container">
                    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                        </div>
                        <div class="w3-col m4 w3-hide-small">
                            <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge">2</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->
        </div>

        <!-- Introduction menu -->
        <div class="w3-col l4">
            <!-- About Card -->
            <div class="w3-card w3-margin w3-margin-top">
                <img src="/w3images/avatar_g.jpg" style="width:100%">
                <div class="w3-container w3-white">
                    <h4><b>My Name</b></h4>
                    <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
                </div>
            </div>
            <hr>

            <!-- Posts -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Popular Posts</h4>
                </div>
                <ul class="w3-ul w3-hoverable w3-white">
                    <li class="w3-padding-16">
                        <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Lorem</span><br>
                        <span>Sed mattis nunc</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Ipsum</span><br>
                        <span>Praes tinci sed</span>
                    </li>
                    <li class="w3-padding-16">
                        <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Dorum</span><br>
                        <span>Ultricies congue</span>
                    </li>
                    <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                        <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">Mingsum</span><br>
                        <span>Lorem ipsum dipsum</span>
                    </li>
                </ul>
            </div>
            <hr>

            <!-- Labels / tags -->
            <div class="w3-card w3-margin">
                <div class="w3-container w3-padding">
                    <h4>Tags</h4>
                </div>
                <div class="w3-container w3-white">
                    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                    </p>
                </div>
            </div>

            <!-- END Introduction Menu -->
        </div>

        <!-- END GRID -->
    </div>

    <!-- Contact Container -->
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
        <div class="w3-row">
            <div class="w3-col m5">
                <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
                <h3>Address</h3>
                <p>Swing by for a cup of coffee, or whatever.</p>
                <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Chicago, US</p>
                <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;+00 1515151515</p>
                <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;test@test.com</p>
            </div>
            <div class="w3-col m7">
                <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                    <div class="w3-section">
                        <label>Name</label>
                        <input class="w3-input" type="text" name="Name" required="">
                    </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input" type="text" name="Email" required="">
                    </div>
                    <div class="w3-section">
                        <label>Message</label>
                        <input class="w3-input" type="text" name="Message" required="">
                    </div>
                    <input class="w3-check" type="checkbox" checked="" name="Like">
                    <label>I Like it!</label>
                    <button type="submit" class="w3-button w3-right w3-theme">Send</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
        <h4>Follow Us</h4>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
        <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
        <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

        <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
            <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
            <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
                    <i class="fa fa-chevron-circle-up"></i></span></a>
        </div>
    </footer>

    <script>
        // Script for side navigation
        function w3_open() {
            var x = document.getElementById("mySidebar");
            x.style.width = "300px";
            x.style.paddingTop = "10%";
            x.style.display = "block";
        }

        // Close side navigation
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

        // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>


</body>

</html>