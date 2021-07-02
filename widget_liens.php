<?php
/*
Plugin Name: Widget liens
Plugin URI: https://gitlab.com/bibibricodeur
Description:
Version: 00.1
Author: bibibricodeur
Author URI: https://thiweb.fr
License: WTFPL
*/

// https://codex.wordpress.org/Widgets_API

class Widget_Liens extends WP_Widget {

	/**
	 * Configure le nom des widgets, etc.
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'widget_liens',
			'description' => 'Afficher un liste de lien a partir d\'un fichier json',
		);
		parent::__construct( 'widget_liens', 'Widget Liens', $widget_ops );
	}

	/**
	 * Affiche le contenu du widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// affiche le contenu du widget
		echo $args['before_widget'];
		
		//if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', 'Liens externes' ) . $args['after_title'];
		//}
		//echo esc_html__( 'Hello, Widget_Liens!', 'text_domain' );
		?>
			<ul style="list-style: none; padding-left: 1.2em;">
				<div id="liens"></div>
			</ul>
        <?php
		
		echo $args['after_widget'];
	}

	/**
	 * Affiche le formulaire d'options sur admin
	 *
	 * @param array $instance The widget options
	 */
	//public function form( $instance ) {
		// affiche le formulaire d'options sur admin
	//}

	/**
	 * Traitement des options du widget lors de l'enregistrement
	 *
	 * @param array $new_instance Les nouvelles options
	 * @param array $old_instance Les options précédentes
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// traite les options du widget à enregistrer
	}
}

// Cet exemple de widget peut ensuite être enregistré dans le hook 'widgets_init':

// register Widget_Liens widget
function register_widget_liens() {
    register_widget( 'Widget_Liens' );
    wp_enqueue_script('widget_liens', plugin_dir_url(__FILE__) . 'widget_liens.js');
}
add_action( 'widgets_init', 'register_widget_liens' );

/// Fin
