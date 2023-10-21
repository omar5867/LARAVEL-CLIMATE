<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Website - Code With Dary
    </title>
    <link
        rel="stylesheet"
        href="style.css"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
</head>

<body>
    <header>
        @include('layouts.header') <!-- Llama a nuestro header ubicado en layouts para poder mantener todo mas organizado -->
    </header>

@yield('content')

    <!-- Footer -->
    <footer>
        @include('layouts.footer') <!-- Llama a nuestro footer desde otra función -->
    </footer>
</body>
</html>