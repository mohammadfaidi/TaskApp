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


<h1>new Task</h1>
<?php if (session()->has('errors')): ?>
    <ul>
<?php foreach(session('errors') as $error): ?>
    <li><?=$error?></li> 
    <?php endforeach ; ?>
</ul>

<?php endif  ?>




<?=form_open("/tasks/create") ?>

<?= $this->include("/Tasks/form.php"); ?>

<button>Save </button>
<a href="<?=site_url("/tasks")?> "> Cancel </a>
</form>

    
</body>
</html>