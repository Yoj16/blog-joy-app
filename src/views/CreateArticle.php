<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./public/output.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <?php include_once 'components/Header.php' ?>
  <h2 class="font-semibold text-center text-2xl text-slate-800">Create a new article</h2>
  <form action="?action=addArticle" method="POST">
    <div class="mx-48 flex flex-col">
      <div class="w-full mb-7">
        <label for="title" class="block text-md font-medium leading-6 text-gray-900">Title *</label>
        <div class="mt-2">
          <input type="text" name="title" id="title" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" required>
        </div>
      </div>
      <div class="w-full mb-7">
        <label for="textContent" class="block text-md font-medium leading-6 text-gray-900">Text content *</label>
        <div class="mt-2">
          <textarea rows="3" name="text-content" id="textContent" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" required></textarea>
        </div>
      </div>
      <div class="w-full mb-7">
        <label for="author" class="block text-md font-medium leading-6 text-gray-900">Author *</label>
        <div class="mt-2">
          <input type="text" name="author" id="author" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" required>
        </div>
      </div>
      <div class="w-full mb-7">
        <label for="picture" class="block text-md font-medium leading-6 text-gray-900">Picture *</label>
        <div class="mt-2">
          <input type="text" name="picture" id="picture" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6" required>
        </div>
      </div>
      <button class="btn" type="submit">Add new article</button>
      <i>* = mandatory</i>
    </div>
  </form>
  <?php if (isset($data['isSuccess'])) : ?>
    <?php if ($data['isSuccess']) : ?>
      <span class="mx-48 mb-10 flex flex-col bg-green-200 rounded-lg p-5">Well done, you're new article is upload !</span>
    <?php else : ?>
      <span class="mx-48 mb-10 flex flex-col bg-red-200 rounded-lg p-5">Oh no, there is a problem...</span>
    <?php endif; ?>
  <?php endif; ?>
</body>

</html>