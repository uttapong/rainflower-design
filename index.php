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

  <title>Rain Flower</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
  <link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700|Patua+One|Roboto:400,700,300' rel='stylesheet'
    type='text/css'>
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
  

    <div class="owl-carousel owl-theme">
      <div> <img src="images/slider1.jpg" width="100%"> </div>
      <div> <img src="images/slider2.jpg" width="100%"> </div>
      <div> <img src="images/slider3.jpg" width="100%"> </div>
    </div>
    <div id="dots-container"></div>

    <div class="container">

    <div class="bestseller_bg">
      <div class="content2">
        <div class="title">
          BEST SELLER <img src="images/star.png"> <img src="images/star.png"> <img src="images/star.png"> <img src="images/star.png">

          <div class="viewall"><a href="bestseller.php" tilte="">view all</a></div>
        </div>
        <div class="clear"></div>

<div class="col-md-3 col-xs-6">
        <div class="bestseller">
          <a href="products_detail.php" title="">
            <div class="ribbon"></div><img src="images/best1.jpg"></a>
        </div>
        </div>
        <div class="col-md-3 col-xs-6">
        <div class="bestseller">
          <a href="products_detail.php" title="">
            <div class="ribbon"></div><img src="images/best2.jpg"></a>
        </div>
        </div>
        <div class="col-md-3 col-xs-6">
        <div class="bestseller">
          <a href="products_detail.php" title="">
            <div class="ribbon"></div><img src="images/best3.jpg"></a>
        </div>
        </div>
        <div class="col-md-3 col-xs-6">
        <div class="bestseller">
          <a href="products_detail.php" title="">
            <div class="ribbon"></div><img src="images/best4.jpg"></a>
        </div>
        </div>

      </div>    </div>
    <div class="clear"></div>
    <div class="content2">
      <br/><br/><br/>

      <div class="newproducts">
        <div class="title">
          NEW PRODUCTS <img src="images/bear_rainbow.png">
          <div class="viewall"><a href="new_products.php" tilte="">view all</a></div>
        </div>
        <div class="clear"></div>

        <div class="row">
          <div class="col-xs-12 col-md-6">
          <a href="products_detail.php">
            <div class="newproducts_p">
              <img src="images/newproducts.jpg">
              <div class="view">
                <a href="#" tilte="">View</a>
              </div>
              <div class="newproducts_title">Lorem ipsum dolor sit amet, consecte</div>
              <div class="newproducts_des">tur adipiscing elit. In tincidunt egestas odio, a tristique felis viverra aliquam. Maecenas at sapien pretium......</div>
            </div>
          </a>
          </div>

          <div class="col-xs-12 col-md-6">
          <a href="products_detail.php">
            <div class="newproducts_p">
              <img src="images/newproducts.jpg">
              <div class="view">
                <a href="#" tilte="">View</a>
              </div>
              <div class="newproducts_title">Lorem ipsum dolor sit amet, consecte</div>
              <div class="newproducts_des">tur adipiscing elit. In tincidunt egestas odio, a tristique felis viverra aliquam. Maecenas at sapien pretium......</div>
            </div>
          </a>
          </div>


        </div><!--end row-->

      </div><!--end newproducts-->

      <div class="clear"></div>
    </div><!--end content2-->
    </div><!--end container-->

      <footer>
         <?php include "inc_footer.php"; ?>
      </footer>
      
</body>

</html>