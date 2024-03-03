<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog noticias</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header class="bg-[#0DADAE] w-full h-16 flex justify-center items-center">
        <img src="/images/logo.svg" alt="Logo">
    </header>
    
    <section class="flex flex-col items-center min-h-screen">
        
        <h1 class="text-4xl self-start ml-14 font-bold text-[#666666] border-[#FBB03F] border-b-8 mt-10 mb-10">Blog</h1>

        <div class="flex flex-row flex-wrap justify-center gap-6" id="container">
        </div>

        <div class="flex justify-center items-center">
            <button class="px-4 py-2 mx-1 border border-gray-300 rounded-lg hover:bg-gray-100" id="previousPage" disabled>« Anterior</button>
            <button class="px-4 py-2 mx-1 border border-gray-300 rounded-lg hover:bg-gray-100" id="nextPage" disabled>Próximo »</button>
        </div>

    </section>

    <footer class="h-28 flex justify-center items-center bg-[#444444]">
        <p class="text-[#EBEBEB] mx-6">
            © 2024  Simetra - Laboratório Veterinário. Todos os direitos reservados.
        </p>
    </footer>

    @vite('resources/js/app.js')
    
</body>
</html>