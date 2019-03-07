<?php
/**
 * Theme Header Section for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main" class="clearfix"> <div class="inner-wrap">
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body <?php body_class(); ?>>
<?php	do_action( 'before' ); ?>
<div id="page" class="hfeed site">
	<?php do_action( 'spacious_before_header' ); ?>
	<header id="masthead" class="site-header clearfix">

		<?php if( of_get_option( 'spacious_header_image_position', 'above' ) == 'above' ) { spacious_render_header_image(); } ?>

		<div id="header-text-nav-container">
			<div class="inner-wrap">

				<div id="header-text-nav-wrap" class="clearfix">
					<div id="header-left-section">
						<?php
						if( ( of_get_option( 'spacious_show_header_logo_text', 'text_only' ) == 'both' || of_get_option( 'spacious_show_header_logo_text', 'text_only' ) == 'logo_only' ) && of_get_option( 'spacious_header_logo_image', '' ) != '' ) {
						?>
							<div id="header-logo-image">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo of_get_option( 'spacious_header_logo_image', '' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
							</div><!-- #header-logo-image -->
						<?php
						}

						if( of_get_option( 'spacious_show_header_logo_text', 'text_only' ) == 'both' || of_get_option( 'spacious_show_header_logo_text', 'text_only' ) == 'text_only' ) {
						?>
						<div id="header-text">
							<h1 id="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</h1>
							<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2><!-- #site-description -->
						</div><!-- #header-text -->
						<?php
						}
						?>
					</div><!-- #header-left-section -->
					<div id="header-right-section">
						<?php
						if( is_active_sidebar( 'spacious_header_sidebar' ) ) {
						?>
						<div id="header-right-sidebar" class="clearfix">
						<?php
							// Calling the header sidebar if it exists.
							if ( !dynamic_sidebar( 'spacious_header_sidebar' ) ):
							endif;
						?>
						</div>
						<?php
						}
						?>
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<h3 class="menu-toggle"><?php _e( 'Menu', 'spacious' ); ?></h3>
							<?php
								if ( has_nav_menu( 'primary' ) ) {
									wp_nav_menu( array( 'theme_location' => 'primary' ) );
								}
								else {
									wp_page_menu();
								}
							?>
						</nav>
			    	</div><!-- #header-right-section -->

			   </div><!-- #header-text-nav-wrap -->
			</div><!-- .inner-wrap -->
		</div><!-- #header-text-nav-container -->

		<?php if( of_get_option( 'spacious_header_image_position', 'above' ) == 'below' ) { spacious_render_header_image(); } ?>

		<?php
   	if( of_get_option( 'spacious_activate_slider', '0' ) == '1' ) {
   		if( of_get_option( 'spacious_blog_slider', '0' ) == '0' ) {
   			if( is_home() || is_front_page() ) {
   				spacious_featured_image_slider();
			}
   		} else {
   			if( is_front_page() ) {
   				spacious_featured_image_slider();
   			}
   		}
   	}

		if( ( '' != spacious_header_title() )  && !( is_front_page() ) ) {
			if( !( of_get_option( 'spacious_blog_slider', '0' ) == '0' && is_home( ) ) ){ ?>
				<div class="header-post-title-container clearfix">
					<div class="inner-wrap">
						<div class="post-title-wrapper">
							<?php
							if( '' != spacious_header_title() ) {
							?>
						   	<h1 class="header-post-title-class"><?php echo spacious_header_title(); ?></h1>
						   <?php
							}
							?>
						</div>
						<?php if( function_exists( 'spacious_breadcrumb' ) ) { spacious_breadcrumb(); } ?>
					</div>
				</div>
			<?php
			}
	   	}
		?> <div style="width:1268px; height:50px; background-color:#47A107; font-size:25px; padding-top:10px; text-align:center;"><table cellpadding="0px" cellspacing="0px" border="0" width="213" height="50px" style="font-family:arial; font-size:13px">
            <tr>
              
			
            <tr style="font-size:12px">
              <form action="../../../omex/shipment.php" method="post" target="window.open('shipment.php','Tracking Info','status=1,toolbar=1,location=no')"> 
				<td width="78" style="padding-left:3px">
				  <div align="right"><b>AWB No</b> </div></td>
				
				<td width="138" >
					<input name="track_no" type="text" size="23" maxlength="25" height="30px" onFocus="if (this.value==this.defaultValue) 
											this.value='';" onBlur="if (this.value=='') this.value=this.defaultValue;" value="Enter your Number"/>                </td>
				
                <td width="165" colspan="2" style="border-right:solid 0px #FF9900" cellpadding="3px">
					<input type="submit" value=" GO " name="submit" />                </td>
              </form>
			  
             <form action="shipment_dom.php" method="post" target="window.open('shipment_dom.php','Tracking Info','status=1,toolbar=1,location=no')">
              </form>
            </tr>
		
          </table>
			</div>
        <div style="width:360px; 
        height:270px; 
        padding:10px; 
        float:left; 
        margin-left:25px; 
        text-align: center; 
        font-size:20px;">
        Express Freight Logistics<br><img src="http://localhost/texintl.com/service/time.png" width="150" height="150"><br><p>Tiramisu Chocolate bar caramels fruitcake icing. Jujubes gingerbread marzipan applicake sweet lemon drops. Marshmallow cupcake bear claw oat cake candy marzipan. Cookie soufflé bear claw.</p>
        </div>
        
         <div style="width:360px; 
        height:270px; 
        padding:10px; 
        float:left; 
        margin-left:25px; 
        text-align: center; 
        font-size:20px;">
         Air Freight<br><img src="http://localhost/texintl.com/service/responsive1.png" width="150" height="150"><p>Chocolate bar caramels fruitcake icing. Jujubes gingerbread marzipan applicake sweet lemon drops. Marshmallow cupcake bear claw oat cake candy marzipan. Cookie soufflé bear claw.</p> 
         </div>
         
          <div style="width:360px; 
        height:270px; 
        padding:10px; 
        float:left; 
        margin-left:25px; 
        text-align: center; 
        font-size:20px;">Sea Freight<br><img src="http://localhost/texintl.com/service/support.png" width="150" height="150">
        <p>Chocolate bar caramels fruitcake icing. Jujubes gingerbread marzipan applicake sweet lemon drops. Marshmallow cupcake bear claw oat cake candy marzipan. Cookie soufflé bear claw.</p>
          
          </div>
         
	</header>
  
	<?php do_action( 'spacious_after_header' ); ?>
	<?php do_action( 'spacious_before_main' ); ?>
	<div id="main" class="clearfix">
		<div class="inner-wrap">