<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Durian Nontaburi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="img/logo.png">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="scss/style.scss">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
    
</head>

    
    
    
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0 ff-eng"><img class="img-fluid rounded-3" src="img/logo.png" alt="..." width="64" height="64"/>&nbsp;Durian</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index2.php" class="nav-item nav-link active ff-thai"><font size=4>หน้าหลัก</font></a>
                        <a href="about2.php" class="nav-item nav-link ff-thai"><font size=4>เกี่ยวกับเรา</font></a>
                        <a href="menu2.php" class="nav-item nav-link ff-thai"><font size=4>สินค้า</font></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle ff-thai" data-bs-toggle="dropdown "><font size=4>อื่น ๆ</font></a>
                            <div class="dropdown-menu m-0">
                                <a href="reservation2.php" class="dropdown-item ff-thai"><font size=4><center><center>การจอง</center></center></font></a>
                                <a href="team2.php" class="dropdown-item ff-thai"><font size=4><center><center>เจ้าของสวน</center></center></font></a>
                            </div>
                        </div>
                        <a href="contact2.php" class="nav-item nav-link ff-thai"><font size=4>ติดต่อ</font></a>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle ff-thai" data-bs-toggle="dropdown ">
                               
                                <body>
        <font size=4 ><?php echo $_SESSION['firstname']; ?></font>
    <!-- MDB -->
                                </body>
                               
                                </a>
                            <div class="dropdown-menu m-0">
                                <a href="index.html" class="dropdown-item ff-thai"><font size=4><center>ออกระบบ</center></font></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <center><h3 class="display-6 text-warning animated slideInLeft ff-thai">ยินดีต้อนรับสู่สวนทุเรียน<br>สวนอภิรัญญาสวนทุเรียนเมืองนนท์</h3>
                                <br></center>

                            
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/pngtree.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->

        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/durian-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/durian-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="img/durian-5.jpg" style="height:400px;width:300px">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/durian-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-thai text-start text-primary fw-normal">เกี่ยวกับเรา</h5>
                        <h1 class="mb-4 ff-thai">ยินดีต้อนรับ&nbsp;<img class="img-fluid rounded-3" src="img/logo.png" alt="..." width="64" height="64"/>&nbsp;สวนอภิรัญญาสวนทุเรียนเมืองนนท์</h1>
                        <p class="mb-4 ff-thai">ที่อยู่  : 74/23 หมู่3 ตำบลบางรักน้อย อำเภอเมือง นนทบุรี 11000</p>
                        <p class="mb-4 ff-thai">เวลาทำการ  : วันพุธ	7:00 – 20:00 <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันพฤหัสบดี	7:00 – 20:00 <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันศุกร์	7:00 – 20:00 <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันเสาร์	7:00 – 20:00 <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันอาทิตย์	7:00 – 20:00 <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันจันทร์	7:00 – 20:00 <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันอังคาร	7:00 – 20:00 </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0 ff-eng" data-toggle="counter-up">11</h1>
                                    <div class="ps-4">
                                        <p class="mb-0 ff-eng">Years of</p>
                                        <h6 class="text-uppercase mb-0 ff-eng">Experience</h6>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-eng text-center text-primary fw-normal">Durian</h5>
                    <h1 class="mb-5 ff-thai">สินค้ายอดนิยม</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <img class="img-fluid rounded-3" src="img/logo.png" alt="..." width="64" height="64"/>
                                <div class="ps-3">
                                    <small class="text-body ff-eng">Durian</small>
                                    <h6 class="mt-n1 mb-0 ff-thai">ทุเรียน</h6>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/p1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="ff-thai">พันธุ์กบแม่เฒ่า</span>
                                                <span class="text-primary ff-eng">300
                                                <span class="ff-thai">บาท</span></span>
                                            </h5>
                                            <small class="ff-thai">พันธุ์พื้นเมืองตระกูลกบ (พันธุ์กลาง)</small>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/p2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="ff-thai">พันธุ์กบสุวรรณ</span>
                                                <span class="text-primary ff-eng">300
                                                <span class="ff-thai">บาท</span></span>
                                            </h5>
                                            <small class="ff-thai">พันธุ์พื้นเมือง(พันธุ์เบา)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/p3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="ff-thai">พันธุ์ก้านยาวบุญยัง</span>
                                                <span class="text-primary ff-thai ff-eng">300
                                                <span class="ff-thai">บาท</span></span>
                                            </h5>
                                            <small class="ff-thai">พันธุ์พื้นเมือง(พันธุ์เบา)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/p4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="ff-thai">พันธุ์ชะนี</span>
                                                <span class="text-primary ff-thai ff-eng">200 <span class="ff-thai">บาท</span></span>
                                            </h5>
                                            <small class="ff-thai">พันธุ์พื้นเมือง ตระกูลลวง</small>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/p5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span ff-thai ff-eng>พันธุ์กบทองคำ</span>
                                                <span class="text-primary ff-thai ff-eng">300 <span class="ff-thai">บาท</span></span>
                                            
                                            </h5>
                                            <small class="ff-thai">พันธุ์พื้นเมืองตระกูลกบ (พันธุ์กลาง)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/p6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="ff-thai">พันธุ์กบชายน้ำ</span>
                                                <span class="text-primary ff-thai ff-eng">300 <span class="ff-thai">บาท</span></span>
                                            </h5>
                                            <small class="ff-thai">พันธุ์พื้นเมือง(พันธุ์เบา)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/p7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="ff-thai">พันธุ์ก้านยาว</span>
                                                <span class="text-primary ff-thai ff-eng">200 <span class="ff-thai">บาท</span></span>
                                            </h5>
                                            <small class="ff-thai">พันธุ์เศรษฐกิจ และเป็นพันธุ์หนัก</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/p8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="ff-thai">พันธุ์หมอนทอง</span>
                                                <span class="text-primary ff-thai ff-eng">800 <span class="ff-thai">บาท</span></span>
                                            </h5>
                                            <small class="ff-thai">พันธุ์พื้นเมือง ตระกูลกำปั่น </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                                     
                                
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/efN4VO6ShsM" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-thai text-start text-primary fw-normal ff-thai">จองสินค้า</h5>
                        <h1 class="text-white mb-4 ff-thai ff-thai">โปรดกรอกข้อมูลด้านล่าง</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name" class="ff-thai" required oninvalid="this.setCustomValidity('โปรดกรอกชื่อ')" oninput="this.setCustomValidity('')">ชื่อ-นามสกุล</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email ff-thai" class="ff-thai">อีเมล</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime ff-thai" class="ff-thai">วันที่ & เวลา</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Tel">
                                        <label for="select1 ff-thai" class="ff-thai">เบอร์โทรศัพท์</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message ff-thai" class="ff-thai">กรอกรายละเอียดสินค้า</label>
                                    </div>
                                </div>
                                <div class="col-12">

                                    
       <button type="button" class="btn btn-primary w-100 py-3 ff-thai" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ตกลง
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">แจ้งเตือน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        โปรดล็อคอิน
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>                             
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-3 pb-3">
            <div class="container">
                
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title ff-thai text-center text-primary fw-normal">เจ้าของสวน</h4>
                    
                </div>
                <br>
                <div class="row g-3"> <center>        
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/1.png" alt="">
                            </div>
                            <h5 class="mb-0 ff-thai" >เบญจมาศ แตงไทย</h5>
                            <small class="ff-thai ff-thai">เจ้าของสวนอภิรัญญาสวนทุเรียนเมืองนนท์</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://web.facebook.com/ApiranyaTreeShop/photos/?ref=page_internal">
                                    <i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
               </center>
                    </div>
                
            </div>
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

   



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>