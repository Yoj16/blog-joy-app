<?php
class Database
{
  private $pdo;

  private function getPDO()
  {
    if ($this->pdo === null) {
      $dbHost = getenv('DB_HOST');
      $dbName = getenv('DB_NAME');
      $dbUser = getenv('DB_USER');
      $dbPassword = getenv('DB_PASSWORD');

      $pdo = new PDO(
        "mysql:host=$dbHost;dbname=$dbName;charset=utf8",
        $dbUser,
        $dbPassword,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
      );
      $this->pdo = $pdo;
    }
    return $this->pdo;
  }

  public function fetchAll(string $query, array $values = [])
  {
    $req = $this->getPDO()->prepare($query);
    $req->execute($values);
    return $req->fetchAll(PDO::FETCH_ASSOC);
  }

  public function fetch(string $query, array $values = [])
  {
    $req = $this->getPDO()->prepare($query);
    $req->execute($values);
    return $req->fetch(PDO::FETCH_ASSOC);
  }

  public function noFetch(string $query, array $values = [])
  {
    $req = $this->getPDO()->prepare($query);
    $req->execute($values);
  }
}
