<?php namespace Genius\GoogleMaps;

use System\Classes\PluginBase;

/**
 * GoogleMaps Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'genius.googlemaps::lang.plugin.name',
            'description' => 'genius.googlemaps::lang.plugin.description',
            'author'      => 'Genius',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Genius\GoogleMaps\Components\GoogleMaps' => 'geniusGoogleMaps'
        ];
    }

}
