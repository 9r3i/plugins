<?php
/* Plugin for Dixie CMS
 * Name     : Custom Menu
 * Creator  : Luthfie
 * Email    : Luthfie@y7mail.com
 * Filename : header.php
 */


require_once('extension/functions.php');

/* Plugin registry into all templates */
plugin_registry('custom_menu_print_data_header',array('post','index','search','404','type'),11,'header');