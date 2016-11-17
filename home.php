
<!DOCTYPE html>
<html lang="en">
<!-- tes percobaan -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Perikanan Tangkap</title>

    <!-- favicon (gambar ikan)--> 
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.edit.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">

     <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php
include "data.php";
//memasukkan data.php. didalmanya banyak f
include 'news.php';
if (isset($_GET['vol'])) {
    switch ($_GET['vol']) {
        case '1':
            $kode='PPN Prigi Trenggalek';
            break;

        case '2':
            $kode='PPN Brondong Lamongan';
            break;

        case '3':
            $kode='PPN Karangsong Indramayu';
            break;

        case '4':
            $kode='PPS Cilacap';
            break;  

        case '5':
            $kode='PPN Pelabuhanratu Sukabumi';
            break;

        case '6':
            $kode='PPP Sadeng Gunung Kidul';
            break;

        case '7':
            $kode='PPN Pekalongan';
            break;

        default:
            $kode='Total';
            break;
    }
}
?>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Sistem Informasi Perikanan Tangkap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#page-top" >Berita</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Galeri</a>
                    </li>
                    <li class="dropdown page-scroll">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li class="page-scroll"><a href="#about">Perikanan Tangkap</a></li>
                        <li class="page-scroll"><a href="#pelabuhan">Pelabuhan</a></li>
                      </ul>
                    </li>
                    <li class="dropdown page-scroll">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Grafik <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li class="page-scroll"><a href="#grafik">Vol Tangkap</a></li>
                        <li class="page-scroll"><a href="#vol-jual">Vol Jual</a></li>
                        <li class="page-scroll"><a href="#harga">Harga Jual</a></li>
                      </ul>
                    </li>
                    <li><a href="login.php" target="_blank"><i class="fa fa-user"></i> Login</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
         <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
		  
          <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img class="first-slide" src="img/slide1.jpg" alt="First slide">
                  <div class="container">
                    <div class="carousel-caption">               
                      <img class="img-responsive" src="img/fish-logo.png" alt=""> 
                      <h1>Sistem Informasi Perikanan Tangkap</h1>
                    </div>
                  </div>
                </div> <!-- item -->

                <div class="item">
                  <img class="second-slide" src="img/news/1.jpg" alt="Second slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Basmi Pencurian Ikan, Kini RI Jadi Eksportir Terbesar ke Jepang</h1>
                      <p>Keinginan pemerintah melalui Kementerian Kelautan dan Perikanan (KKP) untuk membasmi pencurian ikan membuahkan hasil.</p>
                      <p><a href="#news1" class="btn btn-lg btn-primary portfolio-link" data-toggle="modal">Learn more</a></p>
                    </div>
                  </div>
                </div> <!-- item -->

                <div class="item">
                  <img class="third-slide" src="img/news/2.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Sejuta Nelayan Bakal Diasuransikan</h1>
                      <p>Kementerian Kelautan dan Perikanan (KKP) terus memberikan dukungan bagi tumbuh kembangnya sektor kelautan dan perikanan. Untuk itu, pihaknya menggagas program asuransi satu juta nelayan pada tahun depan.</p>
                      <p><a href="#news2" class="btn btn-lg btn-primary portfolio-link" data-toggle="modal">Learn more</a></p>
                    </div>
                  </div>
                </div> <!-- item -->

                <div class="item">
                  <img class="fourth-slide" src="img/news/3.jpg" alt="Fourth slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1>Pemerintah Siap Bangun 58 Unit <em>Cold Storage</em></h1>
                      <p>Kementerian Kelautan dan Perikanan (KKP) siap merogoh dana sebesar Rp 220 miliar untuk membangun 58 unit rantai pendingin makanan (cold storage) di 22 provinsi sepanjang tahun ini.</p>
                      <p><a href="#news3" class="btn btn-lg btn-primary portfolio-link" data-toggle="modal">Learn more</a></p>
                    </div>
                  </div>
                </div> <!-- item -->

          </div> <!-- carousel inner -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div><!-- /.carousel -->

	
    </header>

   
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Galeri</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a  tabindex="0" class="portfolio-link" role="button" data-toggle="popover" title="PPN Prigi Trenggalek" data-placement="top" data-content="Keberangkatan Kapal untuk aktivitas Operasi Penangkapan Ikan" data-trigger="focus" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/1.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a  tabindex="0" class="portfolio-link" role="button" data-toggle="popover" title="PPN Brondong Lamongan" data-placement="top" data-content="Pengangkutan Perbekalan es ke Kapal" data-trigger="focus" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/2.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a  tabindex="0" class="portfolio-link" role="button" data-toggle="popover" title="PPS Cilacap" data-placement="top" data-content="Material perbekalan berlayar" data-trigger="focus" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/3.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                   <a  tabindex="0" class="portfolio-link" role="button" data-toggle="popover" title="PPN Pekalongan" data-placement="bottom" data-content="Proses bongkar muat ikan dari atas kapal menuju ke TPI" data-trigger="focus" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/4.jpg" class="img-responsive" alt="" width="900" height="650">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a  tabindex="0" class="portfolio-link" role="button" data-toggle="popover" title="PPP Sadeng Gunungkidul" data-placement="bottom" data-content="Proses bongkar muat ikan dari atas kapal menuju ke TPI" data-trigger="focus" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/5.jpg" class="img-responsive" alt=""  width="900" height="650">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a  tabindex="0" class="portfolio-link" role="button" data-toggle="popover" title="PPN Pekalongan" data-placement="bottom" data-content="Proses Pelelangan Ikan" data-trigger="focus" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/6.jpg" class="img-responsive" alt=""  width="900" height="650">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About sistem perikanan tangkap Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang<br>
                    Sistem Perikanan Tangkap Indonesia</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="img/rangkaian.png" class="img-responsive" alt="">
                    <p><em>Rangkaian Proses dalam Rantai Pasok Ikan Tangkap</em></p>
                    <br>
                    <p>Sistem usaha perikanan tangkap terdiri dari rangkaian proses mulai dari pra produksi hingga distribusi. Ilustrasi di atas adalah gambaran umum rangkaian proses yang dilakukan di daerah pelabuhan perikanan di Pulau Jawa.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p><a href="#tentangSIP" class="btn btn-lg btn-info portfolio-link" data-toggle="modal">Learn more</a></p>
                </div>
            </div>
        </div>
    </section> <!--perikanan tangkap -->

    <!--about pelabuhan -->
    <section class="success" id="pelabuhan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Karakteristik Pelabuhan</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-anchor fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">PPN</div>
                                    <p>Prigi Trenggalek</p>
                                </div>
                            </div>
                        </div>
                        <a href="#trenggalek"  data-toggle="modal">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-globe fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">PPN</div>
                                    <p>Brondong Lamongan</p>
                                </div>
                            </div>
                        </div>
                        <a href="#lamongan" data-toggle="modal">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">PPS</div>
                                    <p>Cilacap</p>
                                </div>
                            </div>
                        </div>
                        <a href="#cilacap" data-toggle="modal">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-anchor fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">PPN</div>
                                    <p>Ratu Sukabumi</p>
                                </div>
                            </div>
                        </div>
                        <a href="#sukabumi"  data-toggle="modal">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-globe fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">PPP</div>
                                    <p>Sadeng</p>
                                </div>
                            </div>
                        </div>
                        <a href="#sadeng" data-toggle="modal">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">PPN</div>
                                    <p>Pekalongan</p>
                                </div>
                            </div>
                        </div>
                        <a href="#pekalongan" data-toggle="modal">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- grafik vol tangkap -->
    <section id="grafik">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Volume Ikan Tangkap</h2>
                    <h3>(<?php echo $kode; ?>)</h3>
                    <div class="btn-group">
                        <button type="button" href="#" class="btn btn-lg btn-outline dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-angle-down"></i> Action
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="home.php?vol=total&harga=total#grafik">Total</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="home.php?vol=1#grafik">PPN Prigi Trenggalek</a>
                            </li>
                            <li><a href="home.php?vol=2#grafik">PPN Brondong Lamongan</a>
                            </li> 
                            <li><a href="home.php?vol=3#grafik">PPN Karangsong Indramayu</a>
                            </li>
                            <li><a href="home.php?vol=4#grafik">PPS Cilacap</a>
                            </li>
                            <li><a href="home.php?vol=5#grafik">PPN Pelabuhanratu Sukabumi</a>
                            </li>
                            <li><a href="home.php?vol=6#grafik">PPP Sadeng Gunung Kidul</a>
                            </li>
                            <li><a href="home.php?vol=7#grafik">PPN Pekalongan</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="grafik-vol"></div>
                </div>         
            </div>
        </div>
    </section> <!-- end grafik vol tangkap -->

    <!--grafik vol jual -->
    <section id="vol-jual">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Volume Penjualan Ikan</h2>
                    <h3>(<?php echo $kode; ?>)</h3>
                    <div class="btn-group">
                        <button type="button" href="#" class="btn btn-lg btn-outline dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-angle-down"></i> Action
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="home.php?vol=total#vol-jual">Total</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="home.php?vol=1#vol-jual">PPN Prigi Trenggalek</a>
                            </li>
                            <li><a href="home.php?vol=2#vol-jual">PPN Brondong Lamongan</a>
                            </li> 
                            <li><a href="home.php?vol=3#vol-jual">PPN Karangsong Indramayu</a>
                            </li>
                            <li><a href="home.php?vol=4#vol-jual">PPS Cilacap</a>
                            </li>
                            <li><a href="home.php?vol=5#vol-jual">PPN Pelabuhanratu Sukabumi</a>
                            </li>
                            <li><a href="home.php?vol=6#vol-jual">PPP Sadeng Gunung Kidul</a>
                            </li>
                            <li><a href="home.php?vol=7#vol-jual">PPN Pekalongan</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="grafik-vol-jual"></div>
                </div>         
            </div>
        </div>
    </section>

     <!-- grafik harga Section -->
    <section id="harga">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Harga Ikan Tangkap</h2>
                    <h3>(<?php echo $kode; ?>)</h3>
                    <div class="btn-group">
                        <button type="button" href="#" class="btn btn-lg btn-outline dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-angle-down"></i> Action
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="home.php?vol=total&harga=total#harga">Total</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="home.php?vol=1#harga">PPN Prigi Trenggalek</a>
                            </li>
                            <li><a href="home.php?vol=2#harga">PPN Brondong Lamongan</a>
                            </li> 
                            <li><a href="home.php?vol=3#harga">PPN Karangsong Indramayu</a>
                            </li>
                            <li><a href="home.php?vol=4#harga">PPS Cilacap</a>
                            </li>
                            <li><a href="home.php?vol=5#harga">PPN Pelabuhanratu Sukabumi</a>
                            </li>
                            <li><a href="home.php?vol=6#harga">PPP Sadeng Gunung Kidul</a>
                            </li>
                            <li><a href="home.php?vol=7#harga">PPN Pekalongan</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="grafik-harga"></div>
                </div>                
            </div>
        </div>
    </section><!-- grafik harga -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Disusun Oleh :</h3>
                        <p>Roni Bintoro
                            <br>12/333501/TP/10519</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <!--<h3>Around the Web</h3> -->
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Dosen Pembimbing : </h3>
                        <p> Dr. Ir. Endy Suwondo, DEA.
						<br> Dr. Nafis Khuriyati, STP, M.Agr. </p>
							<!-- <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    -->
					</div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Departemen Teknologi Industri Pertanian, Fakultas Teknologi Pertanian, Universitas Gadjah Mada, Yogyakarta, 2016
						
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <?php include 'gbr_umum.php';
          include 'pelabuhan.php';
    ?>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
    

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script>
        $(function() {            
            Morris.Line({
                <?php if ($_GET['vol']=='total') { ?>
                    element: 'grafik-vol',
                    data: 
                    <?php 
                    echo grafikTotalTgl("tanggal, sum(vr1)");
                    ?>,     
                    xkey: 'tanggal',
                    ykeys: ['sum(vr1)'],
                    xLabels: 'day',
                    labels: ['Volume Tangkap '],
                    postUnits : ' Kg',
                    resize : true,       
                    behaveLikeLine: true
                <?php }?>

                <?php if ($_GET['vol']!='total') { ?>
                    element: 'grafik-vol',
                    data: 
                    <?php 
                    echo grafik("select tanggal, vr1 from rata where idsk = $_GET[vol] order by tanggal desc ");
                    ?>,     
                    xkey: 'tanggal',
                    ykeys: ['vr1'],
                    xLabels: 'day',
                    labels: ['Volume Tangkap '],
                    postUnits : ' Kg',      
                    resize : true,  
                    behaveLikeLine: true
                <?php }?>
            });

            Morris.Line({
                <?php if ($_GET['vol']=='total') { ?>
                    element: 'grafik-vol-jual',
                    data: 
                    <?php 
                    echo grafikTotalTgl("tanggal, sum(vr3)");
                    ?>,     
                    xkey: 'tanggal',
                    ykeys: ['sum(vr3)'],
                    xLabels: 'day',
                    labels: ['Volume Jual '],
                    postUnits : ' Kg',       
                    resize : true, 
                    behaveLikeLine: true
                <?php }?>

                <?php if ($_GET['vol']!='total') { ?>
                    element: 'grafik-vol-jual',
                    data: 
                    <?php 
                    echo grafik("select tanggal, vr3 from rata where idsk = $_GET[vol] order by tanggal desc ");
                    ?>,     
                    xkey: 'tanggal',
                    ykeys: ['vr3'],
                    xLabels: 'day',
                    labels: ['Volume Jual '],
                    postUnits : ' Kg',    
                    resize : true,    
                    behaveLikeLine: true
                <?php }?>
            });
            
            Morris.Line({
                <?php if ($_GET['vol']=='total'){ ?>
                    element: 'grafik-harga',
                    data: 
                    <?php
                    echo grafikTotalTgl("tanggal, avg(hr2)");
                    ?>,     
                    xkey: 'tanggal',
                    ykeys: ['avg(hr2)'],
                    xLabels: 'day',
                    labels: ['Harga Ikan'],
                    preUnits : 'Rp. ',    
                    resize : true,     
                    behaveLikeLine: true
                <?php } ?>

                <?php if ($_GET['vol']!='total'){ ?>
                    element: 'grafik-harga',
                    data: 
                    <?php
                    echo grafik("select tanggal, hr2 from rata where idsk = $_GET[vol] order by tanggal desc ");
                    ?>,     
                    xkey: 'tanggal',
                    ykeys: ['hr2'],
                    xLabels: 'day',
                    labels: ['Harga Ikan'],
                    preUnits : 'Rp. ',     
                    resize : true,    
                    behaveLikeLine: true
                <?php } ?>
            });
        }) 

    </script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

    <!-- tooltip and popover -->
    <script>
        // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()


    </script>

</body>

</html>
