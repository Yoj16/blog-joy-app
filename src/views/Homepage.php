<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./public/output.css" rel="stylesheet">
  <title>Document</title>
</head>

<body class="bg-slate-50">
  <?php include_once 'components/Header.php' ?>
  <?php foreach ($articles as $article) : ?>
    <div class="bg-slate-100 flex justify-center items-center p-4 m-12 rounded-3xl">
      <img class="w-96 h-64" src="<?= $article->getPicture() ?>" alt="picture">
      <div class="w-3/5 ml-5 text-slate-600">
        <h2 class="text-2xl font-bold mb-1"><?= $article->getTitle() ?></h2>
        <p class="font-sans text-justify"><?= $article->getText() ?></p>
        <div class="flex my-5">
          <p class="mr-1">Published on <?= $article->getCreatedAt() ?>,</p>
          <i>written by <?= $article->getAuthor() ?></i>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</body>

</html>