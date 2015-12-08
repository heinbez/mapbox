## Installation

Installing the library is super easy. 

### Using Composer
    composer require heinbez/mapbox 

## Configuration

    Mapbox::setConfig(
        new MapboxConfiguration([
            'host' => 'https://api.mapbox.com/v4',
            'style' => 'mapbox.light',
            'client' => [
                'key' => 'xxx',
                'secret' => 'xxx'
            ]
        ])
    );

## Using
    $mapbox = new Mapbox;
    
    // Set map width & height
    $mapbox->setWidth(500); 
    $mapbox->setHeight(200);
    
    // Configure your path style
    $mapbox->setStyle(
        new MapboxStyle([
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

[preview]: http://i.imgur.com/h1cR0lH.png
