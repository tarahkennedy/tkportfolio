<div class="header">
<?php get_header();  ?>

</div>

<div class="fox">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 159.401 150.24" style="enable-background:new 0 0 159.401 150.24;" xml:space="preserve">
    <style type="text/css">
  .st0{fill:none;stroke:#FFFFFF;stroke-linejoin:round;stroke-miterlimit:10;}
  .st1{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
    </style>
  <g id="XMLID_931_">
  <polygon id="XMLID_978_" class="st0" points="135.24,40.156 155.165,89.614 79.681,149.329 4.197,89.614 24.122,40.156   "/>
  <line id="XMLID_977_" class="st1" x1="4.197" y1="89.614" x2="155.165" y2="89.614"/>
  <line id="XMLID_974_" class="st1" x1="79.681" y1="149.329" x2="79.681" y2="89.614"/>
  <line id="XMLID_955_" class="st1" x1="4.197" y1="89.614" x2="4.197" y2="40.156"/>
  <line id="XMLID_954_" class="st1" x1="4.197" y1="40.156" x2="24.122" y2="40.156"/>
  <line id="XMLID_939_" class="st1" x1="4.197" y1="40.156" x2="18.154" y2="54.114"/>
  <line id="XMLID_938_" class="st1" x1="155.165" y1="89.614" x2="155.165" y2="40.156"/>
  <line id="XMLID_937_" class="st1" x1="155.165" y1="40.156" x2="135.24" y2="40.156"/>
  <line id="XMLID_936_" class="st1" x1="155.165" y1="40.156" x2="141.208" y2="54.114"/>
  <line id="XMLID_3_" class="st1" x1="4.135" y1="0.883" x2="43.65" y2="40.156"/>
  <path id="XMLID_933_" class="st0" d="M4.197,40.156C-3.505,31.734,4.135,0.883,4.135,0.883l75.546,148.446"/>
  <line id="XMLID_2_" class="st1" x1="155.227" y1="0.883" x2="115.712" y2="40.156"/>
  <path id="XMLID_1_" class="st0" d="M155.165,40.156c7.702-8.422,0.061-39.273,0.061-39.273L79.681,149.329"/>
    </g>
    </svg>
</div>

<div class="main">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
      <div class="about"> 
      <?php the_field('about'); ?>
        <!-- <div class="arrow">
        <i class="fa fa-long-arrow-down"></i>
        </div> -->
      </div>

     
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


<!-- PORTFOLIO -->
   
     <?php while(the_repeater_field('portfolio')): ?>
      <div class="portfolio-thing clearfix">
      <div class="portfolio-image">
        <img src="<?php the_sub_field('image'); ?>"/>
      </div>

        <div class="portfolio-content">
        <h2><?php the_sub_field('title') ?></h2>
        <h4><?php the_sub_field('tools') ?></h4>
        <div class="portfolio-description">
          <p><?php the_sub_field('description'); ?></p>
          
        </div>
        <div class="view-live">
          <h2><a href="<?php the_sub_field('destination'); ?>"><?php the_sub_field('portfolio_title'); ?></a></h2> 
        </div>
        </div>
      </div>
    <?php endwhile; ?>
    
<!-- CONTACT  -->
    <div class="contact">
      <a href="mailto:<?php the_field('contact'); ?>" target="_top">contact@tarahkennedy.com</a>
    </div>

<!-- SOCIAL MEDIA -->
    <div class="social-media">
      <a href="http://www.twitter.com/TarahKennedy"><i class="fa fa-twitter"></i></a>
      <a href="https://ca.linkedin.com/pub/tarah-kennedy/54/744/b03"><i class="fa fa-linkedin"></i></a>
      <a href="https://github.com/tarahkennedy"><i class="fa fa-code-fork"></i></a>
      <a href="http://instagram.com/TarahKennedy"><i class="fa fa-instagram"></i></a>
    </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>