<section class="about-us" id="aboutus">
	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			<!-- SECTION TITLE -->

			<?php 
			
			global $wp_customize;
			
			$zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('About','zerif-lite'));
			
			echo '<h2 style="color:white" class="dark-text">Programa</h2>';

						if( !empty($zerif_ourteam_subtitle) ):

							echo '<div class="section-legend">'.wp_kses_post( $zerif_ourteam_subtitle ).'</div>';

						elseif ( isset( $wp_customize ) ):
						
							echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
							
						endif;

					echo '</div>';

					if(is_active_sidebar( 'sidebar-ourteam' )):
						echo '<div class="row" data-scrollreveal="enter left after 0s over 0.1s">';
						echo '

						<div class="col-lg-6 col-sm-6 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">

						<ul id="lista">
							<li>O Princípio da Pirâmide - As bases para o pensamento e comunicação estruturada</li>
							<li>Comportamento profissional e ético - O que significa ser um trusted advisor</li>
							<li>Definição do problema - Situação-Complicação-Pergunta chave. Análise SCQ</li>
							<li>Abordagem - Análise de problemas e plano de trabalho</li>
						</ul><br></br><br>
        				</div>

        				<div class="col-lg-6 col-sm-6 focus-box" data-scrollreveal="enter left after 0.15s over 1s" data-sr-init="true" data-sr-complete="true">

			          	<ul id="lista">
							<li>Compilação e análise de dados - Pesquisa primária e secundária</li>
							<li>Apresentação de dados e recomendações - Como construir apresentações interessantes</li>
							<li>Exame de certificação</li>
						</ul>
        				</div>';
						echo '</div> ';
						
					endif;

				echo '</div>';

			?>
		</div><!-- / END SECTION HEADER -->

</div> <!-- / END CONTAINER -->

</section> <!-- END ABOUT US SECTION -->