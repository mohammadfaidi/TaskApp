<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?= $this->include("/layouts/default") ?>

<h1> Details about Task</h1>
<a href="<?= site_url("/tasks") ?>">&laquo; back to index</a>
<dl>
    <dt>ID</dt>
    <dd><?=$tasks->id?></dd>

    <dt>Description</dt>
    <!-- to prvent xss using esc -->

    <dd><?=esc($tasks->description)?></dd>



</dl>

  <a href="<?= site_url('/tasks/edit/' . $tasks->id) ?>">Edit</a> 
  <a href="<?= site_url('/tasks/delete/' . $tasks->id) ?>">Delete</a>

</body>
</html>