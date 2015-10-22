<?php

require 'autoload.php';

//$postRepository = new Acme\App\Repositories\PostJsonRepository();
$postRepository = new Acme\App\Repositories\PostRssRepository();
$posts = ($postRepository->All());
echo '<ul>';
foreach ($posts as $post) {
    echo '<li>' . $post->title . '</li>';
}

echo '</ul>';

$post = $postRepository->Find(2);
echo '<h1>' . $post->title . '</h1>';
echo '<p>' . $post->body . '</p >';

