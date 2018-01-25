<?php
			global $wp_customize;

			echo '<section class="our-team" id="team">';

				echo '<div class="container">';

					echo '<div class="section-header">';

						$zerif_ourteam_title = get_theme_mod('zerif_ourteam_title',__('YOUR TEAM','zerif-lite'));
					
						
							echo '<h2 style="color:white" class="dark-text">Preçário</h2>';
						
						$zerif_ourteam_subtitle = get_theme_mod('zerif_ourteam_subtitle',__('Prove that you have real people working for you, with some nice looking profile pictures and links to social media.','zerif-lite'));

						if( !empty($zerif_ourteam_subtitle) ):

							echo '<div class="section-legend">'.wp_kses_post( $zerif_ourteam_subtitle ).'</div>';

						elseif ( isset( $wp_customize ) ):
						
							echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
							
						endif;

					echo '</div>';

					if(is_active_sidebar( 'sidebar-ourteam' )):
						echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
						echo '

						

        				<div class="col-lg-12 col-sm-12 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">

			          	<p style="color:#fff; font-size:22px">Inscrições até <b>25 de Abril de 2017</b></p>
			          	<center><div style="width:40%; height:2px; background-color:#1c71b8; margin-bottom:20px;"></div></center>
			        	<p style="color:#fff; font-size:18px">Estudantes <b>160€*</b></p>
						

						<br><p style="color:#fff; font-size:12px">* A JuniFEUP reserva o direito de cancelar a formação,<br>procedendo à devolução do dinheiro na ocorrência imprevistos que tornem o evento inviável.</p>
        				</div>
						
						
	
						';
						echo '</div> ';
						
					endif;

				echo '</div>';

			echo '</section>';

?>