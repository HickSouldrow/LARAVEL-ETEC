<!DOCTYPE html>
<html lang="pt-br">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
    </script>
</head>
<body class="bg-gray-100">
    <header class="bg-white border-b-4 border-red-700 py-4 shadow">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-4">
                <button onclick="toggleSidebar()" class="text-red-700 text-2xl focus:outline-none">☰</button>
                <a href="{{ route('site.home') }}">
                    <img src="{{ asset('img/etec-logo.png') }}" alt="Logo ETEC" class="h-6">
                </a>
            </div>
            <nav>
            <ul class="flex space-x-6">
                    <li><a href="{{ route('site.cursos') }}" class="hover:underline font-bold text-red-700">Cursos</a></li>
                    <li><a href="{{ route('site.contato') }}" class="hover:underline font-bold text-red-700">Contato</a></li>
                    <li><a href="{{ route('site.departamentos') }}" class="hover:underline font-bold text-red-700">Departamentos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="flex">
    <aside id="sidebar" class="bg-red-700 text-white w-64 p-6 fixed h-full top-0 left-0 transform -translate-x-full transition-transform duration-300 z-50">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Menu</h2>
                <button onclick="toggleSidebar()" class="text-white text-2xl">×</button>
            </div>
            <ul class="space-y-3">
                <li><a href="{{ route('site.cursos') }}" class="block px-4 py-2 font-bold bg-red-700 rounded-lg hover:bg-red-800">Cursos</a></li>
                <li><a href="{{ route('site.contato') }}" class="block px-4 py-2 font-bold bg-red-700 rounded-lg hover:bg-red-800">Contato</a></li>
                <li><a href="{{ route('site.departamentos') }}" class="block px-4 font-bold py-2 bg-red-700 rounded-lg hover:bg-red-800">Departamentos</a></li>
                <li><a href="{{ route('site.departamentos') }}" class="block px-4 font-bold py-2 bg-red-700 rounded-lg hover:bg-red-800">Termos</a></li>
                <li><a href="{{ route('site.cursos') }}" class="block px-4 py-2 font-bold bg-red-700 rounded-lg hover:bg-red-800">Sobre Nós</a></li>
            </ul>
        </aside>
        <main class="flex-1 transition-all p-4 duration-300 max-w-6xl mx-auto">
            <div class="relative">
                <img src="{{ asset('img/etec2.jpeg') }}" alt="Imagem da Etec" class="rounded-t-lg w-full h-64 object-cover shadow-md">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-t-lg">
                    <h1 class="text-white text-3xl font-bold">Fale Conosco</h1>
                </div>
            </div>

            <div class="bg-white p-6 mt-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-red-700 mb-4">Informações de Contato</h3>
                <p class="text-gray-700 mb-2"><strong>Endereço:</strong> Av. Águia de Haia, 2.633 - Cidade AE Carvalho, São Paulo - SP, 03694-000</p>
                <p class="text-gray-700 mb-2"><strong>Telefone:</strong> (11) 2253-0325</p>
                <p class="text-gray-700 mb-2"><strong>E-mail:</strong> dir.etezonaleste@centropaulasouza.sp.gov.br</p>
            </div>
        </main>
    </div>

    <footer class="text-red-700 bg-white border-t-4 border-red-700 shadow text-center py-6 mt-6">
        <a href="{{ route('site.home') }}">
            <img src="{{ asset('img/etec-logo.png') }}" alt="Logo ETEC" class="h-10 px-4">
        </a>
        <p class="text-sm font-bold"> 2025 Etec Zona Leste. Todos os direitos reservados ao Centro Paula Souza.</p>
        <div class="flex justify-center gap-4 mt-2 mb-8">
            <a href="{{ route('site.cursos') }}" class="hover:underline font-bold text-red-700">Cursos</a></li>
            <a href="{{ route('site.contato') }}" class="hover:underline font-bold text-red-700">Contato</a></li>
            <a href="{{ route('site.departamentos') }}" class="hover:underline font-bold text-red-700">Departamentos</a></li>
    </div>
    </footer>
</body>
</html>
