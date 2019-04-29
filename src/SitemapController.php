<?php

namespace Djmitry\Sitemap;

use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [];
        $config = config('sitemap');
        foreach ($config as $name) {
            $models = $name::all();
            foreach ($models as $model) {
                if (method_exists($model, 'url')) {
                    // TODO:
                    $urls[] = $model->url();
                } else {
                    $urls[] = url($model->slug);
                }
            }
        }

        return response()->view('Sitemap::sitemap', compact('urls'))->header('Content-Type', 'text/xml');
    }
}