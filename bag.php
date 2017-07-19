
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Bag</title>

   <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700|Patua+One|Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="bower_components/owl.carousel/dist/assets/owl.theme.default.min.css" />
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <?php include "inc_header.php"; ?>
     <div class="content2">
       <div class="menusub"><a href="#"><img src="images/icon_back.png"></a><a href="">BAG</a></div>
       <div class="bag">
           <ul class="bag_tap">
              <li class="active">1.ตะกร้าสินค้า</li>
              <li>2.ที่อยู่ในการจัดส่ง</li>
              <li>3.ชำระเงิน</li>
              <li>4.เสร็จสิ้นการสั่งซื้อ</li>
           </ul>
           <img src="images/bag.jpg" style="margin-left:50px;">
           <button class="bag_button_buy">เลือกซื้อสินค้าเพิ่ม</button>
           <button class="bag_button_code">กรอกรหัสโปรโมชั่น</button>
           <form action="bag_add.php">
           <button class="bag_button_next" >ดำเนินการต่อ >></button>
           </form>
       </div>
       </div>


      
       
       
       
     </div>


    
      <div class="clear"></div>
 

  <footer>
         <?php include "inc_footer.php"; ?>
      </footer>
  </body>
</html>
