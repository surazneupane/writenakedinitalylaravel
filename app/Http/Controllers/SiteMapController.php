<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SiteMapController extends Controller
{
    public function generate()
    {
        $sitemap = Sitemap::create();

        $pages = [
            '/'              => ['priority' => 1.0,  'frequency' => Url::CHANGE_FREQUENCY_WEEKLY],
            '/about'         => ['priority' => 1.0,  'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            '/stories'       => ['priority' => 1.0,  'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            '/masterclass'   => ['priority' => 1.0,  'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            '/authorprenur'  => ['priority' => 1.0,  'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
            '/vipday'        => ['priority' => 1.0,  'frequency' => Url::CHANGE_FREQUENCY_MONTHLY],
        ];

        foreach ($pages as $path => $meta) {
            $sitemap->add(
                Url::create(url($path))
                    ->setLastModificationDate(Carbon::now())
                    ->setChangeFrequency($meta['frequency'])
                    ->setPriority($meta['priority'])
            );
        }

        $sitemap->writeToFile('sitemap.xml');

        return response()->json(['message' => 'Sitemap generated successfully.']);
    }
}
