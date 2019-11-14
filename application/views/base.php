<!DOCTYPE html>
<html>

<head>
    <title>ZENOSYS</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#174477" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image/png" sizes="64x64">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css">

    <!-----Scrolling animation-------------->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>


<!--Note : Add class > for ScrollBar : example-1 scrollbar-dusty-grass square thin-->

<body class="example-1  scrollbar-dusty-grass square thin">

    <!------Loader------->


    
<div id="Load" class="load">
      <div class="load__container text-center">
<!--        <div class="load__animation">-->
        <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Loader" class="img-fluid" style="max-width:50%;">
<!--        </div>-->
        <div class="load__mask"></div>
<!--        <span class="load__title">Karan <span>Solanki</span></span>-->
      </div>
    </div>



    <!------Floating------->

    <a href="#" id="scroll" style="display: none;z-index: 99999;">
        <span></span></a>

    <!------header------->
 <?php $this->load->view('header.php');?>







    <section class="WhyZenosys">
<?php echo $content; ?>

    </section>


 <?php $this->load->view('footer.php');?>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<!--    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-----Scrolling animation-------------->

    <script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/comman.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>



</body>

</html>
