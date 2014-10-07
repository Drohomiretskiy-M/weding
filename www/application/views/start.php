<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Онлайн клініка</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php foreach($styles as $style): ?>
<link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" 
rel="stylesheet" type="text/css" />
<?php endforeach; ?>
    
    <?php foreach($scripts as $script) { 
    echo HTML::script($script, NULL, TRUE), "\n"; }?>
    

</head>
<body id="page1">
<!--==============================header=================================-->
<header>
  <div class="main">
    <h1> <a href="index.html">LauraJohn</a> <em>Our wedding Page</em> </h1>
  </div>
  <div class="menu-row">
    <div class="main">
      <div class="container_12">
        <div class="wrapper">
          <div class="grid_12">
            <nav>
              <ul class="menu">
                <li><a class="active" href="index.html">About</a></li>
                <li><a href="wedding.html">Wedding</a></li>
                <li><a href="album.html">Album</a></li>
                <li><a href="links.html">Links</a></li>
                <li><a href="contacts.html">Contacts</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="slider-wrapper">
      <div class="slider">
        <ul class="items">
          <li> <img src="images/slider-img1.jpg" alt=""> </li>
          <li> <img src="images/slider-img2.jpg" alt=""> </li>
          <li> <img src="images/slider-img3.jpg" alt=""> </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_4">
          <div class="indent-right">
            <h2>Love Story</h2>
            <p>Laura &amp; John is one of free website templates created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution.</p>
            <ul class="list-1 p2">
              <li><a href="#">Duis aute irure dolor in reprehenderit</a></li>
              <li><a href="#">Voluptate velit esse cillum dolore</a></li>
              <li><a href="#">Cusamus et iusto odio dignissimos</a></li>
              <li><a href="#">Ducimus qui blanditiis</a></li>
              <li><a href="#">Praesentium voluptatum deleniti atque</a></li>
            </ul>
            <p class="img-indent-bot">This Laura &amp; John Template goes with two packages – with PSD source files and without them. PSD source files are avail able for free for the registered members of TemplatesMonster.com.</p>
            <a class="link-1" href="#">About Our Wedding</a> </div>
        </article>
        <article class="grid_8">
          <div class="indent-left">
            <h2 class="indent-bot2">About Our Family</h2>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="images/page1-img1.jpg" alt=""></a><span class="clear"></span></p>
                <span class="text-1">John Daniels</span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...sed ut perspiciatis unde omnis iste natus error volup tatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                          Veritatis et quasi architecto beatae vitae dicta sunt expli cabo. Nemo enim ipsam voluptatem...&quot; </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            <div class="wrapper img-indent-bot">
              <figure class="img-indent-r">
                <p class="p1"><a href="#"><img class="img-border1" src="images/page1-img2.jpg" alt=""></a><span class="clear"></span></p>
                <div class="alignright"> <span class="text-1">Laura Daniels</span> </div>
              </figure>
              <div class="extra-wrap">
                <blockquote class="q2"> <span class="quote-marker2"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p>&quot;Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                          Qui ratione voluptatem sequi nesciunt neque poruisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit.&quot; </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            <a class="link-1" href="#">Read More</a> </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_3 suffix_3">
          <ul class="list-services">
            <li><a class="item-1" href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
          </ul>
        </div>
        <div class="grid_5"> <span class="footer-text"> <span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</span> Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></span> </div>
      </div>
    </div>
  </div>
</footer>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuint',
        preset: 'slideDown',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        pagination: true,
        pagNums: false
    });
});
</script>
</body>
</html>