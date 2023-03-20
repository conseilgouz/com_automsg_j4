<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

/** @var Joomla\Component\Users\Site\View\Profile\HtmlView $this */

HTMLHelper::_('bootstrap.tooltip', '.hasTooltip');

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $this->document->getWebAssetManager();
$wa->useScript('keepalive')
    ->useScript('form.validate');

?>
<legend><?php echo $params['legend']; ?></legend>
<div class="automsg_cancel row">
    <div class="col-md-2"></div>
	<div class="automsg_cancel col-md-5" style="margin-top:1em" >
	<?php echo Text::_('COM_AUTOMSG_CANCEL'); ?>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-4" style="margin-top:1em"><a href="index.php"  rel="noopener noreferrer"><button><?php echo Text::_('COM_AUTOMSG_HOME');?></button></a></div>
</div>
