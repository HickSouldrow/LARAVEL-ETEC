<!DOCTYPE html>
<html lang="pt-br">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - Etec da Zona Leste</title>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
    </script>
    <style>
        .card {
            background-color: #f9fafb;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .card h2 {
            color: #D32F2F;
        }

        .card p {
            color: #4A4A4A;
        }

        .list-disc li {
            margin-bottom: 0.5rem;
        }

        .list-disc {
            padding-left: 1.5rem;
        }

        .footer-links a:hover {
            color: #D32F2F;
            text-decoration: underline;
        }

        .footer p {
            font-size: 0.875rem;
            color: #4A4A4A;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-white border-b-4 border-red-700 py-4 shadow">
        <div class="container mx-auto flex justify-between items-center px-6">
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
                <li><a href="{{ route('site.departamentos') }}" class="block px-4 py-2 font-bold bg-red-700 rounded-lg hover:bg-red-800">Departamentos</a></li>
                <li><a href="{{ route('site.home') }}" class="block px-4 py-2 font-bold bg-red-700 rounded-lg hover:bg-red-800">Termos</a></li>
                <li><a href="{{ route('site.home') }}" class="block px-4 py-2 font-bold bg-red-700 rounded-lg hover:bg-red-800">Sobre Nós</a></li>
            </ul>
        </aside>
        <main class="flex-1 transition-all p-4 duration-300 max-w-6xl mx-auto">
        <div class="relative">
                <img src="{{ asset('img/etec3.jpeg') }}" alt="Imagem da Etec" class="rounded-t-lg w-full h-64 object-cover shadow-md">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-t-lg">
                    <h1 class="text-white text-3xl font-bold">Se torne nosso aluno!</h1>
                </div>
            </div>
            <div class="bg-white p-8 rounded-b-lg shadow-lg">
    <h1 class="text-4xl font-bold text-red-700 mb-8 text-center">Cursos Oferecidos</h1>
    <div class="space-y-6">
    
        <div class="card p-6 hover:shadow-2xl transition-transform transform hover:-translate-y-2">
            <h2 class="text-2xl font-semibold text-red-900 mb-4">Cursos Técnicos - Modalidade Presencial</h2>
            <ul class="list-disc mt-4 space-y-2 text-red-900">
                <li><strong>Administração</strong></li>
                <li><strong>Contabilidade</strong></li>
                <li><strong>Desenvolvimento de Sistemas</strong></li>
                <li><strong>Logística</strong></li>
                <li><strong>Serviços Jurídicos</strong></li>
            </ul>
        </div>

        <div class="card p-6 hover:shadow-2xl transition-transform transform hover:-translate-y-2">
            <h2 class="text-2xl font-semibold text-red-900 mb-4">Ensino Médio Integrado ao Técnico (M-Tec)</h2>
            <ul class="list-disc mt-4 space-y-2 text-red-900">
                <li><strong>Administração</strong></li>
                <li><strong>Desenvolvimento de Sistemas</strong></li>
                <li><strong>Logística</strong></li>
                <li><strong>Recursos Humanos</strong></li>
            </ul>
        </div>
   
        <div class="card p-6 hover:shadow-2xl transition-transform transform hover:-translate-y-2">
            <h2 class="text-2xl font-semibold text-red-900 mb-4">Ensino Médio Integrado ao Técnico no Período Noturno (M-Tec-N)</h2>
            <ul class="list-disc mt-4 space-y-2 text-red-900">
                <li><strong>Logística</strong></li>
            </ul>
        </div>
    
        <div class="card p-6 hover:shadow-2xl transition-transform transform hover:-translate-y-2">
            <h2 class="text-2xl font-semibold text-red-900 mb-4">Articulação dos Ensinos Médio, Técnico e Superior (AMS)</h2>
            <ul class="list-disc mt-4 space-y-2 text-red-900">
                <li><strong>Desenvolvimento de Sistemas</strong></li>
            </ul>
        </div>
    </div>
</div>

</main>


    </div>
    
    <footer class="bg-white border-t-4 border-red-700 shadow text-center py-6 mt-8">
        <a href="{{ route('site.home') }}">
            <img src="{{ asset('img/etec-logo.png') }}" alt="Logo ETEC" class="h-10 px-6">
        </a>
        <p class="text-sm font-bold">&copy; 2025 Etec da Zona Leste. Todos os direitos reservados ao Centro Paula Souza.</p>
        <div class="footer-links mt-4">
            <a href="{{ route('site.cursos') }}" class="hover:underline font-bold text-red-700 mx-4">Cursos</a>
            <a href="{{ route('site.contato') }}" class="hover:underline font-bold text-red-700 mx-4">Contato</a>
            <a href="{{ route('site.departamentos') }}" class="hover:underline font-bold text-red-700 mx-4">Departamentos</a>
        </div>
    </footer>
</body>
</html>
