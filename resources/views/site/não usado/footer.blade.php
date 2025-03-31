<footer class=" text-red-700 bg-white border-t-4 border-red-700 shadow text-center py-6 mt-8">
    <a href="{{ route('site.home') }}">
                    <img src="{{ asset('img/etec-logo.png') }}" alt="Logo ETEC" class="h-10 px-6">
                </a>
    <p class="text-sm font-bold">&copy; 2025 Etec Zona Leste. Todos os direitos reservados ao Centro Paula Souza.</p>
    <div class="flex justify-center gap-4 mt-2 mb-8">
                <a href="{{ route('site.cursos') }}" class="block px-4 py-2 font-bold text-red-700 rounded-lg hover:bg-red-400 hover:text-white">Sobre Nós</a>
                <a href="{{ route('site.contato') }}" class="block px-4 py-2 font-bold text-red-700 rounded-lg hover:bg-red-400 hover:text-white">Contato</a>
                <a href="{{ route('site.departamentos') }}" class="block px-4 py-2 font-bold text-red-700 rounded-lg hover:bg-red-400 hover:text-white">Termos</a>
                <a href="{{ route('site.imagem') }}" class="block px-4 py-2 font-bold text-red-700 rounded-lg hover:bg-red-400 hover:text-white">Imagem</a>
    </div>
</footer>