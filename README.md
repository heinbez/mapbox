## Installation

Installing the library is super easy. 

### Using Composer
    composer require heinbez/mapbox 

## Configuration
```php
\Mapbox\Mapbox::setConfig(
    new \Mapbox\MapboxConfiguration([
        'host' => 'https://api.mapbox.com/v4',
        'style' => 'mapbox.light',
        'client' => [
            'key' => 'xxx',
            'secret' => 'xxx'
        ]
    ])
);
```
## Using
```php
    $mapbox = new \Mapbox\Mapbox($width, $height);
    
    // Configure your path style
    $mapbox->setStyle(
        new \Mapbox\MapboxStyle([
            'stroke-width' => 6,
            'stroke' => '#6b5fe9',
            'stroke-opacity' => 1
        ])
    );

    // Push Coordinates
    $mapbox->pushCoordinates(
        new MapboxCollection(array(
            [144.96300, -37,80650],
            [144.96500, -37,80680],
            etc..
        ));
    );

    // Return the map URL
    echo $mapbox->generate();
```
### Preview
![](http://i.imgur.com/NRhe6hR.png)
