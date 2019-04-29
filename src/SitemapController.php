<?php

namespace Djmitry\Sitemap;

use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function __construct(array $data)
    {
        $urls = [
            'one',
            'punch',
            'man',
        ];

        return response()->view('Sitemap::sitemap', compact('urls'))->header('Content-Type', 'text/xml');
    }
}