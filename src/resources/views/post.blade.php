<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header class="bg-[#0DADAE] w-full h-16 flex justify-center items-center">
        <img src="/images/logo.svg" alt="Logo">
    </header>

    <section class="flex flex-col mx-10 mt-10 min-h-screen">
        
        <div>
            <a href="/" class="text-lg text-[#0DADAE]">Início</a>
            <span class="text-[#666666] text-lg">></span>
            <a href="#" class="text-lg text-[#0DADAE]">Blog</a>
        </div>

        <h1 class="text-3xl text-[#666666] font-bold mt-8 mb-8" id="title"></h1>

        <div class="max-w-80 md:max-w-96 h-32 bg-gray-300 rounded-md relative" id="image">
        </div>

        <p class="mt-8 mb-8 text-lg text-[#666666]" id="content">
        </p>

        <hr />

        <p>Matéria postada em: <span id="date"></span></p>

    </section>

    <footer class="h-28 flex justify-center items-center bg-[#444444]">
        <p class="text-[#EBEBEB] mx-6">
            © 2024  Simetra - Laboratório Veterinário. Todos os direitos reservados.
        </p>
    </footer>


    @vite('resources/js/post.js')
</body>
</html>