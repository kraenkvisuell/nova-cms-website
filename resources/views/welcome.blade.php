<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Nova CMS</title>

        <!-- Fonts -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="font-sans h-full">
        <div class="h-full flex items-center justify-center">
            <a
                class="
                    rounded inline-block
                    bg-teal-700
                    text-white font-bold text-lg
                    px-12 py-4 leading-none
                "
                href="/docs"
            >
                Docs
            </a>
        </div>
    </body>
</html>
