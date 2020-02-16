<?php

namespace Kanboard\Plugin\Puff;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\Puff\Custom\Helper\AppHelper as CustomAppHelper;
use Kanboard\Plugin\Puff\Custom\Helper\ModalHelper as CustomModalHelper;
use Kanboard\Plugin\Puff\Custom\Helper\UrlHelper as CustomUrlHelper;

/**
 * Puff plugin
 *1
 * @package Kanboard\Plugin\Puff
 *
 * @author cvgore
 * @license MIT
 */
class Plugin extends Base
{
	/**
	 * @inheritDoc
	 */
	public function initialize(): void
	{
//		return;
		$this->container['helper']->register('modal', CustomModalHelper::class);
		$this->container['helper']->register('url', CustomUrlHelper::class);
		$this->container['helper']->register('app', CustomAppHelper::class);

		$this->template->setTemplateOverride('layout', 'puff:layout/layout');
		$this->template->setTemplateOverride('header', 'puff:layout/header');
		$this->template->setTemplateOverride('header/title', 'puff:header/title');
		$this->template->setTemplateOverride('header/user_notifications', 'puff:header/user_notifications');
		$this->template->setTemplateOverride('header/creation_dropdown', 'puff:header/creation_dropdown');
		$this->template->setTemplateOverride('header/user_dropdown', 'puff:header/user_dropdown');
		$this->template->setTemplateOverride('dashboard/layout', 'puff:dashboard/layout');
		$this->template->setTemplateOverride('dashboard/overview', 'puff:dashboard/overview');
		$this->template->setTemplateOverride('app/filters_helper', 'puff:app/filters_helper');
		$this->template->setTemplateOverride('project_list/header', 'puff:project_list/header');
		$this->template->setTemplateOverride('project_list/sort_menu', 'puff:project_list/sort_menu');

		if ($this->runningWebpackDevServer()) {
//			$this->hook->on('template:layout:css', ['template' => "/{$this->getWebpackDevServerAddress()}/puff.min.css"]);
			$this->hook->on('template:layout:js', ['template' => "/{$this->getWebpackDevServerAddress()}/puff.min.js"]);

			$this->setContentSecurityPolicy(['default-src' => "* data: ws: wss: 'unsafe-inline' 'unsafe-eval'"]);
		} else {
			$this->hook->on('template:layout:css', ['template' => 'plugins/Puff/Asset/puff.min.css']);
			$this->hook->on('template:layout:js', ['template' => 'plugins/Puff/Asset/puff.min.css']);
		}
	}

	public function getClasses(): array
	{
		return [];
	}

	/**
	 * Called on `app.bootstrap` hook trigger
	 */
	public function onStartup(): void
	{

	}

	public function getCompatibleVersion(): string
	{
		return '>=1.2.13';
	}

	public function getPluginVersion(): string
	{
		return '0.1.0';
	}

	public function getPluginName(): string
	{
		return 'Puff Theme';
	}

	public function getPluginDescription(): string
	{
		return '';
	}

	public function getPluginAuthor(): string
	{
		return 'cvgore';
	}

	protected function runningWebpackDevServer(): bool
	{
		return file_exists(__DIR__ . '/.webpack-hot');
	}

	protected function getWebpackDevServerAddress(): string
	{
		return 'kanboard.local:8000';
	}
}
