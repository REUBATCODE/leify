<header class="bg-yellow-500">
    <div class="flex items-center justify-between px-4 py-2">
      <input type="text" placeholder="Busca letras y más" class="px-5 py-2 border-2 border-gray-300 focus:border-gray-500 outline-none">
      
      <div class="brand">
        <a href="{{route('landing')}}">
          <img src="{{ asset('leify.png') }}" alt="LEIFY Logo" class="h-8">
      </a>      
    </div>
      
    <div class="flex items-center space-x-2">
        <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900">REGISTRARSE</a>
        <span class="text-gray-500">|</span>
        <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">INICIAR SESIÓN</a>
      </div>
    </div>
    
    <nav class="bg-black">
        <div class="flex justify-center items-center py-2">
          <div class="menu space-x-4 flex items-center">
            <a href="#" class="text-white hover:text-gray-200">DESTACADO</a>
            <span class="text-gray-500">|</span>
            <a href="#" class="text-white hover:text-gray-200">CANCIONES</a>
            <span class="text-gray-500">|</span>
            <a href="{{route('albums.list')}}" class="text-white hover:text-gray-200">ALBUMES</a>
            <span class="text-gray-500">|</span>
            <a href="{{route('artists.list')}}" class="text-white hover:text-gray-200">ARTISTAS</a>
            <span class="text-gray-500">|</span>
            <a href="#" class="text-white hover:text-gray-200"> <i class="fab fa-facebook-f"></i> </a>
            <span class="text-gray-500">|</span>
            <a href="#" class="text-white hover:text-gray-200"> <i class="fab fa-twitter"></i> </a>
            <span class="text-gray-500">|</span>
            <a href="#" class="text-white hover:text-gray-200"> <i class="fab fa-instagram"></i> </a>
        </div>
        </div>
    </nav>              
</header>