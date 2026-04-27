<?php

require_once 'src/model/ArticleModel.php';
require_once('src/entity/Article.php');

class FrontController
{
  private ArticleModel $articleModel;

  public function __construct()
  {
    $this->articleModel = new ArticleModel();
  }

  public function homepage()
  {
    $articles = [];
    $result = $this->articleModel->getData();
    foreach ($result as $article) {
      $item = new Article();
      $item->setId($article['id']);
      $item->setTitle($article['title']);
      $item->setText($article['text']);
      $item->setPicture($article['picture']);
      $item->setCreatedAt($article['created_date']);
      $item->setUpdatedAt($article['updated_date']);
      $item->setAuthor($article['author']);

      $articles[] = $item;
    }
    require_once 'src/views/Homepage.php';
  }

  public function createArticle($data = [])
  {
    $data = $data;
    require_once 'src/views/CreateArticle.php';
  }

  public function addArticle()
  {
    try {
      $this->articleModel->postData($_POST);
      $data = ['isSuccess' => true];
      $this->createArticle($data);
    } catch (Exception $e) {
      $data = ['isSuccess' => false];
      $this->createArticle($data);
    }
  }
}
