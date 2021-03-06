<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://js.arcgis.com/4.8/esri/css/main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Welcome</title>
</head>
<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var(
        $_POST['name'],
        FILTER_VALIDATE_EMAIL
    )) {

        // submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "jorgevandereyken@gmail.com";
        $body = "";

        $body .= "From: " . $userName . "\r\n";
        $body .= "Email: " . $userEmail . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        // mail($to,$messageSubject,$body);

        $message_sent = true;
    } else {
        $invalid_class_name = "form-invalid";
    }
}
?>

<body class="Contact">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://js.arcgis.com/4.8/"></script>

    <header>




        <div class="container1">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Welcome
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Restaurant.html">Restaurant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pictures1.html">Pictures</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact.php">Contact</a>
                        </li>

                    </ul>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit"></button>
                    </form>
                </div>
            </nav>
        </div>
        </nav>



        <header>

            <div class="jumbotron">
                <h1 class="display-3 ">Contact</h1>
                <hr class="my-4 ">
                <p>For questions? For answers!</p>
                <?php
                if ($message_sent) :
                ?>
                    <h3>Thanks, we will be in touch!</h3>

                <?php
                else :

                ?>

                    <div class="container1">
                        <form action="Contact.php" method="POST">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="well well-sm">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type ="text" class="form-control" <?= $invalid_class_name ?? "" ?> id="name" name="name" placeholder="Enter name" required="required" />
                                                    </div>



                                                    <div class="form-group">

                                                        <label for="email">
                                                            Email Address</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                            </span>
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">a
                                                        <label for="subject">
                                                            Subject</label>
                                                        <select id="subject" name="subject" class="form-control" required="required">
                                                            <option value="na" selected="">Choose One:</option>
                                                            <option value="service">Reservations</option>
                                                            <option value="suggestions">Suggestions</option>
                                                            <option value="product">Questions and complaints</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">
                                                            Message</label>
                                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <form>
                                                        <i class="fas fa-align-left"><button type="submit">
                                                                <p>SEND</p>
                                                            </button></i>
                                                    </form>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endif;
                        ?>
                        
                        <div class="col-md-4">
                        <form>
                                <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                                <address>
                                    <strong>El Jorge</strong><br>
                                    Grote Markt 2<br>
                                    3500 Hasselt<br>
                                    <abbr title="Phone">
                                        P:</abbr>
                                    011/22.23.32
                                </address>
                                <address>
                                    <strong>Mail us</strong><br>
                                    <a href="mailto:#">info@ElJorge.be</a>
                                </address>
                            </form>
                        </div>
                    </div>
            </div>


            </div>

            </div>
        </header>
    </header>
    <section>

    </section>
    <footer>

        <div class="footer-dark">


            <div class="row">
                <div class="col-md-3 item">
                    <h3>Our restaurant</h3>
                    <ul>
                        <li><a href="Welcome.html">Welcome</a></li>
                        <li><a href="Menu.html">Menu</a></li>
                        <li><a href="Restaurant.html">Restaurant</a></li>
                        <li><a href="Pictures1.html">Pictures</a></li>
                        <li><a href="Contact.html">Contact</a></li>

                    </ul>
                </div>

                <div class="col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-3 item text">
                    <h3>Restaurant El Jorge</h3>
                    <p>We strive for customer-friendly service and top quality! We are certainly open to suggestions and comments. For all questions, comments and complaints, go to our <a href="Contact.html">Contact</a> page and we will be happy to help!</p>
                </div>
                <div class="col item social"><a href="#"><i class="fa fa-facebook"></i>El Jorge</a>

                </div>

    </footer>





</body>

</html>