<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1><a href="{{ route('admin.dashboard') }}">Dashboard</a></h1>
        <ul>
            <li>
                <a href="{{ route('admin.projects.index') }}"
                    >Mes réalisations</a
                >
            </li>
            <li>
                <a href="{{ route('admin.technologies.index') }}"
                    >Technologies</a
                >
            </li>
        </ul>
        <form action="{{ route('logout') }}" method="post">
            @csrf @method('delete')
            <button type="submit">Se déconnecter</button>
        </form>
    </body>
</html>
