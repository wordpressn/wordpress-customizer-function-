
  //2nd   logo Change  Function
  $wp_customize->add_setting('main_2nd_logo', array(
    'default' => get_template_directory_uri() . '/themes/cms/assets/images/static/blue_logo.svg',
   
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'main_2nd_logo', array(
    'label' => '2nd Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'main_2nd_logo',
    'section' => 'main_logo_header_area',
  ) ));

}
add_action('customize_register', 'Brainyzat_customizar_register');

// function for slider customizer 
function brainyzat_slider_customizer($wp_customize){

  //1st  slider Change  Function
  $wp_customize->add_section('home_slider_section', array(
    'title' =>__('Home Slider Section', 'concord'),
    'description' => 'TO Change Home Page Slider , Upload Here !'
  ));

  //setting for 1st  slider
  $wp_customize->add_setting('home_slider_img1', array(
    'default' => get_template_directory_uri() . '/assets/image/1.jpg',
   
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'home_slider_img1', array(
    'label' => 'Upload 1st Slider Image Here!',
    'description' => 'Change 2nd Slider Image From here ! ',
    'setting' => 'home_slider_img1',
    'section' => 'home_slider_section',
  ) ));

//  setting for  2nd slider 


$wp_customize->add_setting('home_slider_img2', array(
  'default' => get_template_directory_uri() . '/assets/image/2.jpg',
 
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'home_slider_img2', array(
  'label' => 'Upload 2nd Slider Image Here!',
  'description' => 'Change 2nd Slider Image From here ! ',
  'setting' => 'home_slider_img2',
  'section' => 'home_slider_section',
) ));
//


//  setting for  3rd slider 


$wp_customize->add_setting('home_slider_img3', array(
  'default' => get_template_directory_uri() . '/assets/image/3.jpg',
 
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'home_slider_img3', array(
  'label' => 'Upload 3rd Slider Image Here!',
  'description' => 'Change 3rd Slider Image From here ! ',
  'setting' => 'home_slider_img2',
  'section' => 'home_slider_section',
) ));
//

//  setting for  4th slider 


$wp_customize->add_setting('home_slider_img4', array(
  'default' => get_template_directory_uri() . '/assets/image/4.jpg',
 
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'home_slider_img4', array(
  'label' => 'Upload 4thst Slider Image Here!',
  'description' => 'Change 4th Slider Image From here ! ',
  'setting' => 'home_slider_img4',
  'section' => 'home_slider_section',
) ));
//
