<?php
	include 'head.php';
	include 'header.php';
	$xml=simplexml_load_file("index.xml");
?>
	
<section id="main-slider" class="parallax" data-stellar-background-ratio="0.5" style="background-position: 0% 0%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-slider">
                    <ul class="slides">
                        <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                            <h2><?php echo $xml->description; ?></h2>
                            <p><a href="/backup/index.html" class="btn border-white">Visit page</a></p>
                        </li>
<!--                                 <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                            <h2></h2>
                            <p><a href="" class="btn border-white"></a></p>
                        </li>
                        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;" class="">
                            <h2></h2>
                            <p><a href="" class="btn border-white">Hire us</a></p>
                        </li> -->
                    </ul>
<!--                 <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol>	--></div>	
            </div>
        </div>
    </div>
</section>

<section class="testimonials parallax" data-stellar-background-ratio="0.5" style="background-position: 0% 0%;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div id="testi-carousel" class="owl-carousel owl-spaced owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 6840px; left: 0px; display: block;">
                    <div class="owl-item" style="width: 1140px;">
                    <div>
                        <h4>
                            <i class="fa fa-quote-left"></i><?php echo $xml->thought; ?><i class="fa fa-quote-right"></i>
                        </h4>
                        <p>-THOUGHT OF THE WEEK</p>
                    </div>
                    </div>
                    </div>
                    </div>
               </div>
           </div>
        </div>
    </div>
</section>

<div class="divide80"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="heading">Upcoming Events</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 margin20">
            <div class="post-wrap wow animated fadeInLeft">
                <a href=" <?php echo $xml->image1; ?> ">
                    <div class="item-img-wrap">
                        <img src="<?php echo $xml->image1; ?>" class="img-responsive" alt="img">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </div>                       
                </a><!--post link-->
              <div class="post-desc">
                    <h4><a href="#"> <?php echo $xml->title1; ?></a></h4>
                    <p>
                        <?php echo $xml->description1; ?>
                    </p>
                    <p><a href="#"></a></p>
                </div><!--post-desc-->
            </div><!-- post wrap-->
        </div>
       <div class="col-md-4 margin20">
            <div class="post-wrap wow animated fadeInLeft" >
                <a href=" <?php echo $xml->image2; ?> ">
                    <div class="item-img-wrap">
                        <img src="<?php echo $xml->image2; ?>" class="img-responsive" alt="img">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </div>                       
                </a><!--post link--> 
              <div class="post-desc">
                    <h4><a href="#"> <?php echo $xml->title2; ?> </a></h4>
                    <p>
                        <?php echo $xml->description2; ?>
                    </p>
                    <p><a href=""></a></p>
                </div><!--post-desc-->
            </div><!-- post wrap-->
        </div>
        <div class="col-md-4 margin20">
            <div class="post-wrap wow animated fadeInLeft" >
                <a href=" <?php echo $xml->image3; ?> ">
                    <div class="item-img-wrap">
                        <img src="<?php echo $xml->image3; ?>" class="img-responsive" alt="img">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </div>                       
                </a><!--post link--> 
                <div class="post-desc">
                    <h4><a href="#"> <?php echo $xml->title3; ?> </a></h4>
                    <p>
                       <?php echo $xml->description3; ?>
                    </p>
                    <p><a href=""></a></p>
                </div><!--post-desc-->
            </div><!-- post wrap-->
        </div>
    </div>
</div><!--latest news-->

<?php
	unset($xml);
	include 'footer.php';
?>
