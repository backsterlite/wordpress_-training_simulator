         <div id="secondary" class="four columns end">

            <aside id="sidebar">
            	<?php
				if ( function_exists('dynamic_sidebar') )
					dynamic_sidebar('First-Sidebar');
				?>

           
				
            </aside>
             <a href="<?php do_action('my_dev'); ?>"><?php do_action('my_dev'); ?></a>
         </div> <!-- Secondary End-->