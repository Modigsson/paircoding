<?php


declare(strict_types=1);

class Post
{
  protected $title, $author;

  public function __construct(string $name, Author $author)
  {
    $this->title = $title;
    $this->author = $author;
  }

  public function getTitle():string
  {
    return $this->title;
  }
}
