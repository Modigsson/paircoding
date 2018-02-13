<?php


declare(strict_types=1);

class Post
{
  protected $title, $author, $publishDate;

  public function __construct(string $title, Author $author, DateTime $dt)
  {
    $this->title = $title;
    $this->author = $author;
    $this->publishDate = $dt;

  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getDateTime():string
  {
    return $this->publishDate->format('M d, Y ');
  }
}
