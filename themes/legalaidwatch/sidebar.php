<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar">
		<ul>
			<?php wp_list_pages('title_li=&exclude=52' ); ?>
		</ul>
		
		<div class="pageimage">
			<?php
			/* Bepaal welke afbeelding getoond moet worden */
			$post = get_post();
			
			switch( $post->ID )
			{
				case 3: //homepage
				default:
					$pageimage = "supreme.jpg";
					break;	
				case 5: //wat is legal aid watch
					$pageimage = "2.jpg";
					break;
				case 7: //geef uw claim een tweede kans
					$pageimage = "3.jpg";
					break;
				case 9: //wanneer helpt LAW niet?
					$pageimage = "4.jpg";
					break;
				case 15: //voorbeelden
					$pageimage = "5.jpg";
					break;
				case 17: //gratis beoordeling
					$pageimage = "10.jpg";
					break;
				case 19: //no cure, no pay
					$pageimage = "6.jpg";
					break;
				case 21: //veel gestelde vragen
					$pageimage = "7.jpg";
					break;
				case 23: //publicaties
					$pageimage = "12.jpg";
					break;
				case 25: //contact
					$pageimage = "8.jpg";
					break;
				case 28: //links
					$pageimage = "15.jpg";
					break;
				case 31: //insurance watch
					$pageimage = "14.jpg";
					break;
				case 33: //assurantietussenpersonen
					$pageimage = "9.jpg";
					break;
				case 35: //belangenverenigingen
					$pageimage = "gb.jpg";
					break;
			}
			?>
			<img src="<?= get_bloginfo("template_url"); ?>/pageimages/<?= $pageimage; ?>" alt="" />
		</div>
		

	</div>

