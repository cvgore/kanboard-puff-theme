<?php

namespace Kanboard\Plugin\Puff\Custom\Helper;

class ModalHelper extends \Kanboard\Helper\ModalHelper
{


	public function mediumIcon($icon, $label, $controller, $action, array $params = [], $class = ''): string
	{
		$html = '<span class="icon"><i class="fi-' . $icon . '"></i></span>';
		$class .= ' js-modal-medium';

		return $this->helper->url->link($html, $controller, $action, $params, false, trim($class, ' '), $label);
	}

	public function medium($icon, $label, $controller, $action, array $params = [], $title = '', $class = ''): string
	{
		$html = '<span class="icon"><i class="fi-' . $icon . '"></i></span><span>' . $label . '</span>';
		$class .= ' js-modal-medium';

		return $this->helper->url->link($html, $controller, $action, $params, false, trim($class, ' '), $title);
	}

}
