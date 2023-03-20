<?php
namespace ConseilGouz\Component\Automsg\Site\Controller;
\defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Language\Text;

class DisplayController extends BaseController {

    public function display($cachable = false, $urlparams = false) {
        $view = Factory::getApplication()->input->getCmd('view', 'automsg');
        Factory::getApplication()->input->set('view', $view);

        parent::display($cachable, $urlparams);

        return $this;
    }
}
