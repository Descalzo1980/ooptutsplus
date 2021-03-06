<?php

namespace Acme\App\Repositories;

class PostRssRepository implements PostRepositoryInterface{

    protected $posts = [];

    public function __construct(){
        $xml = simplexml_load_file(dirname(__FILE__) . '/posts.xml');
        $posts = $xml->xpath('channel/item');
        foreach ($posts as $key => $post) {
           $post = json_decode(json_encode($post));
            $post->body = $post->description;
            unset($post->description);
            $this->posts[$key + 1] = $post;
        }

    }

    public function All()
    {
        return $this->posts;
    }

    public function Find($id)
    {
        return isset($this->posts[$id]) ? $this->posts[$id] : [];
    }
}