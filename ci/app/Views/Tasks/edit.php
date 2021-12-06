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


<h1>Edit Task</h1>
<?php if (session()->has('errors')): ?>
    <ul>
<?php foreach(session('errors') as $error): ?>
    <li><?=$error?></li> 
    <?php endforeach ; ?>
</ul>

<?php endif  ?>




<?=form_open("/tasks/update/".$tasks['id']) ?>

<?= $this->include("/Tasks/form.php"); ?>


<button>Save </button>
<a href="<?=site_url("/tasks/show/".$tasks['id'])?> "> Cancel </a>
</form>

    
</body>
</html>