<?php
/*
Template Name: Group Page
*/

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

			?>

				<div class="entry-content">
					<div id="entry1">


						<ul class="img-list">
						  <li>
								<a href="http://localhost/allesvdk/art-jan-de-vries/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/art-pic-2.jpeg" width="150" height="200" alt="Art-Jan de Vries" />
						      <span class="text-content"><span>Art-Jan de Vries.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/beppe-costa/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/beppe-costa-small.jpg" alt="Beppe Costa" />
						      <span class="text-content"><span>Beppe Costa.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/boost-producties/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/Scenefoto-1_Marjory-Haringa-small.jpg" alt="Boost Producties" />
						      <span class="text-content"><span>Boost Producties.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/esther-scheldwacht/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/Beeldmerk_HelgaMariaBaumgarten-small.jpg" alt="Esther Scheldwacht" />
						      <span class="text-content"><span>Esther Scheldwacht.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/feikes-huis/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/Feiks-Huis-Popje-hou-je-muil-LR-concept-art-direction-lopezlab-fotograaf-Monica-Ragazzinni-small.jpg" alt="Feikes Huis" />
						      <span class="text-content"><span>Feikes Huis.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/het-nationale-toneel/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/Ondertussen-in-Casablanca-Barrie-Hullegie-small.jpg" alt="Het Nationale Toneel" />
						      <span class="text-content"><span>Het Nationale Toneel.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/ickamsterdam/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/FH-5-small.jpg" alt="ICKamsterdam" />
						      <span class="text-content"><span>ICKamsterdam.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/jakop-ahlbom/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/work_0115_JAKV2-small.jpg" alt="Jakop Ahlbom" />
						      <span class="text-content"><span>Jakop Ahlbom.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/likeminds/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/Voor-mijn-kinderen-website2_1-small.jpg" alt="Likeminds" />
						      <span class="text-content"><span>Likeminds.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/pipslab/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/pic6-small.jpg" alt="PIPS:Lab" />
						      <span class="text-content"><span>PIPS:Lab.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/rutger-kroon/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/Rookmonologen-03-©-Sanne-Peper-small.jpg" alt="Rutger Kroon" />
						      <span class="text-content"><span>Rutger Kroon.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/sadettin-kirmiziyuz/">
						      <img src="http://localhost/allesvdk/wp-content/uploads/2016/10/HuisvanBourgondie_SadettinKirmiziyuz_fotoMoonSaris_2860-small.jpg" alt="Sadettin Kırmızıyüz" />
						      <span class="text-content"><span>Sadettin Kırmızıyüz.</span></span>
						    </a>
						  </li>
							<li>
								<a href="http://localhost/allesvdk/servaes-nelissen/">
									<img src="http://localhost/allesvdk/wp-content/uploads/2016/10/Nut-van-Tantes-flyer-v2-outl-13-small.jpg" alt="Servaes Nelissen" />
									<span class="text-content"><span>Servaes Nelissen.</span></span>
								</a>
							</li>
							<li>
								<a href="http://localhost/allesvdk/the-bad-men-from-bodie/">
									<img src="http://localhost/allesvdk/wp-content/uploads/2016/10/shapeimage_7.jpg" alt="The Bad Men From Bodie" />
									<span class="text-content"><span>The Bad Men From Bodie.</span></span>
								</a>
							</li>
							<li>
								<a href="http://localhost/allesvdk/groepen/wart-kamps/">
									<img src="http://localhost/allesvdk/wp-content/uploads/2016/10/Richard-small2.jpg" alt="Wart Kamps" />
									<span class="text-content"><span>Wart Kamps.</span></span>
								</a>
							</li>
						</ul>


					</div>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
				</div>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?//php get_sidebar(); ?>
<?php get_footer(); ?>
