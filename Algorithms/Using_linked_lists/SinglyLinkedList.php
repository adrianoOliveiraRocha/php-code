<?php

class ListNode {
  public $data = NULL;
  public $next = NULL;

  public function __construct(string $data = NULL) {
    $this->data = $data;
  }
}

class LinkedList {
  private $firstNode = NULL;
  private $totalNode = 0;

  public function insert(string $data = NULL) {
    $newNode = new ListNode($data);

    if($this->firstNode === NULL) {
      $this->firstNode = &$newNode;
    } else {
      $currentNode = $this->firstNode;
      while($currentNode->next !== NULL) {
        $currentNode = $currentNode->next;
      }
      $currentNode->next = $newNode;
    }
    
    $this->totalNode++;
    return TRUE;
  }

  public function insertBefore(string $data, string $query) {
    $newNode = new ListNode($data);
    
    if($this->firstNode) {
      $previous = NULL;
      $currentNode = $this->firstNode;
      while($currentNode !== NULL) {
        if($currentNode->data === $query) {
          $newNode->next = $currentNode;
          $previous->next = $newNode;
          $this->totalNode++;
          break;
        }
      }
    }
  }

  public function display() {
    echo "Total book titles: " . $this->totalNode . "\n";
    $currentNode = $this->firstNode;
    while($currentNode !== NULL) {
      echo $currentNode->data . "\n";
      $currentNode = $currentNode->next;
    }
  }
}

$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->display();

$BookTitles->insertBefore("My First, My One, My Everthing", "Introduction to Algorithm");