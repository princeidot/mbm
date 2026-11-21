<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| MBM Website Pages
|--------------------------------------------------------------------------
|
| Every page is served through PageController. Clean URLs are registered
| explicitly here (no inline Route::view, no catch-all slug route).
|
| Route name convention: `home` for the homepage, `page.<clean-url>` for
| everything else. The controller resolves the route name to a view slug.
*/

Route::get('/', [PageController::class, 'home'])->name('home');


$pages = [
    'channel-marketing-strategy'          => 'page.channel-marketing-strategy',
    'partner-enablement'                  => 'page.partner-enablement',
    'partner-education-training'          => 'page.partner-education-training',
    'partner-activation-engagement'       => 'page.partner-activation-engagement',
    'through-channel-demand-generation'   => 'page.through-channel-demand-generation',
    'mdf-channel-performance'             => 'page.mdf-channel-performance',
    'channel-growth-consultation'         => 'page.channel-growth-consultation',
    'channel-marketing-assessment'        => 'page.channel-marketing-assessment',
    'our-approach'                        => 'page.our-approach',
    'industries'                          => 'page.industries',
    'about'                               => 'page.about',
    'contact-us'                          => 'page.contact-us',
    'modal-components'                    => 'page.modal-components',
];

foreach ($pages as $uri => $name) {
    Route::get('/' . $uri, [PageController::class, 'show'])->name($name);
}

Route::fallback(function () {
    abort(404);
});
