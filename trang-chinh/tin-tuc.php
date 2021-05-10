<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/chi-tiet-sp/products.css">
    <link rel="stylesheet" href="../../css/tin-tuc/tintuc.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="login">


                  <!-- CODE CHECK ĐĂNG NHẬP -->
                  <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                  ?>
                  <a href="../../tai-khoan/dang-nhap.php"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                    <?php }else{ ?>
                  <a href="../../tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
                  <?php } ?>
                </div>



            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="logo">
                <a href="index.php"><img src="https://scontent.fpnh22-2.fna.fbcdn.net/v/t1.6435-9/181150315_102201648705132_5894264111956944146_n.png?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=OtiUo2flbdEAX_dyQES&_nc_ht=scontent.fpnh22-2.fna&oh=db19836dfddbf8cf02e942468bcdd64b&oe=60BD403A" alt="anh"></a>
                </div>
            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <!-- MÃ CODE PHP CHECK SỐ LƯỢNG SẢN PHẨM THÊM VÀO GIỎ HÀNG  -->

                <div class="giohang" style = "position: reletive;">
               
                    <?php
                            $sll = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $item){
                                    extract($item);
                                    $sll+= $sl;
                                }
                            }
                        ?>
                    <span style = "position: absolute;padding:3px 8px;background-color:#fff;border-radius:50px;left:295px;top:25px;" ><?=$sll?></span>
                <ul>
                        <li><i class="fa fa-search" style="font-size:20px;color:rgb(226, 226, 226)"></i></li>
                        <li><p style="color: rgb(212, 212, 212);font-size: 14px;">GIỎ HÀNG</p></li>
                       <a href="danh-sach-gio-hang.php"><li><i class="fa fa-shopping-basket" style="font-size:28px;color:rgb(255, 255, 255)"></i></li></a> 
                    </ul>
                </div>
            </div>
        </div>
    </div>







    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                            <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                            <li><a href="tin-tuc.php">TIN TỨC</a></li>
                            <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4">
                <!-- ---------------------
                --------------------------- -->
                <div class="row">
                    <div class="serch">
                        <input type="text" placeholder="Tìm kiếm...">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>

                <!-- ---------------------
                --------------------------- -->

                <div class="row" style="margin-top: 50px;">
                    <div class="baiviet">
                        <h5>BÀI VIẾT MỚI</h5>
                    </div>
                </div>


                <div class="row">
                    <div class="out">

                        <table>
                            <tr>
                                <td>
                                    <img src="../../css/tin-tuc/img/1.jpg" alt="">
                                </td>
                                <td>
                                    <p>Nike Air Max làm từ tảo biển tuy xấu nhưng vẫn rất bán hết sạch </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../css/tin-tuc/img/2.jpg" alt="">
                                </td>
                                <td>
                                    <p>Ai đăng ký trước mới mua được giày Pegasus Or Bike Console</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../css/tin-tuc/img/3.jpg" alt="">
                                </td>
                                <td>
                                    <p>10 phụ kiện mà tín đồ mê giày nên am hiểu và vận dụng tốt </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../css/tin-tuc/img/5.jpg" alt="">
                                </td>
                                <td>
                                    <p>Top giày Jordan ấn tượng sắp ra mắt vào mùa xuân 2021 </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../../css/tin-tuc/img/7.jpg" alt="">
                                </td>
                                <td>
                                    <p>Hệ thống giày THE CLOSER - Uy tín làm nên thương hiệu </p>
                                </td>
                            </tr>


                        </table>



                    </div>
                </div>

            </div>


            <div class="col-md-8">
                <div class="row">



                    <div class="card" style="width: 14rem;">
                        <img src="../../css/tin-tuc/img/6.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Top 10 những đôi giày nổi bật tại THE CLOSER</p>
                            <p class="gach"></p>
                            <p class="nho">Với hệ thống giày lớn đầy đủ mẫu mã đa dạng thỳ ...</p>
                            <p class="ngay"> <img src="../../css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../css/tin-tuc/img/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Chương trình khuyến mãi tri ân khách hàng thành viên</p>
                            <p class="gach"></p>
                            <p class="nho">Tới đây sẽ có những ưu đãi cho những khách hàng thành viên ...</p>
                            <p class="ngay"> <img src="../../css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../css/tin-tuc/img/7.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Neymar sẽ lựa chọn giày nào để dự tiệc đám cưới Messi ?</p>
                            <p class="gach"></p>
                            <p class="nho">Sắp tới đây sẽ có 1 sự kiện quan trọng cho bóng đá ...</p>
                            <p class="ngay"> <img src="../../css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../css/tin-tuc/img/8.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Nike Air One - giá rẻ nhưng chất lượng không rẻ</p>
                            <p class="gach"></p>
                            <p class="nho">Nike đã cho ra đời dòng sản phẩm Nike Air One trên ...</p>
                            <p class="ngay"> <img src="../../css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../css/tin-tuc/img/2.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Top 5 đôi giày được các bạn nữ yêu thích nhất</p>
                            <p class="gach"></p>
                            <p class="nho">Dựa trên 1 cuộc khảo sát tại THE CLOSER đôi giày mà ...</p>
                            <p class="ngay"> <img src="../../css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <img src="../../css/tin-tuc/img/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 10px;
                    ">


                            <p class="card-text">Adidas First One - sự lựa chọn hoàn hảo</p>
                            <p class="gach"></p>
                            <p class="nho">Adidas Fist One hiện đang làm mưa làm gió trên ...</p>
                            <p class="ngay"> <img src="../../css/tin-tuc/img/h.png" alt=""> </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









 



    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="https://scontent.fpnh22-2.fna.fbcdn.net/v/t1.6435-9/181150315_102201648705132_5894264111956944146_n.png?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=OtiUo2flbdEAX_dyQES&_nc_ht=scontent.fpnh22-2.fna&oh=db19836dfddbf8cf02e942468bcdd64b&oe=60BD403A" alt="" style ="width:60px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Hỗ trợ</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuyến mãi</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>

                                <li>
                                    <p>
                                    Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
                                    Xin cám ơn !                                    
                                </p>
                                </li>
                                <li><i class="fa fa-facebook "></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Trang chủ</p>
                                </li>
                                <li>
                                    <p>Cửa hàng</p>
                                </li>
                                <li>
                                    <p>Giới thiệu</p>
                                </li>
                                <li>
                                    <p>Liên hệ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Ưu đãi</p>
                                </li>
                                <li>
                                    <p>Giao nhận</p>
                                </li>
                                <li>
                                    <p>Đổi trả</p>
                                </li>
                                <li>
                                    <p>Bảo mật</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi ...</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </>









    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>











</body>

</html>