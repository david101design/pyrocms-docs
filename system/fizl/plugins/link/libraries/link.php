<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Link Plugin
 *
 * Allows you to generate links
 *
 * @package		Fizl
 * @author		Adam Fairholm (@adamfairholm)
 * @copyright	Copyright (c) 2011-2012, Parse19
 * @license		http://parse19.com/fizl/docs/license.html
 * @link		http://parse19.com/fizl
 */
class Link extends Plugin {

    public function __call($name, $args) {
        if ($name == 'link') {
            return $this->makelink();
        }

        return null;
    }

	/**
	 * Simple anchor link
	 */
	public function makelink()
	{
		return '<a href="'.site_url($this->get_param('uri')).'">'.$this->get_param('title').'</a>';
	}

}