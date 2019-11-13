<?php

namespace visualdialogue\HeroVideo;

\Kirby::plugin('visualdialogue/herovideo', [

    'options' => [
        // 'featuredsizing' => 'xlarge',
    ],

    'routes' => [
        [
            'pattern' => 'herovideoajax.json',
            'action'  => function () {

                // This is closest thing to a controller, and allows for calendar ajax processing
                // this route is necessary to fulfill default template requirement for content representation

                // virtual page so can get json content from calendar widget
                return \Page::factory([
                    'slug' => 'herovideoajax.json',
                    'template' => 'herovideoajax.json'
                ]);
            }
        ],
    ],

    'snippets' => [
        'herovideoajax'             => __DIR__ . '/src/snippets/herovideoajax.php',
        'herovideowrapper'          => __DIR__ . '/src/snippets/herovideowrapper.php',
    ],

    'templates' => [
        // as template too so can get json as content representation easily
        'herovideoajax.json'        => __DIR__ . '/src/templates/herovideoajax.json.php',
    ]

]);