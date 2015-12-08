<?php
/*
Plugin Name: Wp-codecept
Version: 1.1
Description: This plugin shows message on your admin page.
Author: Ippei Sumida
Author URI: http://unplat.info
Plugin URI: http://unplat.info
Text Domain: wp-codecept
Domain Path: /languages
*/


$wpCodecept = new WpCodecept();
$wpCodecept->register();
class WpCodecept
{
	public function register()
	{
		add_action("admin_notices", array($this, "render"));
	}

	public function render()
	{
		echo($this->say());
	}

	public function say()
	{
		return "Hello. This is WpCodecept Plugin.";
	}
}