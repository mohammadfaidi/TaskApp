<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> Weclome </h1>
    <a href="<?= site_url("/signup ") ?>"> Sign up </a>
    
    <?php if (session()->has('user_id')): ?>
        
        <p>User is logged in</p>
        
        <a href="<?= site_url("/logout") ?>">Log out</a>
        
    <?php else: ?>
        
        <p>User is not logged in</p>
        
        <a href="<?= site_url("/login") ?>">Log in</a>
        
    <?php endif; ?>
	
</body>
</html>