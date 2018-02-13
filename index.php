<?php

require_once __DIR__.'/Author.php';
require_once __DIR__.'/Blog.php';
require_once __DIR__.'/Post.php';

$author = new Author('Arnold Schwarzenegger');

$blog = new Blog([
    new Post('Traveling Through Time', $author, new DateTime('1985-02-12')),
    new Post('How to Successfully Fight the Resistance', $author, new DateTime('1991-09-12')),
]);

$post = new Post('Smiling 101', $author, new DateTime('2003-06-12'));

$blog->publish($post);

printf("There are %d posts published by %s:\n", count($blog->getPosts()), $author->getName());

foreach ($blog->getPosts() as $post) {
    printf("- %s - %s\n", $post->getTitle(), $post->getDateTime());
}

// There are 3 posts published by Arnold Schwarzenegger:
// - Traveling Through Time
// - How to Successfully Fight the Resistance
// - Smiling 101
