<!--Template usado nas paginas(views) na qual for extendido. Dentro desta estrutura é inserido os conteudos desejados-->

<!DOCTYPE html>

<html>
    <head>
        <title>@yield('title') - Laravel 1</title>
    </head>

    <body>
        <header>
            <h1>Header</h1>
        </header><hr>

        <section>
            @yield('content')
        </section><hr>

        <footer>
            <h1>Footer</h1>
        </footer>
    </body>
</html>