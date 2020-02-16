<?php

namespace Kanboard\Plugin\Puff\Custom\Helper;

use Kanboard\Helper\AppHelper as BaseAppHelper;

class AppHelper extends BaseAppHelper
{
	public function tooltipHTML($htmlText, $icon = 'info')
	{
		return '<span class="tooltip"><i class="fi-'.$icon.'"></i><script type="text/template"><div class="markdown">'.$htmlText.'</div></script></span>';
	}
}
