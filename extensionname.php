<?php
/**
 * Custom quickicon template based on the official joomlaupdate quickicon plugin.
 * Replace all instances of 'extensionname' with a unique name, preserving case.
 */

defined('_JEXEC') or die;

class plgQuickiconExtensionname extends JPlugin
{
	/**
	 * Constructor
	 *
	 * @param       object  $subject The object to observe
	 * @param       array   $config  An array that holds the plugin configuration
	 *
	 * @since       2.5
	 */
	public function __construct(& $subject, $config)
	{
		parent::__construct($subject, $config);
		$this->loadLanguage();
	}

	/**
	 * This method is called when the Quick Icons module is constructing its set
	 * of icons. You can return an array which defines a single icon and it will
	 * be rendered right after the stock Quick Icons.
	 *
	 * @param  $context  The calling context
	 *
	 * @return array A list of icon definition associative arrays, consisting of the
	 *				 keys link, image, text and access.
	 *
	 * @since       2.5
	 */
	public function onGetIcons($context)
	{
		if ($context != $this->params->get('context', 'mod_quickicon') || !JFactory::getUser()->authorise('core.manage', 'com_extensionname')) {
			return;
		}

		return array(array(
			'link' => 'index.php?option=com_extensionname',
			// Package a 48x48 icon up with the plugin
			'image' => JUri::root().'/plugins/quickicon/extensionname/icon.png',
			'text' => JText::_('PLG_QUICKICON_EXTENSIONNAME_TEXT'),
			'id' => 'plg_quickicon_extensionname'
		));
	}
}
