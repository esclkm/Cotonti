<?php
/**
 * English Language File for Cleaner Plugin
 *
 * @package cleaner
 * @version 0.7.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_logprune'] = array('Delete log entries older than', 'days (0 - disable)');
$L['cfg_pmnotarchived'] = array('Delete not archived private messages older than', 'days (0 - disable)');
$L['cfg_pmnotread'] = array('Delete unread private messages older than', 'days (0 - disable)');
$L['cfg_pmold'] = array('Delete <strong>ALL</strong> private messages older than', 'days (0 - disable)');
$L['cfg_refprune'] = array('Delete referers older than', 'days (0 - disable)');
$L['cfg_userprune'] = array('Delete inactive user accounts older than', 'days (0 - disable)');

$L['info_desc'] = 'Periodically cleans logs, private messages, referers and inative users';

?>