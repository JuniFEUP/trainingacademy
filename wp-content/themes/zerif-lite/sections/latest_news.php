<?php 

	global $wp_customize;

	$zerif_total_posts = get_option('posts_per_page'); /* number of latest posts to show */
	
	if( !empty($zerif_total_posts) && ($zerif_total_posts > 0) ):
	
		echo '<section class="latest-news" id="latestnews">';
		
			echo '<div class="container">';

				/* SECTION HEADER */
				
				echo '<div class="section-header">';

					$zerif_latestnews_title = get_theme_mod('zerif_latestnews_title');

					/* title */
					if( !empty($zerif_latestnews_title) ):
					
						echo '<h2 class="dark-text">' . wp_kses_post( $zerif_latestnews_title ) . '</h2>';
						
					else:
					
						echo '<h2 class="dark-text">' . __('Latest news','zerif-lite') . '</h2>';
						
					endif;

					/* subtitle */
					$zerif_latestnews_subtitle = get_theme_mod('zerif_latestnews_subtitle');

					if( !empty($zerif_latestnews_subtitle) ):

						echo '<div class="dark-text section-legend">'.wp_kses_post( $zerif_latestnews_subtitle ).'</div>';

					elseif ( isset( $wp_customize ) ):
					
						echo '<div class="dark-text section-legend zerif_hidden_if_not_customizer"></div>';
						
					endif;
				
				echo '</div><!-- END .section-header -->';

				echo '<div class="clear"></div>';
				
				echo '<div class="col-lg-6 col-sm-6 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">

			        	<img src="http://trainingacademy.junifeup.pt/wp-content/uploads/2016/05/FEUP.jpg"></img>
        				</div>

        				<div class="col-lg-6 col-sm-6 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">

			          	<p style="text-align:left"><br><b style="font-size:20px;">Faculdade de Engenharia da Universidade do Porto</b></br>
            			<br>Rua Dr. Roberto Frias,<br>4200-465 Porto</br>
            			<br><b style="font-size:22px">29 e 30 de Abril das 9:30 às 18:30</b></br></p>	

        				</div>';

			echo '</div><!-- .container -->';
		echo '</section>';

endif; ?>