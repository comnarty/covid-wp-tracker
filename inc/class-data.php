<?php
class Covid_Wp_Tracker_Data {
	protected $loader;

	protected $plugin_name;

	protected $version;

	public function __construct() {
		if ( defined( 'Covid_Wp_Tracker_Data_VERSION' ) ) {
			$this->version = Covid_Wp_Tracker_Data_VERSION;
		} else {
			$this->version = '1.0';
		}
		$this->plugin_name = 'covid-wp-tracker';

		$this->load_dependencies();
		$this->define_public_hooks();

	}
	private function load_dependencies() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'inc/class-loader.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'pub/class-public.php';

		$this->loader = new Covid_Wp_Tracker_Data_Loader();

	}
	private function define_public_hooks() {

		$plugin_public = new Covid_Wp_Tracker_Data_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}
	public function run() {
		$this->loader->run();
	}
	public function get_plugin_name() {
		return $this->plugin_name;
	}
	public function get_loader() {
		return $this->loader;
	}
	public function get_version() {
		return $this->version;
	}
}


function covid_wp_function($atts, $content=null, $shortcodename =""){
$return = '<div id="covidwp">
<div class="title center">'.__('احصائيات عالمية','covid-wp-tracker').'</div>
<div class="third_raw center"><h5>'.__('الأصابات  ','covid-wp-tracker').'</h5><h3 id="covid19-total-confirm"><i class="covid-wp-loading1"></i></h3></div>
<div class="third_raw center"><h5>'.__('حالات الوفاة','covid-wp-tracker').'</h5><h3 id="covid19-total-dead"><i class="covid-wp-loading1"></i></h3></div>
<div class="third_raw center"><h5>'.__('متعافين','covid-wp-tracker').'</h5><h3 id="covid19-total-recoverd"><i class="covid-wp-loading1"></i></h3></div>
<div class="title center">'.__('إحصائيات السودان  ','covid-wp-tracker').'<span id="cov_country_name"></div>
<div class="third_raw center"><h5>'.__('الأصابات  ','covid-wp-tracker').'</h5><h3 id="covid19-sudan-confirm"><i class="covid-wp-loading2"></i></h3></div>
<div class="third_raw center"><h5>'.__('حالات الوفاة','covid-wp-tracker').'</h5><h3 id="covid19-sudan-dead"><i class="covid-wp-loading2"></i></h3></div>
<div class="third_raw center"><h5>'.__('متعافين','covid-wp-tracker').'</h5><h3 id="covid19-sudan-recoverd"><i class="covid-wp-loading2"></i></h3></div>
</div>';
return $return;
}
add_shortcode("covid", "covid_wp_function");


