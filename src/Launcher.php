<?php

namespace Armincms\Launcher;

use Laravel\Nova\Card;
use Laravel\Nova\Nova;

class Launcher extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    /**
     * The registered resource names.
     *
     * @var array
     */
    public static $resources = [];

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'armincms-launcher';
    } 

    /**
     * Register the given resources.
     *
     * @param  array  $resources
     * @return static
     */
    public static function resources(array $resources)
    { 
        static::$resources = array_unique(
            array_merge(static::$resources, $resources)
        );

        return new static;
    }


    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge([
            'resources' => static::resourceInformation(),
        ], parent::jsonSerialize());
    }

    public static function resourceInformation()
    {   
        return array_filter(static::availableResources(), function($resource) {
            return $resource['authorizedToCreate'] && $resource['authorizedToViewAny'];
        });
    }

    public static function availableResources()
    {
        return array_map(function($resource) {
            return [
                'uriKey' => $resource::uriKey(),
                'label' => $resource::label(),
                'singularLabel' => $resource::singularLabel(),
                'authorizedToCreate' => $resource::authorizedToCreate(request()),
                'authorizedToViewAny' => $resource::authorizedToViewAny(request()),
            ];
        }, static::$resources);
    }
}
