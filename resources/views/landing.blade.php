<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Leify</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans bg-yellow-50 text-gray-800">
        <header class="bg-yellow-500">
            <div class="flex items-center justify-between px-4 py-2">
              <input type="text" placeholder="Busca letras y más" class="px-5 py-2 border-2 border-gray-300 focus:border-gray-500 outline-none">
              
              <div class="brand">
                <img src="{{ asset('leify.png') }}" alt="LEIFY Logo" class="h-8">
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
                    <a href="#" class="text-white hover:text-gray-200">VIDEOS</a>
                    <span class="text-gray-500">|</span>
                    <a href="#" class="text-white hover:text-gray-200">ARTISTAS</a>
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
    <main>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Título de la sección -->
            <div class="mb-10">
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Explorando la actualidad del Hip-Hop.</h2>
              <p class="mt-3 max-w-2xl text-lg text-gray-500">
                ¿Quieres saber qué está pasando en el mundo de la música? Aquí te traemos las últimas noticias, canciones y videos de tus artistas favoritos del Hip-Hop.
              </p>
              <p class="mt-1 text-sm text-gray-400">por Odiseo Cowboy / Feb 15 2024</p>
            </div>
            
            <!-- Grid de artículos -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
              <!-- Artículo 1 -->
              <div class="space-y-4">
                <img src="jung.png" alt="imagen" class="w-full object-cover h-48">
                <h3 class="text-lg leading-6 font-medium text-gray-900">JUNG despega en el Hip-Hop guatemalteco."</h3>
                <p class="text-sm text-gray-500">por Jose Valdés / Feb 16 2024</p>
              </div>
              
              <!-- Artículo 2 -->
              <div class="space-y-4">
                <img src="bbnomoney.jpg" alt="imagen" class="w-full object-cover h-48">
                <h3 class="text-lg leading-6 font-medium text-gray-900">bbno$ hace colaboración con la ONE COIN.</h3>
                <p class="text-sm text-gray-500">por Puvlo / Feb 16 2024</p>
              </div>
              
              <!-- Artículo 3 -->
              <div class="space-y-4">
                <img src="onecoin.png" alt="Yeat" class="w-full object-cover h-48">
                <h3 class="text-lg leading-6 font-medium text-gray-900">"Cómo Dicen Los Perros" es un éxito.</h3>
                <p class="text-sm text-gray-500">por Late / Feb 16 2024</p>
              </div>
          
            </div>
          </div>
        
          <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 mb-6">TENDENCIA</h2>
          
            <!--canciones-->
            <div class="divide-y divide-gray-300">
              <!-- 1 -->
              <div class="grid grid-cols-12 items-center py-4">
                <div class="col-span-1 text-gray-700 font-bold">1</div>
                <div class="col-span-1">
                  <img src="carnival.png" alt="Carnival cover" class="w-10 h-10">
                </div>
                <div class="col-span-4">
                  <p class="font-medium text-gray-900">CARNIVAL</p>
                  <p class="text-gray-500 text-sm">LETRAS</p>
                </div>
                <div class="col-span-4">
                  <p class="text-gray-700">¥$, Kanye West & Ty...</p>
                </div>
                <div class="col-span-2 flex justify-end items-center">
                  <span class="text-red-500 mr-2">♥</span>
                  <span class="text-gray-700">5.7M</span>
                </div>
              </div>
          
              <!--2-->
              <div class="grid grid-cols-12 items-center py-4">
                <div class="col-span-1 text-gray-700 font-bold">2</div>
                <div class="col-span-1">
                  <img src="mockinbird.jpg" alt="Mockingbird cover" class="w-10 h-10">
                </div>
                <div class="col-span-4">
                  <p class="font-medium text-gray-900">Mockingbird</p>
                  <p class="text-gray-500 text-sm">LETRAS</p>
                </div>
                <div class="col-span-4">
                  <p class="text-gray-700">Eminem</p>
                </div>
                <div class="col-span-2 flex justify-end items-center">
                  <span class="text-red-500 mr-2">♥</span>
                  <span class="text-gray-700">4.8M</span>
                </div>
              </div>
            </div>
              <!--3-->
            <div class="grid grid-cols-12 items-center py-4">
                <div class="col-span-1 text-gray-700 font-bold">3</div>
                <div class="col-span-1">
                  <img src="snow.jpg" alt="Snow" class="w-10 h-10">
                </div>
                <div class="col-span-4">
                  <p class="font-medium text-gray-900">Snow</p>
                  <p class="text-gray-500 text-sm">LETRAS</p>
                </div>
                <div class="col-span-4">
                  <p class="text-gray-700">XXXTENTACION</p>
                </div>
                <div class="col-span-2 flex justify-end items-center">
                  <span class="text-red-500 mr-2">♥</span>
                  <span class="text-gray-700">2.4M</span>
                </div>
              </div>
            </div>
          </div>
          </div>
            <!-- Canción 3 -->

            <div class="bg-black">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="flex flex-wrap items-center justify-between py-20">
                    
                    <!-- Contenido del lado izquierdo -->
                    <div class="w-full lg:w-1/2">
                      <h2 class="text-4xl font-bold text-white">VIDEOS</h2>
                      <p class="text-yellow-500 text-lg">SERIE DE VIDEOS ORIGINAL DE LEIFY</p>
                    </div>
              
                    <!-- Contenido del lado derecho -->
                    <div class="w-full lg:w-1/2 mt-10 lg:mt-0">
                      <div class="bg-yellow-500 p-10">
                        <div class="flex flex-col items-end">
                          <h3 class="text-2xl font-bold text-black">VERIFICADO</h3>
                          <h4 class="text-xl font-semibold text-black mt-2">La IV Parte es la favorita del duo</h4>
                          <p class="text-black mt-4">KILL YOURSELF Part IV se ha convertido en la canción predilecta de $UICIDEBOY$ en sus conciertos.</p>
                          <p class="text-black text-opacity-60 mt-2">by Odiseo Cowboy / Feb 16 2024</p>
                          <div class="mt-4">
                            <button class="bg-black text-yellow-500 py-2 px-4">CARGAR MÁS</button>
                          </div>
                        </div>
                      </div>
                    </div>
              
                  </div>
                </div>
              </div>
              <div class="bg-white">
                <div class="max-w-6xl mx-auto px-4 py-12">
                  
                  <!-- Título y botones -->
                  <div class="text-center mb-12">
                    <h2 class="text-4xl font-extrabold text-gray-900 mb-4">COMUNIDAD</h2>
                    <p class="text-xl text-gray-600">LOS CONTRIBUIDORES DE LEIFY EMPODERAN AL SITIO DE LETRAS Y MÚSICA MÁS GRANDE DE LA RED EN ESPAÑOL.</p>
                    <div class="flex justify-center mt-6">
                      <button class="bg-black text-white px-6 py-2 rounded-md mr-4">ÚNETE A NUESTRA COMUNIDAD</button>
                      <button class="border border-black text-black px-6 py-2 rounded-md">APRENDE CÓMO FUNCIONA LEIFY</button>
                    </div>
                  </div>
                  
                  <!-- Lista de usuarios -->
                  <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                              <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Rango
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Top Usuarios de Hoy
                                </th>
                              </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                              <!-- Repetir para cada usuario -->
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                  1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                      <img class="h-10 w-10 rounded-full" src="ang.jpeg" alt="User avatar">
                                    </div>
                                    <div class="ml-4">
                                      <div class="text-sm font-medium text-gray-900">Angel Dabnee Gonzalez Rodríguez</div>
                                      <div class="text-sm text-gray-500">Admin ⭐</div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <!-- Continuar con más usuarios -->
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                  1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                      <img class="h-10 w-10 rounded-full" src="jorg.jpeg" alt="User avatar">
                                    </div>
                                    <div class="ml-4">
                                      <div class="text-sm font-medium text-gray-900">Jorge Esteban Corral Santillán</div>
                                      <div class="text-sm text-gray-500">Admin ⭐</div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                  1
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                  <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                      <img class="h-10 w-10 rounded-full" src="rub.jpeg" alt="User avatar">
                                    </div>
                                    <div class="ml-4">
                                      <div class="text-sm font-medium text-gray-900">Rubén Bernardo Ruíz Vega</div>
                                      <div class="text-sm text-gray-500">Admin ⭐</div>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
              
                </div>
              </div>              
    </main>
    <footer class="bg-black text-white">
            <div class="max-w-6xl mx-auto px-4 py-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/2 lg:w-1/4 mb-6">
                <p>Leify es la mayor colección de música y artistas del mundo.</p>
                <div class="flex mt-4">
                    <a href="#" class="mr-4 hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="mr-4 hover:text-gray-400"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="mr-4 hover:text-gray-400"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-gray-400"><i class="fab fa-youtube"></i></a>
                </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-3/4 flex flex-wrap justify-end">
                <div class="w-full sm:w-1/2 md:w-1/4 mb-6">
                    <h5 class="uppercase mb-2 font-bold">Acerca de Leify</h5>
                    <ul class="list-none">
                    <li class="mb-2"><a href="#" class="hover:text-gray-400">Reglas de Contribuidores</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-gray-400">Prensa</a></li>
                    <li><a href="#" class="hover:text-gray-400">Tienda</a></li>
                    </ul>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/4 mb-6">
                    <h5 class="uppercase mb-2 font-bold">Ayuda</h5>
                    <ul class="list-none">
                    <li class="mb-2"><a href="#" class="hover:text-gray-400">Publicidad</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-gray-400">Política de Privacidad</a></li>
                    <li><a href="#" class="hover:text-gray-400">Términos de Uso</a></li>
                    </ul>
                </div>
                </div>
            </div>
                    <div class="border-t border-gray-700 pt-4 mt-4">
                        <p class="text-center text-gray-400">© 2024 Leify</p>
                        <div class="flex justify-center space-x-2 mt-2">
                            <a href="#" class="hover:text-gray-400">ARTISTAS VERIFICADOS</a>
                            <span class="text-gray-500">•</span>
                            <a href="#" class="hover:text-gray-400">TODOS LOS ARTISTAS</a>
                        </div>
                        <div class="flex justify-center space-x-2 mt-2">
                            <a href="#" class="hover:text-gray-400">CANCIONES TOP</a>
                        </div>
                    </div>
                </div>
        </footer>
    </body>
</html>
