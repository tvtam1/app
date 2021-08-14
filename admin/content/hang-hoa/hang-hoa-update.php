<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>ADMIN</title>
	<!-- Bootstrap Styles-->
    <link href="/css/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="/css/admin/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="/css/admin/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../../trang-chinh/"><strong style = "margin-left: 40px;">THE CLOSER</strong></a>
            </div>
           
    <!-- Nav bar-->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../../../tai-khoan/dang-xuat.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../thong-ke/thong-ke-list.php"><i class="fa fa-dashboard"></i>TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="../loai-hang/loai-hang-list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>LOẠI HÀNG</a>
                    </li>
                    <li>
                        <a href="../hang-hoa/hang-hoa-list.php"><i class="fa fa-qrcode"></i>HÀNG HÓA</a>
                    </li>
                    
                    <li>
                        <a href="../khach-hang/khach-hang-list.php"><i class="fa fa-user"></i>KHÁCH HÀNG</a>
                    </li>
                    <li>
                        <a href="../binh-luan/binh-luan-list.php"><i class="fa fa-comment-o" aria-hidden="true"></i>BÌNH LUẬN</a>
                    </li>
                    <li>
                        <a href="../hoa-don/hoa-don-list.php"><i class="fa fa-edit"></i>ĐƠN HÀNG</a>
                    </li>       
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                        <div class="page-header">
                            <h1>QUẢN LÝ HÀNG HÓA</h1>
                            <p>Cập nhật lại thông tin hàng hóa :</p>

                            <!-- /. CODE XỬ LÝ PHP  -->
                            <?php
                                require_once ('../../dao/hang-hoa.php');
                                require_once ('../../dao/loai-hang.php');
                                extract($_REQUEST);
                                $item = hang_hoa_select_by_id($ma_hh);
                                extract($item);


                                extract($_REQUEST);
                                if(array_key_exists("btn_update",$_REQUEST)){
                                    $up_hinh = save_file("hinh", "../../assets/images/products/");
                                    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;

                                    hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $mo_ta);                              
                                }
                            ?>
                            <!-- /. CONTENT  -->
                            <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            <label for="">Mã hàng hóa:</label>
                            <input type="text" class="form-control" id="ma_hh" name="ma_hh"
                                placeholder="Nhập tên hàng hóa ..."
                                value = <?=$ma_hh?> readonly>
                            </div>

                            <div class="form-group">
                            <label for="">Tên hàng hóa:</label>
                            <input type="text" class="form-control" id="ten_hh" name="ten_hh"
                                placeholder="Nhập tên hàng hóa ..."
                                value = "<?=$ten_hh?>" >
                            </div>

                            <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input type="number" class="form-control" id="don_gia" name="don_gia" min="0" max="99999999"
                                placeholder="Nhập đơn giá ..."
                                value = "<?=$don_gia?>">
                            </div>

                            <div class="form-group">
                            <label for="">Giảm giá (%)</label>
                            <input type="number" class="form-control" id="giam_gia" name="giam_gia" min="0" max="100"
                                placeholder="Nhập giảm giá"
                                value="<?=$giam_gia?>">
                            </div>

                            <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control-file border" name="hinh">
                            <input name="hinh" type="hidden" value="<?=$hinh?>"><br>
                            <img src="../../assets/images/products/<?=$hinh?>" alt="" style="width:80px"><br>
                            (<?=$hinh?>)
                            </div>

                            <div class="form-group">
                            <label for="">Mô tả:</label>
                            <textarea class="form-control" rows="5" id="mo_ta" name="mo_ta"
                                placeholder="Mô tả hàng hóa ..."><?=$mo_ta?></textarea>
                            </div>

                            <div class="form-group">
                            <label for="">Mã loại?</label>
                            <select name="ma_loai" class=form-control>
                                            <?php
                                                $loai_select_list = loai_hang_select_all();
                                                foreach ($loai_select_list as $loai) {
                                                    if($loai['ma_loai'] == $ma_loai){
                                                        echo '<option selected value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                                    }
                                                    else{
                                                        echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                                    }
                                                }
                                            ?>
                            </select>
                            </div>
                            <button type="submit" name="btn_update" class="btn btn-danger">Cập nhật</button>
                        </form>
                        </div>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="/css/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="/css/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="/css/admin/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="/css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
