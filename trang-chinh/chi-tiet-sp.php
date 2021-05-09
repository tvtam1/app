<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        .item{
            position:relative;
        }
        .item .cung-loai{
            position: absolute;
            font-size: 12px;
            color: #fff;
            text-align: center;
            font-weight: 400;
            line-height: 26px;
            font-family: "Roboto Condensed", sans-serif;
            width: 80px;
            display: block;
            background: #f7941d;
            background: linear-gradient(#f7941d 0,#f7941d 100%);
            box-shadow: 0 3px 10px -5px #000;
            top: 10px;
            right: 25px;
        }
        
    </style>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../bigshoes/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="login">


                  <!-- CODE CHECK ĐĂNG NHẬP -->
                  <?php 
                    session_start();
                    if(!isset($_SESSION['user'])){
                  ?>
                  <a href="../../bigshoes/tai-khoan/dang-nhap.php"><p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p></a> 
                    <?php }else{ ?>
                        <a href="../../bigshoes/tai-khoan/thong-tin-tk.php"><p><strong>XIN CHÀO <?=$_SESSION['user']['ho_ten']?></strong></p></a>
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


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><i class="fa fa-home" style="font-size:24px"></i> <span>TRANG CHỦ </span> / CHI TIẾT</p>
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

    <!-- ============================================
 ======================CHI-TIẾT====================================
 ============================================ -->

    <div class="container" style="margin-top: 80px;">
        <div class="row">
        <!-- CODE PHO THÔNG TIN SẢN PHẨM -->
        <?php
                    require_once ('../../bigshoes/admin/dao/hang-hoa.php');
                        extract($_REQUEST);
                        $items = hang_hoa_select_by_id($ma_hh);
                        extract($items);
                    ?>
            <div class="col-md-4" style="padding-left: 0px">
                <div class="spchitiet">
                    <img src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt="" style="width:100%;">
                </div>
            </div>
            <div class="col-md-5">
                <div class="thongtinsp">
                    <ul>
                        <li>
                            <h5 style="font-size: 30px;"><?=$ten_hh?></h5>
                            <p> </p>
                        </li>
                        <li><del><?=number_format($don_gia)?></del> VNĐ</li>
                        <li style = "font-size:30px;"><?=number_format($don_gia - $don_gia*($giam_gia/100))?> VNĐ</li>
                        <li style="margin-top: 15px;"><?=$mo_ta?></li>
                        <li class="gu" style="margin-top: 20px;"> <img src="../../bigshoes/css/chi-tiet-sp/img/ttt.png" alt=""> </li>
                        <li class="size" style="margin-top: 20px;">
                            <div class="soluong">
                                <select name="" id="">
                                    <option value="">Size</option>
                                    <option value="">size 37</option>
                                    <option value="">size 38</option>
                                    <option value="">size 39</option>
                                    <option value="">size 40</option>
                                </select>
                            </div>

                        </li>
                        <li class="soluong1" style="margin-top: 27px;">

                            <input type="number" placeholder="1" readonly>

                        <!-- MÃ CODE PHP CHECK ĐĂNG NHẬP ĐỂ MUA HÀNG -->

                            <?php
                                if(!isset($_SESSION['user'])){
                            ?>
                            <a href="../../bigshoes/tai-khoan/dang-nhap.php"><button style="margin-top:-5px;" class="btn btn-dark">ĐĂNG NHẬP ĐỂ MUA HÀNG</button></a>
                                <?php }else{ ?>
                            <a href="them-gio-hang.php?ma_hh=<?=$ma_hh?>"><button style="margin-top:-5px;" class="btn btn-dark">THÊM VÀO GIỎ HÀNG</button></a>
                                <?php } ?>

                        </li>
                        <li style="margin-top: 25px;">-----------------------------------------------------------------</li>
                        <li>Mã: #<?=$ma_hh?></li>
                        -----------------------------------------------------------------
                        <?php
                            $items = loai_hang_select_by_id($ma_loai);
                            extract($items);
                        ?>
                        <li>Danh mục: <?=$ten_loai?></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thanhtoan">
                   <div class="row">
                   <h5>PHƯƠNG THỨC THANH TOÁN</h5>
                    <ul>
                        <li> <img src="../../bigshoes/css/chi-tiet-sp/img/l2.png" alt=""> </li>
                        <li> <img src="../../bigshoes/css/chi-tiet-sp/img/l1.png" alt=""> </li><br>
                        <li> <img src="../../bigshoes/css/chi-tiet-sp/img/l4.png" alt=""> </li>

                        <li> <img src="../../bigshoes/css/chi-tiet-sp/img/l3.png" alt=""> </li>
                    </ul>
                   </div>
                   <div class="row">
                     <a href="danh-sach-sp.php"><img src="../../bigshoes/css/chi-tiet-sp/img/SALE.png" alt="" style="width:100%"></a>  
                   </div>
                </div>
            </div>
        </div>
    </div>




    <!-- ============================================
 ==========================================================
 ============================================ -->

 <!-- BÌNH LUẬN -->
 <div class="container" style="margin-top: 30px;">

        <div class="row">
            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h5>NHẬN XÉT VÀ ĐÁNH GIÁ</h5>
                    <p></p>
                </div>
            
            <!-- CODE PHP PHẦN HIỂN THỊ BÌNH LUẬN -->
            <?php
                require_once ('../admin/dao/binh-luan.php');
                extract($_REQUEST);
                if(array_key_exists("noi_dung",$_REQUEST)){
                    $ma_kh = $_SESSION['user']['ma_kh'];
                    $ngay_bl = date_format(date_create(), 'd-m-Y');
                    binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
                }
                $binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
            ?>  
            <div class="binh-luan">

            <?php
            foreach ($binh_luan_list as $bl) {
            ?>
               <div class="row">
                    <div class="col-sm-10">
                        <?php echo "<li>$bl[noi_dung]</li>"?>
                    </div>
                    <div class="col-sm-2" style = "text-align:right;">
                       <?php echo "$bl[ma_kh]</b>, $bl[ngay_bl]" ?>
                    </div>
               </div>
            <?php } ?>
            </div><br>
            
            <!-- CODE PHP PHẦN CHO PHÉP BÌNH LUẬN -->
                <?php
                if(!isset($_SESSION['user'])){
                    echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
                }else{
                ?>
                <div class="owl-carousel owl-theme ">
                   <form action="" method="post">
                   <div class="row">
                       <div class="col-sm-10">
                            <div class="form-group">
                            <input class="form-control" name= "noi_dung"  style="width:600%;height:80px;"/>
                            </div>
                       </div>
                       <div class="col-sm-2">
                           <button class="btn btn-danger" style = "margin-left:870px;">Gửi</button>
                       </div>
                   </div>
                   </form>
                <?php } ?>

                </div>
            </div>
        </div>
    </div>




    <div class="container" style="margin-top: 30px;">
        <div class="row">

            <div class="col-md-12" style="padding-left: 0px;">
                <div class="spnoibat">
                    <h5>SẢN PHẨM CÙNG LOẠI</h5>
                    <p></p>
                </div>

                <div class="owl-carousel owl-theme ">
                    <!-- CODE PHP SẢN PHẨM CÙNG LOẠI -->
                    <?php
                        $items = hang_hoa_select_by_loai($ma_loai);
                        foreach($items as $item){
                            extract($item);
                        
                    ?>
                    <div class="item">
                       <a href="chi-tiet-sp.php?ma_hh=<?=$ma_hh?>"><img style="width: 200px" src="../../bigshoes/css/admin/images/products/<?=$hinh?>" alt="ds"><span class='cung-loai'><?=$ten_loai?></span></a>
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