<?php

return [
    
    'name' => 'tobbe/dashboard-widgets',
    
    'type' => 'extension',
    
    'main' => function ($app) {},

    'resources' => [
        'tobbe/dasboard-widgets:' => ''
    ],
    
    'events' => [
        'view.scripts' => function ($event, $scripts) use ($app) {

            $packageVersion = $app->config('system')->get('packages.tobbe/dashboard-widgets');
            $packageVersionHash = substr(sha1($app->system()->config('secret') . $packageVersion), 0, 4);

            $scripts->register('tobbe-dashboard-widgets', 'tobbe/dashboard-widgets:app/bundle/dashboard-widgets.js', ['~dashboard'], ['version' => $packageVersionHash]);

        }
    ]
    
];

?>