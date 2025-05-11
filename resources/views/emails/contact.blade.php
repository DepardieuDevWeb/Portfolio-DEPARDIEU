<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Contact</title>
    </head>
    <body>
        <p>Nom(s) et prénom(s) : {{ $data["username"] }}</p>
        <p>Email : {{ $data["email"] }}</p>
        <p>Projet : {{ $data["project"] }}</p>
        <p>Message :</p>
        <p>{{ $data["message"] }}</p>
    </body>
</html>
