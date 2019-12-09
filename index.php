<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
            <label for="password">Inserisci la password</label>
            <input type="password" name="password" id="password" autocomplete='off'>
        </div>
        <div>
            <button>CHECK</button>
        </div>
    </form>
    <p class="result">
        <?php
        if ($_POST['password'] == 'Boolean'):?>
            <span class="correct">hai indovinato la password Boolean</span>
        <?php else:?>
            <span class="wrong">Password sbagliata</span>
        <?php endif;?>
    </p>
</body>
</html>