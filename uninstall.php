<?php
/* Uninstall File IT Popup */

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
 
$itpopup_option_name = 'itpopup_option_name';
$itpopup_option_body = 'itpopup_option_body';

/* Deleting Options */
delete_option($itpopup_option_name);
delete_option($itpopup_option_body);

?>