<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Presença</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 flex flex-col min-h-screen">


    <nav class="bg-gray-800 p-4 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-semibold">Sistema de Convidados</h1>
     

            <button id="mobile-menu-button" class="lg:hidden text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>


        <div id="mobile-menu" class="lg:hidden hidden bg-gray-700 p-4">
            <ul>
                <li><a href="#" class="text-white block py-2">Home</a></li>
                <li><a href="#" class="text-white block py-2">Sobre</a></li>
                <li><a href="#" class="text-white block py-2">Contato</a></li>
            </ul>
        </div>
    </nav>


    <div class="flex-grow container mx-auto p-6 sm:p-8 my-auto">
        @yield('content')
    </div>

   
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="text-center">
            <p>&copy; 2024 Lista de Presença</p>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
