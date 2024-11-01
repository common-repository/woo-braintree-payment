<?php

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Braintree
 * @subpackage Woo_Braintree/includes
 * @author     palmoduledev <palmoduledev@gmail.com>
 */
class Woo_Braintree_i18n {

    /**
     * @since    1.0.0
     */
    public function load_plugin_textdomain() {

        load_plugin_textdomain(
                'woo-braintree', false, dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }

}
