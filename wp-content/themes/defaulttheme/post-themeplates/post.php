<div id="primary" class="eight columns">
           
                    
            <article class="post">
                <div class="entry-header cf">

                    <h1><?php the_title(); ?></h1>

                    <p class="post-meta">

                        <time class="date" datetime="2014-01-14T11:24"><?php the_time( 'F jS, Y' ) ?></time>
                         /
                        <span class="categories">
                            <?php the_tags(  '', '/ ' ) ?>
                        </span>

                    </p>

                </div>

               <div class="post-thumb">
                  <?php the_post_thumbnail( 'post-thumb') ?>
               </div>

               <div class="post-content">

                  <?php the_content(); ?>

               </div>

            </article> <!-- post end -->
          
         </div> <!-- Primary End-->