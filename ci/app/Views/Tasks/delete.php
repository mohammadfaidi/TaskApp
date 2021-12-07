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
<h1>Delete task</h1>

<p>Are you sure?</p>

<?= form_open("/tasks/delete/" . $tasks->id) ?>

    <button>Yes</button>
    <a href="<?= site_url('/tasks/show/' . $tasks->id) ?>">Cancel</a>
    
</form>
    
</body>
</html>