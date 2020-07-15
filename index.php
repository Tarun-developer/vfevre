<?php
include 'readgoogle.php';
if (isset($_POST['icode'])) {
    $data = readsheetFile();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>ProdoVerify</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

        <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

        <!-- Theme Style -->
        <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
        <link rel="stylesheet" type="text/css" href="stylesheets/shortcodes.css">


        <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

        <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
        <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
        <link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed" sizes="57x57">
        <link href="icon/favicon.png" rel="shortcut icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <style type="text/css">
            #details{
                color: #E51837;
            }
            /* The alert message box */
            .alert-red {
                padding: 20px;
                background-color: #f44336; /* Red */
                color: white;
                margin-bottom: 15px;
            }

            .alert-green {
                padding: 20px;
                background-color: #008000; /* Red */
                color: white;
                margin-bottom: 15px;
            }

            /* The close button */
            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }

            /* When moving the mouse over the close button */
            .closebtn:hover {
                color: black;
            }
            ul.link-left li {
                display: inline-block;
            }
            ul.link-left li:not(.first){
                margin-left: 5%;
                margin-right: 0;
            }
            ul.link-left{
                width: 44%;
                text-align: center;
            }
        </style>
    </head>
    <body class="animated fadeIn">
        <nav class="navbar navbar-default navbar-fixed-top" style="padding-bottom: 5px; background:white;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"  href="/"> <img src="images/logo.png" alt="Prodotype Educational Initiatives"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.prodotype.in" >Home</a></li>
                        <li><a href="https://www.prodotype.in/about" >About</a></li>
                        <li><a href="https://www.prodotype.in/contact" >Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <!-- Alert Box 
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              This is an alert box.
            </div>-->
        <section id="head">
            <center> <img src="http://prodotype.in/email%20footer.png" /></center>
        </section>

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="well" style="padding:30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background: white">
                            <div class="row">

                                <div class="col-md-12 col-sm-12" style="text-align: center">
                                    <h3 style="text-align: center;margin-top: 100px;">GLOBAL CREDENTIAL VERIFICATION</h3>
                                    <p style="text-align: center;">
                                        Welcome to the Prodotype Global Credential Verification site. 
                                        This fraud prevention system can be used to verify Prodotype 
                                        credentials held by participants world-wide. 
                                        The Credential Identification Code can be found on all certificates issued by Prodotype.
                                    </p>

                                </div>
                            </div>
                            <form id="idForm" class="form-inline" action="#" style="text-align: center" method="POST">
                                <center>
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label for="icode">Credential Identification Code:</label>
                                        <input type="text" class="form-control" id="icode" placeholder="Enter Verification code" name="icode" >
                                    </div>
                                    <!-- <div class="g-recaptcha" data-sitekey="6LeEtD4UAAAAAHo9dBSFlm071022uBK7H1JHgfby" required="required"></div> -->
                                </center><br>



                                &nbsp;&nbsp;<button type="Submit" class="btn btn-danger" name="Submit" style="padding: 7px 50px;">Submit</button>
                            </form>
                            <div align="left" style="justify-content: space-between;">  <br>               
                                <?php
                                if (isset($red_message)) {
                                    echo "  <div class='alert-red'>
                                        <center>$red_message</center>
                                    </div>";
                                }

                                if (isset($green_message)) {
                                    echo "  <div class='alert-green'>
                                        <center>$green_message</center>
                                    </div>";
                                }
                                echo("<center>");
                                if (isset($_POST['Submit']) && isset($data)) {

                                    //echo"<br> <span id='details'>Certificate Code: </span>".$row[1];
                                    echo"<br> <span id='details'><b>Name:</b> </span>" . $data[3];
                                    //echo"<br> <span id='details'>Email: </span>".$row[3];
                                    //echo"<br> <span id='details'>DOB: </span>".$row[4];
                                    //echo"<br> <span id='details'>Year: </span>".$row[5];
                                    echo"<br> <span id='details'><b>Degree:</b> </span>" . $data[7].'  '.$data[8];
//                                    echo"<br> <span id='details'><b>Branch of Engineering:</b> </span>" . $data[8];
                                    echo"<br> <span id='details'><b>Institution:</b> </span>" . $data[11];
                                    //echo"<br> <span id='details'>Mobile Number: </span>".$row[8];
                                    //echo"<br> <span id='details'>Residential Address: </span>".$row[9];
                                    //echo"<br> <span id='details'>Verification Status: </span> <strong>".$row[0]."</strong>";
                                } else {
                                    echo"<br> <span id='no_result'><b>No Result found</b></span>";
                                }
                                echo("</center>");
                                ?>

                            </div>
                            <div class="row" id="data"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">  
            <div class="footer-widgets">   
                <div class="container">

                    <div class="widget widget-text">
                        <center><a href="https://www.prodotype.in"> <img src="http://edu.prodotype.in/images/blog/Footer-01.jpg" alt="image" style="height: 25%;width: 25%;"></a></center>

                    </div><!-- /.widget -->


                    <div class="widget widget_tweets clearfix" style="width:100%;">
                        <center><h5 style="color: white;">User Links
                                <hr style="border-color: grey;width: 5%;"  />


                            </h5></center>
                        <ul class="link-left" style="position:relative;left: 28%;">
                            <li class="first">
                                <a href="https://www.prodotype.in">Prodotype</a>
                            </li>

                            <li>
                                <a href="about">About Us</a>
                            </li>

                            <li>
                                <a href="http://blog.prodotype.in">Blog</a>
                            </li>

                            <li>
                                <a href="workshops">Workshops</a>
                            </li>

                            <li>
                                <a href="courses">Course</a>
                            </li>

                            <li>
                                <a href="https://prodotype.in/contact">Contact</a>
                            </li>
                        </ul>

                    </div><!-- /.widget-recent-tweets -->

                </div><!-- /.container -->
            </div><!-- /.footer-widgets -->
        </footer>

        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

        <!-- Bottom -->
        <div class="bottom">
            <div class="container">
                <ul class="flat-socials-v1">
                    <li class="facebook">
                        <a href="http://www.facebook.com/prod0typ3" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter">
                        <a href="http://www.twitter.com/prod0typ3" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="vimeo">
                        <a href="https://www.youtube.com/channel/UCqkuCePcAGg5wzWBGs8dZYA?sub_confirmation=1" target="_blank"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li class="vimeo">
                        <a href="http://www.instagram.com/prod0typ3" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="rss">
                        <a href="http://www.pinterest.com/prod0typ3" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </li>
                    <li class="rss">
                        <a href="http://linkedin.com/company/prod0typ3" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>    
                <div class="row">
                    <div class="container-bottom">
                        <div class="copyright"> 
                            <p>Copyright © 2018. <span><!--<a href="#">-->Prodotype<!--</a>--></span>. All Rights Reserved.</p>
                        </div>
                    </div><!-- /.container-bottom -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>





        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
            window.sr = ScrollReveal();
            sr.reveal('.navbar', {
                duration: 1000,
                origin: 'bottom'
            });
        </script>
    </body>
</html>

<?php

function readsheetFile() {

    if (isset($_POST['Submit'])) {
        $id = $_POST['icode'];
//    $captcha = $_POST['g-recaptcha-response'];
//    $certificate_id = rtrim($id, '#');
        $certificate_id = trim($_POST['icode']);

        // Get the API client and construct the service object.
        $client = getClient();
        $service = new Google_Service_Sheets($client);

        $spreadsheetId = '1rYVwZfwtjiaOIqdlb93pDdfmqKildYwYuA7fh8rwJKY';
        $range = 'A1:L';
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        $valueInputOption = "RAW";
        $values = $response->getValues();
        if (count($values) == 0) {
            return false;
        } else {
            foreach ($values as $row) {
//            print_r($row[2]);
                if ($row[2] == $certificate_id) {
                    return $row;
                }
//                $rowCount++;
            }
        }
    }
}
?>