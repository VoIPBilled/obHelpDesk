<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
 
// import Joomla table library
jimport('joomla.database.table');
 
/**
 * Replytemplate Table class
 */
class obHelpDeskTableReplytemplate extends JTable
{
	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function __construct(&$db) 
	{
		parent::__construct('#__obhelpdesk3_replytemplates', 'id', $db);
	}
}
