<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


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
                <a href="index.php"><img src="https://scontent.fsgn13-1.fna.fbcdn.net/v/t1.6435-9/181150315_102201648705132_5894264111956944146_n.png?_nc_cat=100&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=QFhQphCXzRAAX-d1fir&_nc_ht=scontent.fsgn13-1.fna&oh=9bdbefb8aa7738430f4cf22e51cefca8&oe=613BD03A" alt="anh"></a>
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
                            <?php
                                if(!isset($_SESSION['user'])){
                            ?>
                            <li><a href="/tai-khoan/dang-nhap.php">THEO DÕI</a></li>
                                <?php }else{ ?>
                                    <li><a href="lichsu.php">THEO DÕI</a></li>
                                <?php } ?>

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
                    <p><i class="fa fa-home" style="font-size:24px"></i> <span>TRANG CHỦ </span> / GIỎ HÀNG</p>
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
    
    <div class="container" style="margin-top: 80px;">
        <div class="row">
        
        <div class="col-sm-7">
            <table class="table">
                <thead>
                <tr>
                    <th>SẢN PHẨM</th>
                    <th>HÌNH ẢNH</th>
                    <th>GIÁ</th>
                    <th>SL</th>
                    <th>TỔNG</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <!-- CODE PHP DANH SÁCH GIỎ HÀNG -->
                <form action="cap-nhat-gio-hang.php" method="post">
                <?php
                    $total = $i = 0;
                    if(!empty($_SESSION['cart'])){
                        $items = $_SESSION['cart'];
                        foreach($items as $item){
                            extract($item);
                            $i++;
                    ?>
                <tr>
               
                    <td><?=$name ?></td>
                    <td><img src="/css/admin/images/products/<?=$hinh?>" alt="" style = "width:80px;"></td>
                    <td><?=number_format($price - ($price*($giam_gia/100))) ?> VNĐ</td>
                    <td><input class="form-control" type="number" name='sl[<?=$ma_hh?>]' value="<?=$sl ?>" style="width:50px;"></td>
                    <td><?=number_format(($price - ($price*($giam_gia/100)))*$sl);
                            $total += (($price - ($price*($giam_gia/100)))*$sl);
                    ?> VNĐ</td>
                    <td><a onclick="return confirm('Bạn muốn bỏ sản phẩm này khỏi giỏ hàng ?')" style = "color:black;" href="xoa-gio-hang.php?ma_hh=<?=$ma_hh?>"><i class="fa fa-times-circle" aria-hidden="true"></i></a></td>
                </tr>

                <!-- NẾU KHÔNG CÓ SẢN PHẨM NÀO SẼ XUẤT HIỆN THẺ P -->
                        <?php }}else{
                        echo '<p>Giỏ hàng của bạn chưa có sản phẩm nào !</p>';
                        }?>
                        
                </tbody>
            </table>
            <button class = "btn btn-info"><a style = "color:#fff;text-decoration:none;" href="danh-sach-sp.php">Tiếp tục xem sản phẩm</a></button>  
            <button type="submit" class = "btn btn-secondary" name="btn_update_gio_hang" >Cập nhật giỏ hàng</button>

            </form>
        </div>


        


            <div class="col-sm-5">
            <table class="table">
                <thead>
                <tr>
                    <th>TỔNG SỐ LƯỢNG</th>
                    <th></th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tổng phụ</td>
                    <td style = "text-align:right;"><?=number_format($total)?> VNĐ</td>
                </tr>
                <tr>
                    <td>Giao hàng</td>
                    <td style = "text-align:right;">Giao hàng miễn phí <br>
                    Ước tính tại nội thành Hồ Chí Minh <br>
                    Đổi địa chỉ</td>
                </tr>
                <tr>
                    <td>Tổng</td>
                    <td style = "text-align:right;"><b><?= number_format($total)?> VNĐ</b></td>
                </tr>
                <tr>
                <?php
                                if($total==0){
                            ?>
                     <td colspan="2"><a href="danh-sach-gio-hang.php"><button class = "btn btn-danger" style = "width:100%;">TIẾN HÀNH THANH TOÁN</button></a></td>
                                <?php }else{ ?>
                                    <td colspan="2"><a href="thanh-toan-gio-hang.php"><button class = "btn btn-danger" style = "width:100%;">TIẾN HÀNH THANH TOÁN</button></a></td>
                                <?php } ?>
                </tr>
                <!-- <tr>
                    <td colspan = "2"><b>Phiếu ưu đãi</b></td>
                </tr>
                <tr>
                    <td colspan = "2">
                    <input type="text" class="form-control" placeholder="Mã ưu đãi"><br>
                    <button class = "btn btn-light" style = "width:100%;"><b>ÁP DỤNG</b></button>
                    </td>
                </tr> -->
                </tbody>
            </table>
            </div>

        </div>


   

 



    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                        <img src="https://scontent.fsgn13-1.fna.fbcdn.net/v/t1.6435-9/181150315_102201648705132_5894264111956944146_n.png?_nc_cat=100&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=QFhQphCXzRAAX-d1fir&_nc_ht=scontent.fsgn13-1.fna&oh=9bdbefb8aa7738430f4cf22e51cefca8&oe=613BD03A" alt="" style ="width:60px;">
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