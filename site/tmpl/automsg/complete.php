<?php

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
	<?php echo Text::_('COM_AUTOMSG_DONE'); ?>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-4" style="margin-top:1em"><a href="index.php"  rel="noopener noreferrer"><button><?php echo Text::_('COM_AUTOMSG_HOME');?></button></a></div>
</div>
