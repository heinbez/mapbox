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

    [https://api.mapbox.com/v4/mapbox.light/geojson(%7B%22type%22%3A%22Feature%22%2C%22properties%22%3A%7B%22stroke-width%22%3A4%2C%22stroke%22%3A%22%236b5fe9%22%2C%22stroke-opacity%22%3A1%7D%2C%22geometry%22%3A%7B%22type%22%3A%22LineString%22%2C%22coordinates%22%3A%5B%5B144.963%2C-37.8065%5D%2C%5B144.965%2C-37.7968%5D%2C%5B144.971%2C-37.7974%5D%2C%5B144.971%2C-37.7926%5D%2C%5B144.972%2C-37.7888%5D%2C%5B144.975%2C-37.7892%5D%2C%5B144.975%2C-37.7901%5D%2C%5B144.977%2C-37.7903%5D%2C%5B144.98%2C-37.7877%5D%5D%7D%7D)/144.971,-37.7974,13.9/493x200.png?access_token=pk.eyJ1IjoiZ2VhdmkiLCJhIjoiY2loM2hlanBjMHk2aXdjbTVhb3lzMGM1YSJ9.VmyzHfESt7TGnrWWCN81aQ]
