<?php
//about theme info
add_action( 'admin_menu', 'skt_therapist_abouttheme' );
function skt_therapist_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-therapist'), esc_html__('About Theme', 'skt-therapist'), 'edit_theme_options', 'skt_therapist_guide', 'skt_therapist_mostrar_guide');   
} 
//guidline for about theme
function skt_therapist_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-therapist'); ?>
		   </div>
          <p><?php esc_html_e('SKT Therapist is responsive. It can be used for counselor, psychotherapist, mental health professional, clinician, psychologist, advisor, social worker, counselor, analyst, practitioner. This theme is ideal for hospitals, doctors, medical clinic, healthcare, hospital management, nursing home, pediatric clinic, surgery center, wellness center, urgent care, diagnostics, medical supplies and healthcare professionals. Can be used for chiropractor, clinic, doctor, health, injury, massage, physical therapists, yoga experts, gymnastics, fitness experts, chiropractors. Easy to manage and editable. Flexible and scalable as well.','skt-therapist'); ?></p>
          <a href="<?php echo esc_url(SKT_THERAPIST_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_THERAPIST_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-therapist'); ?></a> | 
				<a href="<?php echo esc_url(SKT_THERAPIST_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-therapist'); ?></a> | 
				<a href="<?php echo esc_url(SKT_THERAPIST_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-therapist'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_THERAPIST_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>