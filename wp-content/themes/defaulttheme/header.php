<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
    ================================================== -->
    <?php wp_head(); ?>

   <!-- Script
   ================================================== -->
  <script src="js/modernizr.js"></script>

   <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="favicon.ico" > 

</head>

<body>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
              <?php bloginfo( 'name' ) ?>
               <a href="index.html"><img alt="" src="images/logo.png"></a>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
              <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
                <?php wp_nav_menu( array(
                  'theme_location'  => 'top',
                  'menu'            => 'top_menu',
                  'menu_class'      => 'nav',
                  'menu_id'         => 'nav',
                  'echo'            => true
                ) ); ?>

            </nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->
    <!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
     <div id="intro-slider" class="flexslider">

       <ul class="slides">

         <!-- Slide -->
         <li>
           <div class="row">
             <div class="twelve columns">
               <div class="slider-text">
                 <h1>Free amazing site template<span>.</span></h1>
                 <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit.</p>
               </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-01.png" alt="" />
                     </div>
             </div>
           </div>
         </li>

            <!-- Slide -->
         <li>
           <div class="row">
             <div class="twelve columns">
               <div class="slider-text">
                 <h1>Responsive + HTML5 + CSS3<span>.</span></h1>
                 <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti eos et accusamus. amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis.
                        Aenean condimentum, lacus sit amet luctus.</p>
               </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-02.png" alt="" />
                     </div>
             </div>
           </div>
         </li>

       </ul>

     </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->

   