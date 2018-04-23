<?php include 'config.php'; ?>
<!doctype html>
<html lang="en">

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PRNFC46');</script>
<!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <title>NovoStack-Recruitee/ Business Development Manager</title>
    <link rel="shortcut icon" href="img/logo/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site Description Here">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i%7CMaterial+Icons" rel="stylesheet">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRNFC46"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

        <a id="start"></a>
        <div class="nav-container ">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3 col-sm-2">
                            <a href="index.html">
                                <img class="logo logo-dark" alt="logo" src="img/logo.png" />
                                <img class="logo logo-light" alt="logo" src="img/logolight.png" />
                            </a>
                        </div>
                        <div class="col-xs-9 col-sm-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs"><i class="icon icon--sm stack-interface stack-menu">
                            </i></a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->
            <nav id="menu1" class="bar bar--sm bar-1 hidden-xs ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 col-sm-4 hidden-xs">
                            <div class="bar__module">
                                <a href="index.html">
                                    <img class="logo logo-dark" alt="logo" src="img/logo.png" />
                                    <img class="logo logo-light" alt="logo" src="img/logolight.png" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-md-11 col-sm-8 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                    <li class="dropdown">
                                        <a href="index.html"><span class="dropdown__trigger">Home</span></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="work.html"><span class="dropdown__trigger">Work</span></a>

                                        <!--end dropdown container-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="ourservices.html"><span class="dropdown__trigger">Services</span></a>

                                        <!--end dropdown container-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="aboutcompany.html"><span class="dropdown__trigger">About Us</span></a>

                                        <!--end dropdown container-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="careers.html"><span class="dropdown__trigger">Careers</span></a>

                                        <!--end dropdown container-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="contactus.html"><span class="dropdown__trigger">Contact Us</span></a>

                                        <!--end dropdown container-->
                                    </li>
                                </ul>
                            </div>
                            <!--end module-->

                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
            <!--end bar-->
        </div>
        <div class="main-container">
            <section class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-8">
                            <h1>Business Development Manager</h1>
                            <p class="lead">
                                Join one of India's fastest growing tech companies, grow your skillset and become a member of our evergrowing global family.
                            </p>
                        </div>

                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>

            <section class="bottom-30">
                <div class="container">
                    <div class="row border_bottom">
                       <ul class="topLinks">
                            <div class="col-md-6 col-sm-12">
                                <li>
                                    <?php $sql = "SELECT * from bdm";
$query = $conn->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>

                <!--  <p class="font-color"> <?php  echo ($result->Job_Description); ?> </p></h3>
 -->
                    
                                    <div class="col-md-4 col-sm-3">
                                        <p>Job Type :</p>
                                    </div>
                                  <!-- <?php }}   ?> -->
                                  <div class="col-md-8 col-sm-9">
                                        <p><strong> <?php  echo ($result->Job_Type); ?> </strong></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li>
                                    <div class="col-md-4 col-sm-3">
                                        <p>Experience level :</p>
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <p><strong> 3-4 Years</strong></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li>
                                    <div class="col-md-4 col-sm-3">
                                        <p>Role :</p>
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <p><strong> Programming & Design</strong></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </div>

                           <div class="col-md-6 col-sm-12">
                                <li>
                                    <div class="col-md-4 col-sm-3">
                                        <p>Functional Area :</p>
                                    </div>
                                    <div class="col-md-8 col-sm-9">
                                        <p><strong> IT Software - Application Programming , Maintenance</strong></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </div>

                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <!-- enf of row -->
                </div>
                <!-- end of container -->
            </section>

            <section>
                <div class="container">
                    <div class="row border_bottom">
                        <h3 class="top-30-color">Keyskills :</h3>
                        <div class="positions_open">
                            <span>PHP</span>
                            <span>JavaScript</span>
                            <span>jQuery</span>
                        </div>
                    </div>
                    <!-- end of row -->

                    <div class="row border_bottom">
                     <?php $sql = "SELECT * from bdm";
$query = $conn->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
                     <div class="row border_bottom">
                 <h3 class="top-30-color padd_top_30" >Job Description : <br> <br> <p class="font-color"> <?php  echo ($result->Job_Description); ?> </p></h3>

<!-- <?php }}   ?>
 -->                        <ol>
                            <li class="lead">Good experience on Ionic and AngularJS.</li>
                            <li class="lead">Solid understanding of the DOM and Javascript quirks.</li>
                            <li class="lead">Experience in dealing with Server Side using techniques such as RESTFul/Soap - web services.</li>
                            <li class="lead">Understanding of asynchronous client/using JSON/XML</li>
                        </ol>
                    </div>
                    <!-- end of row -->
                    
                     <div class="row ">
                    <?php $sql = "SELECT * from bdm";
$query = $conn->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
     <h3 class="top-30-color padd_top_30">Requirements  : </h3><br> 
        <l class="lead"> <?php  echo ($result->Requirements); ?> </l>


<!-- <?php }}   ?> -->

                    
                       
                    </div>
                    <!-- end of row -->

                    <div class="row">
                        <a href="form.html" class="block">apply for this job</a>
                    </div>
                </div>
            </section>

            <footer class="footer-3 text-center-xs space--xs ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img alt="Image" class="logo" src="img/logo.png" />
                            <ul class="list-inline list--hover">
                                <li>
                                    <a href="contactus.html">
                                        <span class="type--fine-print">support@NovoStack.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <ul class="social-list list-inline list--hover">

                                <li>
                                    <a href="https://twitter.com/novo_stack">
                                        <i class="socicon socicon-twitter icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/NovoStack/">
                                        <i class="socicon socicon-facebook icon icon--xs"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="type--fine-print">
                                Supercharge your web workflow
                            </p>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            <span class="type--fine-print">&copy;
                                    <span class="update-year"></span> NovoStack</span>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>
</body>

</html>
