<?php
namespace Craft;

/**
 * Redactor CSS plugin
 */
class RedactorColorsPlugin extends BasePlugin
{
	public function getName()
	{
		return 'Redactor Colors';
	}

	public function getVersion()
	{
		return '0.1';
	}

	public function getDeveloper()
	{
		return 'Cameron West';
	}

	public function getDeveloperUrl()
	{
		return 'https://github.com/cameronwest';
	}

	public function init()
	{
		if (craft()->request->isCpRequest())
		{
			craft()->templates->includeJsResource('redactorcolors/fontcolor.js');
		}
	}
}