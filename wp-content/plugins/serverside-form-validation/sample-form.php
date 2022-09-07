<?php
/**
 * Plugin Name:     Sample Form
 * Plugin URI:      http://your.site.name.here
 * Description:     A simple custom form plugin
 * Author:          Julian Hansen
 * Author URI:      http://your.site.name.here 
 * Text Domain:     sample-form
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Sample_Form
*/

function showForm($data = [])
{
  include('template/sample-form.php');
}

function processForm($data)
{
  include('template/sample-form-complete.php');
}

function validateForm($data)
{
  $data['errors'] = array();
  if (strlen($data['name']) < 10) {
    $data['errors']['name'] = 'Name is too short';
  }

  return $data;
}

function sampleForm()
{
  $data = isset($_POST['data']) ? $_POST['data'] : false;
  if ($data) {
    $data = validateForm($data);
    if (!empty($data['errors'])) {
      showForm($data);
    }
    else {
      processForm($data);
    }
  }
  else {
    showForm(array('name' => ''));
  }

}
add_shortcode( 'sc_sample_form', 'sampleForm' );