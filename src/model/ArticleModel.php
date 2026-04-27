<?php

require_once('./src/database.php');

class ArticleModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getData()
  {
    return $this->db->fetchAll('SELECT * FROM articles');
  }

  public function postData($data)
  {
    $query = '
      INSERT INTO articles(title, text, created_date, updated_date, author, picture)
      VALUES(:title, :text, :created_date, :updated_date, :author, :picture)
    ';

    $values = [
      ':title' => $data['title'],
      ':text' => $data['text-content'],
      ':created_date' => date("Y-m-d H:i:s"),
      ':updated_date' => date("Y-m-d H:i:s"),
      ':author' => $data['author'],
      ':picture' => $data['picture']
    ];

    return $this->db->noFetch($query, $values);
  }
}
