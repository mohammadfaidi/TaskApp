<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Welcome Login page </h1>
<?= form_open("/Login/create") ?>

<div>
    <label for="email">Email </label>
    <input type="text" name="email" id="email" value="<?=old('email') ?>">
</div>


<div>
    <label for="password">Password </label>
    <input type="password" name="password">
</div>

<button>Log In </button>

</form>

</body>
</html>