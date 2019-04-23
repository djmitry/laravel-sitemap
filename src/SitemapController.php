<?php

namespace Djmitry\Sitemap;

use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            'one',
            'punch',
            'man',
        ];

        return response()->view('sitemap', compact('urls'))->header('Content-type', 'text/xml');
    }
}