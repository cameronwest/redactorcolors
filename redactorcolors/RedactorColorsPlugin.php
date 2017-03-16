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
		return '0.1.1';
	}

	public function getDeveloper()
	{
		return 'Cameron West';
	}

	public function getDeveloperUrl()
	{
		return 'https://github.com/cameronwest';
	}
        
        
        public function getSettingsHtml()
        {
            return craft()->templates->render('redactorcolors/_settings', [
                'settings' => $this->getSettings()
            ]);
        }

        protected function defineSettings()
        {
            return [
                "fontcolors" => array(
                    AttributeType::Bool, 'default' => false
                ),
                "backcolors" => array(
                    AttributeType::Bool, 'default' => false
                )
            ];
        }
        

	public function init()
	{
		if (craft()->request->isCpRequest())
		{
                    $settings = $this->getSettings();
                    if($settings->fontcolors === "1")
                    {
                        craft()->templates->includeJs('var fontcolors = true;');
                    }	
                    if($settings->backcolors === "1")
                    {
                        craft()->templates->includeJs('var backcolors = true;');
                    }
                    
                    craft()->templates->includeJsResource('redactorcolors/fontcolor.js');
		}
	}
}
