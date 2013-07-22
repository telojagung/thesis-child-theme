<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class bwd_child_thesis_loop extends thesis_custom_loop {
  	
	public function __construct() {
		// run the parent constructor so we can access the thesis custom loop api
		parent::__construct();
		
		// run the main init
		add_action('init', array($this, 'init'));
                
                // run the widgets init
		add_action('widgets_init', array($this, 'bwd_footer_widgets'));
	}
	
	public function init() {
		// actions and filters that will run on init. you could put other things here if you need.
		$this->actions();
		$this->filters();
	}
        
        public function bwd_footer_widgets() {
		// actions and filters that will run on init. you could put other things here if you need.
		bwd_register_sidebars();
	}
	
	public function actions() {
		// add and remove actions here
		
		// this will force thesis to generate CSS when the user switches to the child
		add_action('after_switch_theme', 'thesis_generate_css');
                
                remove_action('thesis_hook_before_header', 'thesis_nav_menu');
                remove_action('thesis_hook_header', 'thesis_default_header');
                remove_action('thesis_hook_footer', 'thesis_attribution');
                
                add_action('thesis_hook_header', 'bwd_add_header_html');
                add_action('thesis_hook_footer', 'bwd_footer_layout');
	}
	public function filters() {
		// add and remove filters here
		
		/* 
		*	Filter out the standard thesis style.css. 
		*	Run this with a priority of 11 if you want to make sure the gravity forms css gets added.
		*/
		add_filter('thesis_doctype', 'html5_doctype');
  		add_filter('thesis_head_profile', 'html5_profile_removal');
	}
	

}

new bwd_child_thesis_loop;
