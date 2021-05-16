<?php require 'HeaderContact.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/contact.min.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="row">
            <section class="contact col-6">
                <h3>Email :</h3>
                <p>amirramy.chatbi@gmail.com</p>
                <hr>
                <h3>Telephone :</h3>
                <p>06.95.48.40.36</p>
                <hr>
                <h3>Adresse :</h3>
                <p>43 rue henri poin carré</p>
                <p>92600</p>
            </section>
            <section class="commentaire col-6">
                <form method="POST">
                    <h3>
                        <label>Email: </label>
                    </h3>
                    <input type="text" placeholder="exemple@exemple.fr"><br>
                    <h3>
                        <label>Commentaire: </label>
                    </h3>
                    <textarea name="comm" cols="30" rows="5" placeholder="Ecrire.."></textarea><br>
                    <input type="submit" value="Envoie" class="button">
                </form>
            </section>
        </div>
    </main>
</body>

</html>