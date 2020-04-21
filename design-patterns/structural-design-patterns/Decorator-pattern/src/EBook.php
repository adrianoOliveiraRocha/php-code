<?php

class EBook 
{
  public $title;
  public $author;
  public $contents;

  public function __construct(string $title, string $author, string $contents)
  {
    echo "received: $title; $author; $contents \n";
    $this->title = $title;
    $this->author = $author;
    $this->content = $contents;
  }

  public function test()
  {
    return "test \n";
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getAuthor(): string
  {
    return $this->author;
  }

  public function getContents(): string
  {
    return $this->contents;
  }
}