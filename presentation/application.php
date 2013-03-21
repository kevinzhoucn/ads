<?php
// Reference Smarty library
require_once SMARTY_DIR . 'Smarty.class.php';

/* Class that extends Smarty, used to process and display Smarty
   files */
class Application extends Smarty
{
  // Class constructor
  public function __construct()
  {
    // Call Smarty's constructor
    parent::__construct();

	// Mute expected Error in Smarty
    $this->error_reporting = E_ALL & ~E_NOTICE;
    $this->muteExpectedErrors();    
	
    // Change the default template directories
    $this->template_dir = TEMPLATE_DIR;
    $this->compile_dir = COMPILE_DIR;
    $this->config_dir = CONFIG_DIR;
	$this->plugins_dir = array( SMARTY_DIR . 'plugins', PRESENTATION_DIR . 'smarty_plugins');
    //$this->plugins_dir[0] = SMARTY_DIR . 'plugins';
    //$this->plugins_dir[1] = PRESENTATION_DIR . 'smarty_plugins';
  }
}
?>
