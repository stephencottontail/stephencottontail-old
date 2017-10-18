<?php

namespace App;

/**
 * TinyMCE
 */
if (!class_exists('TinyMCE')) {
    class TinyMCE
    {
        /**
         * Constructor
         */
        public function __construct()
        {
            if (is_admin()) {
                add_action('init', [$this, 'init']);
            }
        }

        /**
         * Initialize the TinyMCE object
         */
        public function init()
        {
            // Check if user has proper permissions & has rich editing enabled.
            if (!current_user_can('edit_posts') && !current_user_can('edit_pages') || get_user_option('rich_editing') !== 'true') {
                return;
            }

            // Setup the filters
            add_filter('mce_external_plugins', [$this, 'plugins']);
        }

        /**
         * Add plugins to the TinyMCE / Visual Editor
         *
         * @param  array $plugin_array
         * @return array
         */
        public function plugins($plugin_array)
        {
            $plugin_array['app'] = \App\asset_path('scripts/tinymce.js');
            return $plugin_array;
        }
    }
}

new TinyMCE();
