<?php

namespace Kanboard\Plugin\Puff\Custom\Helper;

use Kanboard\Helper\UrlHelper as BaseUrlHelper;

class UrlHelper extends BaseUrlHelper
{
	public function icon($icon, $label, $controller, $action, array $params = [], $csrf = false, $class = '', $title = '', $newTab = false, $anchor = '', $absolute = false)
	{
		$html = '<span class="icon"><i class="fi-' . $icon . '" aria-hidden="true"></i></span><span>' . $label . '</span>';
		return $this->helper->url->link($html, $controller, $action, $params, $csrf, $class, $title, $newTab, $anchor, $absolute);
	}

}
