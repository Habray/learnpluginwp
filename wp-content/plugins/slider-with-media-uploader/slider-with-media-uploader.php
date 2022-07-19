<?php
 
/*
 
Plugin Name: Slider With Media Uploader
Description: Add Image in slider with Media Uploader with shortcode implementation. Use shortcode [slider].
Version: 1.0
Author: Parbat
 
 
*/
 
// Define a condition to kill the plugin if it is accessed outside of WordPress
if (!defined('ABSPATH')) {
  die;
}
 
class SliderWithMedaiUploader
{
  function __construct()
  {
    // setting page setup
    add_action('admin_menu', array($this, 'pluginAdminPage'));
 
    // initiliaze admin setting page
    add_action('admin_init', array($this, 'settings'));
 
    // for setting link
    add_filter('plugin_action_links_' . plugin_basename(__FILE__), array($this, 'pluginSettingLink'));
 
    // register custom javascript
    add_action('admin_enqueue_scripts', array($this, 'register_admin_script'));
 
    // register bootstrap style and script
    add_action('wp_enqueue_scripts', array($this, 'slider_bs_scripts'));
 
    // implement shortcode
    add_shortcode('slider', array($this, 'createHTML'));
  }
 
  // Bootstrap Scripts
  function slider_bs_scripts()
  {
    wp_enqueue_style('bs_style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_script('bs_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js');
  }
 
  // createHTML function for HTML code
  function createHTML()
  {
    $html = 
  '<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="' . get_option('wcp_image1') . '" class="d-block w-100" alt="img1">
      <div class="carousel-caption d-none d-md-block">
        <h5>' . esc_html(get_option('wcp_caption1', 'First slide label')) . '</h5>
        <p>' . esc_html(get_option('wcp_subcaption1', 'First slide label')) . '</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="' . get_option('wcp_image2') . '" class="d-block w-100" alt="img2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="' . get_option('wcp_image3') . '" class="d-block w-100" alt="img3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

    <div class="carousel-item">
    <img src="' . get_option('wcp_image4') . '" class="d-block w-100" alt="img4">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>

    <div class="carousel-item">
    <img src="' . get_option('wcp_image5') . '" class="d-block w-100" alt="img5">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>';
    return $html;
  }

  // add settings field and register field
  function addSettings($cpt_settings){
    add_settings_field('wcp_image1', "Image 1", array($this, 'imageHTML'), 'img-slider-settings-page', 'wcp_first_section', array('imgName' => 'wcp_image1', 'previewimgClass' => 'img1'));
    register_setting('sliderplugin', 'wcp_image1', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'https://shankerdevcampus.edu.np/assets/site/images/no-image.jpg'));    
  }
 
  // admin setting page
  function settings()
  {
    // section
    add_settings_section('wcp_first_section', null, null, 'img-slider-settings-page');
 
    // For Image 1
    add_settings_field('wcp_image1', "Image 1", array($this, 'imageHTML'), 'img-slider-settings-page', 'wcp_first_section', array('imgName' => 'wcp_image1', 'previewimgClass' => 'img1'));
    register_setting('sliderplugin', 'wcp_image1', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'https://shankerdevcampus.edu.np/assets/site/images/no-image.jpg'));
 
    // For Image 2
    add_settings_field('wcp_image2', "Image 2", array($this, 'imageHTML'), 'img-slider-settings-page', 'wcp_first_section', array('imgName' => 'wcp_image2', 'previewimgClass' => 'img2'));
    register_setting('sliderplugin', 'wcp_image2', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'https://shankerdevcampus.edu.np/assets/site/images/no-image.jpg'));
 
    // For Image 3
    add_settings_field('wcp_image3', "Image 3", array($this, 'imageHTML'), 'img-slider-settings-page', 'wcp_first_section', array('imgName' => 'wcp_image3', 'previewimgClass' => 'img3'));
    register_setting('sliderplugin', 'wcp_image3', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'https://shankerdevcampus.edu.np/assets/site/images/no-image.jpg'));
 
    // For Image 4
    add_settings_field('wcp_image4', "Image 4", array($this, 'imageHTML'), 'img-slider-settings-page', 'wcp_first_section', array('imgName' => 'wcp_image4', 'previewimgClass' => 'img4'));
    register_setting('sliderplugin', 'wcp_image4', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'https://shankerdevcampus.edu.np/assets/site/images/no-image.jpg'));
 
    // For Image 5
    add_settings_field('wcp_image5', "Image 5", array($this, 'imageHTML'), 'img-slider-settings-page', 'wcp_first_section', array('imgName' => 'wcp_image5', 'previewimgClass' => 'img5'));
    register_setting('sliderplugin', 'wcp_image5', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'https://shankerdevcampus.edu.np/assets/site/images/no-image.jpg'));

    // Caption Heading 1
    add_settings_field('wcp_caption1', 'Image 1 Caption Heading', array($this, 'captionHTML'), 'img-slider-settings-page', 'wcp_first_section', array('caption' => 'wcp_caption1'));
    register_setting('sliderplugin', 'wcp_caption1', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'Your Caption Here'));

    // Caption Sub Heading 1
    add_settings_field('wcp_subcaption1', 'Image 1 Caption Sub Heading', array($this, 'captionHTML'), 'img-slider-settings-page', 'wcp_first_section', array('caption' => 'wcp_subcaption1'));
    register_setting('sliderplugin', 'wcp_subcaption1', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'Your Sub Caption Here'));
  }

  // Caption HTML
  function captionHTML($arg){ ?>
    <input type="text" name="<?php echo $arg['caption'] ?>" value="<?php echo esc_attr(get_option($arg['caption'])) ?>">
  <?php }
 
  // Image selection HTML
  function imageHTML($arg)
  { ?>
    <?php // echo $arg['previewimgClass']
    ?>
    <img class="<?php echo $arg['previewimgClass'] ?>" src="<?php echo get_option($arg['imgName']) ?>" width="100" height="100">
    <input type="hidden" class="image-upload" size="100" name="<?php echo $arg['imgName'] ?>" value="<?php echo esc_attr(get_option($arg['imgName'])) ?>">
    <br>
    <input type="radio" id="display1" name="display" value="1">
    <label for="display1">yes</label>
    <input type="radio" id="display2" name="display" value="2">
    <label for="display2">no</label><br>
    <button type="button" value="" class="<?php echo $arg['previewimgClass'] ?>"> Select Image </button>
 
  <?php }
 
  // custom javascript
  function register_admin_script()
  {
    wp_enqueue_script('media-upload');
    wp_enqueue_media();
    wp_enqueue_script('wp_img_upload', plugin_dir_url(__FILE__) . '/image-upload.js', array('jquery'));
  }
 
  // Setting page Setup
  function pluginAdminPage()
  {
    add_menu_page('Slider With Media Uploader', 'Slider MU', 'manage_options', 'slider_mu', array($this, 'pluginAdminPageHTML'));
  }
 
  // Plugin Admin Page HTML
  function pluginAdminPageHTML()
  { ?>
    <div class="wrap">
      <h1>Slider Plugin Setting Page</h1>
 
      <form action="options.php" method="post">
        <?php
        settings_fields('sliderplugin');
 
        do_settings_sections('img-slider-settings-page');
 
        submit_button();
        ?>
      </form>
    </div>
<?php }
 
 
  // Plugin Setting Link
  function pluginSettingLink($links)
  {
    $settings_link = '<a href = "admin.php?page=slider_mu">Setting</a>';
    array_push($links, $settings_link);
    return $links;
  }
}
 
if (class_exists('SliderWithMedaiUploader')) {
  $sliderWithMedaiUploader = new SliderWithMedaiUploader();
}