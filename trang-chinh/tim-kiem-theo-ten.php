<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/danh-sach-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/danh-sach-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/danh-sach-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="/css/danh-sach-sp/plugin/js/owl.carousel.min.js"></script>


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
                   <a href="index.php"><img src="https://scontent.fpnh22-2.fna.fbcdn.net/v/t1.6435-9/181150315_102201648705132_5894264111956944146_n.png?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=lOSGnCDWgq8AX9bWVAh&_nc_ht=scontent.fpnh22-2.fna&oh=a37059c639c6fcb0976b811f3a23a5a7&oe=60BD403A" alt="anh"></a>
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


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><span>TRANG CHỦ </span> / SẢN PHẨM</p>
                </div>
            </div>
            <div class="col-md-5" style="padding-right: 0px;">
                <div class="thutu">
                    <ul>
                        <li>
                            <p style="margin-top: 10px;">Hiển thị tất cả các sản phẩm</p>
                        </li>
                        <li>
                            <select>
                               <option>Thứ tự mặc định</option>
                               <option>Thứ tự theo mức độ phổ biến</option>
                               <option>Thứ tự thấp đến cao</option>
                           </select>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-left: 0px;margin-top: 42px;">

                <div class="row" style="
    margin-left: 0px;
">
                    <!-- Tìm kiếm theo tên sản phẩm -->
                    <form action="tim-kiem-theo-ten.php" method="post">

                    <div class="serch">
                        <input type="text" placeholder="Tìm kiếm..." name="keywords">
                        <button type="submit" name="search-keywords"><i class="fa fa-search" style="font-size:20px;color:rgb(255, 255, 255)"></i></button>
                    </div>
                    </form>
                </div>
                <div class="row" style="
    margin-left: 0px;
">

                    <!-- CODE PHP DANH MỤC -->
                    <?php
                        require_once ('../admin/dao/loai-hang.php');
                        extract($_REQUEST);
                        $items = loai_hang_select_all();
                    ?>
                    <div class="row" style="margin-top: 35px;margin-left: 0px;">

                        <ul class="list-group">
                            <li class="list-group-item active">DANH MỤC</li>
                            <?php foreach($items as $item){
                                extract($item);
                                ?>
                            <a href="sp-cung-loai.php?ma_loai=<?=$ma_loai?>"><li class="list-group-item"><?=$ten_loai?></li></a> 
                            <?php } ?>
                        </ul>

                    </div>

                    <div class="row" style="margin-top: 35px;margin-left: 0px;">

                        <ul class="list-group">
                            <!-- CODE PHP SẢN PHẨM BÁN CHẠY -->
                        <?php
                            require_once ('../admin/dao/hang-hoa.php');
                            extract($_REQUEST);
                            $items = hang_hoa_sale();
                        
                        ?>
                            <li class="list-group-item active">SẢN PHẨM SALE UP 10 - 50%</li>
                            <?php foreach($items as $item){
                                extract($item);
                                ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-4"><a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>&ma_loai=<?=$ma_loai?>"><img style="width:80px;" src="/css/admin/images/products/<?=$hinh?>" alt=""></a></div>
                                    <div class="col-sm-8"><?=$ten_hh?><br><br><b><?=number_format($don_gia-($don_gia*$giam_gia/100))?> VNĐ</b></div>
                                </div>
                            </li>



                            <?php } ?>
                        </ul>

                    </div>


                    

                </div>


            </div>

            <!-- Sản phẩm nó nằm ở đây -->
            <div class="col-md-9">

            <!-- CODE PHP DANH SÁCH SẢN PHẨM -->
            
            <?php
                require_once ('../admin/dao/hang-hoa.php');

                extract($_REQUEST);

                if(array_key_exists('search-keywords',$_REQUEST)){
                    $items = hang_hoa_select_keyword($keywords);
                }
                foreach($items as $item){
                    extract($item);

            ?>
                <div class="sanpham">
                    <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img src="/css/admin/images/products/<?=$hinh?>" alt=""></a>
                    <div class="text">
                        <div class="price">
                            <?=$don_gia?> VNĐ
                        </div>
                        <div class="name">
                           <?=$ten_hh?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            
                                                          
            </div>
        </div>

    </div>

    <div class="container" style="margin-top: 30px;">
        <div class="row">

            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h5>sản phẩm nỗi bật</h5>
                    <p></p>
                </div>

                <div class="owl-carousel owl-theme ">

                    <!-- CODE PHP SẢN PHẨM NỔI BẬT -->
                    <?php
                        $items = hang_hoa_noi_bat();
                        foreach($items as $item){
                            extract($item);
                    ?>
                    <div class="item">
                        <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="/css/admin/images/products/<?=$hinh?>" alt="ds"></a>
                    </div>
                        <?php } ?>



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
                        <img src="/css/danh-sach-sp/img/logooo.png" alt="" style ="width:60px;">
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
    </div>









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







