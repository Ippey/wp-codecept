<?php
/*
Plugin Name: Wp-codecept
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
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