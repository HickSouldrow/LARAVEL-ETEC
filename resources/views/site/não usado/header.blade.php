    <!-- Navbar -->
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
                    <li><a href="{{ route('site.cursos') }}" class="hover:underline text-red-700">Cursos</a></li>
                    <li><a href="{{ route('site.contato') }}" class="hover:underline text-red-700">Contato</a></li>
                    <li><a href="{{ route('site.departamentos') }}" class="hover:underline text-red-700">Departamentos</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Menu lateral -->
    <div class="flex">
        <aside id="sidebar" class="bg-gray-900 text-white w-64 p-6 fixed h-full top-0 left-0 transform -translate-x-full transition-transform duration-300 z-50">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Menu</h2>
                <button onclick="toggleSidebar()" class="text-white text-2xl">×</button>
            </div>
            <ul class="space-y-3">
                <li><a href="{{ route('site.cursos') }}" class="block px-4 py-2 font-bold bg-red-600 rounded-lg hover:bg-red-700">Sobre Nós</a></li>
                <li><a href="{{ route('site.contato') }}" class="block px-4 py-2 font-bold bg-red-600 rounded-lg hover:bg-red-700">Contato</a></li>
                <li><a href="{{ route('site.departamentos') }}" class="block px-4 font-bold py-2 bg-red-600 rounded-lg hover:bg-red-700">Termos</a></li>
                <li><a href="{{ route('site.imagem') }}" class="block px-4 py-2 font-bold bg-red-600 rounded-lg hover:bg-red-700">Imagem</a></li>
            </ul>
        </aside>

       <main class="flex-1 transition-all p-4 duration-300">
    <div class="relative">