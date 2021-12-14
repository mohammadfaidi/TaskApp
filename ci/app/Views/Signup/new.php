<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>

<?= $this->include("/layouts/default") ?>


<h1>Sign Up</h1>
<?php if (session()->has('errors')): ?>
    <ul>
<?php foreach(session('errors') as $error): ?>
    <li><?=$error?></li> 
    <?php endforeach ; ?>
</ul>

<?php endif  ?>




<?=form_open("/signup/create") ?>

<div>
<label for="name"> Name </label>
<input type="text" name="name" id="name" value="<?= old('name') ?>">

</div>


<div>
<label for="email"> Email </label>
<input type="text" name="email" id="email" value="<?= old('email') ?>">

</div>


<div>
<label for="password"> Password </label>
<input type="password" name="password">

</div>



<div>
<label for="password_confirmation"> Repeat Password </label>
<input type="password" name="password_confirmation">

</div>


<button>Sign Up </button>
<a href="<?=site_url("/")?> "> Cancel </a>
</form>

    
</body>
</html>