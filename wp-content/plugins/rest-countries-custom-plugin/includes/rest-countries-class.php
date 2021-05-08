<?php 

/**
 * Adds Rest_Countries widget.
 */
class Rest_Countries_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'restcountries_widget', // Base ID
			esc_html__( 'Rest Countries', 'rc_domain' ), // Name
			array( 'description' => esc_html__( 'Widget to display country informations', 'rc_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget']; //display whatever you want before widget ex(<div>, etc)
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        
        //Widget Content Output
        echo '    <div id="main-container">
        <div id="flag-container">
          <img src="" alt="">
        </div>
        <div id="info-container">
          <select id="countries"></select>
          <p>Top Level Domain: <span id="topdomain"></span></p>
          <p>Alpha 2 Code: <span id="alpha2"></span></p>
          <p>Alpha 3 Code: <span id="alpha3"></span></p>
          <p>Calling Code: <span id="dialing-code"></span></p>
          <p>Timezone: <span id="timezone"></span></p>
          <p>Currencies: <span id="currencies"></span></p>
          <p>Region: <span id="region"></span></p>
          <p>Subregion: <span id="subregion"></span></p>
        </div>
      </div>';
		// echo esc_html__( 'Hello, World!', 'rc_domain' );
		echo $args['after_widget'];  //display whatever you want after widget ex(</div>, etc)
	}



} // class Foo_Widget

