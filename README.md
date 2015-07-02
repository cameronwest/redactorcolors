# Redactor Font Colors for Craft

This Craft plugin acts as a wrapper for the [Redactor Font Color plugin](http://imperavi.com/redactor/plugins/font-color/) created by [Imperavi](http://imperavi.com), which allows setting text and background colors. It has been slightly modified from Imperavi's original version to work in the Craft CMS control panel.

## Installation

Download the plugin and copy the "redactorcolors" folder into your craft plugins folder. Then go into the Craft CMS control panel and go to Settings > Plugins to install it. Once that is done, you will need to configure your redactor settings files to include the plugin. Those are located in "craft/config/redactor/". For any of the WYSIWYG types that you want to add this plugin to, add "fontcolor" to the plugins list like so:

```
{
	buttons: ['html','formatting','bold','italic','link','image'],
	plugins: ['fullscreen', 'fontcolor'],
    formattingTags: ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4'],
    observeLinks: true,
	toolbarFixedBox: true
}
```

If you'd like to customize the colors available, those are defined in "/redactorcolors/resources/fontcolor.js"

#### NOTE

It seems that in some Craft versions, Redactor is not able to initialize the configured plugins from the normal redactor config files. I'm not sure what the issue is there, but I have a workaround. If updating the config files does not show the 2 new buttons, then you can update the default config used in the core redactor file, located at:

"/craft/app/resources/lib/redactor/redactor.js"

Find the line that defines the redactor options:

```
$.Redactor.opts = {
	...
}
```

Find the line that defines the plugin options. It probably looks like this:

```
plugins: false, // array
```

You can add your plugins here for them to be initialized:

```
plugins: ['fullscreen', 'fontcolor'], // array
```