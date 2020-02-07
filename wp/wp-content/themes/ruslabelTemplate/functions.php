<?php

require get_template_directory() . './inc/theme-settings.php';

require get_template_directory() . './inc/widget-area.php';

require get_template_directory() . './inc/enqueue-script-style.php';

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

