<?php namespace Genius\GoogleMaps\Components;

use Backend\Models\BrandSettings;
use Cms\Classes\ComponentBase;

class GoogleMaps extends ComponentBase
{



    public function componentDetails()
    {
        return [
            'name'        => 'genius.googlemaps::lang.components.googlemaps.name',
            'description' => 'genius.googlemaps::lang.components.googlemaps.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'element' => [
                'title'             => 'Elemento',
                'description'       => 'ID do elemento que receberá o mapa',
                'default'           => 'map',
                'type'              => 'string',
            ],
            'title' => [
                'title'             => 'Título',
                'description'       => 'Nome que aparecerá no box de identificação',
                'default'           => BrandSettings::instance()->app_name,
                'type'              => 'string',
            ],
            'description' => [
                'title'             => 'Descrição',
                'description'       => 'Descrição do endereço / contatos da empresa (HTML)',
                'type'              => 'string',
            ],
            'latitude' => [
                'title'             => 'Latitude',
                'description'       => 'Latitude do marcador de endereço',
                'default'           => '-27.574771',
                'type'              => 'string',
            ],
            'longitude' => [
                'title'             => 'Longitude',
                'description'       => 'Longitude do marcador de endereço',
                'default'           => '-48.514254',
                'type'              => 'string',
            ],
            'zoom' => [
                'title'             => 'Zoom',
                'description'       => 'Distancia do zoom do mapa',
                'default'           => '14',
                'type'              => 'string',
            ]
        ];
    }

    public function debug()
    {
        return \BackendAuth::getUser();
    }

}