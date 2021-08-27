<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public function __construct(
        public $title,
        public $excerpt,
        public $date,
        public $body,
        public $slug
    ) {
    }

    public static function findOrFail($slug)
    {
        $post = static::find($slug);

        if (!$post) {
            throw new ModelNotFoundException();
        }

        return $post;

        // if (!file_exists($path = resource_path("views/post/{$slug}.html"))) {
        //     ddd($path);
        //     throw new ModelNotFoundException();
        // }

        // return cache()->remember("posts.{$slug}", now()->addMinutes(5), fn () => file_get_contents($path));
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function all()
    {
        return cache()->rememberForever("posts.all", function () {
            return collect(File::files(resource_path("views/post/")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(fn($document) => new Post(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug
                    ))
                ->sortByDesc('date');
        });

        // return collect(File::files(resource_path("views/post/")))
        //     ->map(function ($file) {
        //         $document = YamlFrontMatter::parseFile($file);

        //         return new Post(
        //             $document->title,
        //             $document->excerpt,
        //             $document->date,
        //             $document->body(),
        //             $document->slug
        //         );
        //     });

        // return array_map(function ($file) {
        //     $document = YamlFrontMatter::parseFile($file);

        //     return new Post(
        //         $document->title,
        //         $document->excerpt,
        //         $document->date,
        //         $document->body(),
        //         $document->slug
        //     );
        // }, File::files(resource_path("views/post/")));
    }
}
