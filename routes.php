<?php

use PlanetaDelEste\ApiAudits\Plugin;

Route::prefix('api/v1')
     ->namespace('PlanetaDelEste\ApiAudits\Controllers\Api')
     ->middleware(['throttle:120,1', 'bindings'])
     ->group(
         function () {
             $arRoutes = ['audits'];
             foreach ($arRoutes as $sPublicRoute) {
                 Route::group([], plugins_path(Plugin::API_ROUTES . $sPublicRoute . '.php'));
             }
         }
     );
