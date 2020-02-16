<?php

namespace Kanboard\Plugin\Puff\Custom\Helper;

use Kanboard\Helper\AppHelper as BaseAppHelper;

class AppHelper extends BaseAppHelper
{
	public function tooltipHTML($htmlText, $icon = 'info'): string
	{
		return '<span class="tooltip icon"><i class="fi-' . $icon . '"></i><script type="text/template"><div class="markdown">' . $htmlText . '</div></script></span>';
	}

	public function checkMenuSelection($controller, $action = '', $plugin = ''): string
	{
		$result = strtolower($this->getRouterController()) === strtolower($controller);

		if ($result && $action !== '') {
			$result = strtolower($this->getRouterAction()) === strtolower($action);
		}

		if ($result && $plugin !== '') {
			$result = strtolower($this->getPluginName()) === strtolower($plugin);
		}

		return $result ? 'class="is-active"' : '';
	}

	public function checkMenuSelectionClass($controller, $action = '', $plugin = ''): string
	{
		return $this->checkMenuSelection($controller, $action, $plugin) ? 'is-active' : '';
	}
}
