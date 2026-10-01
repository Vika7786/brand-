<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$og_title}}</title>
        <meta name="description" content="{{$og_description}}">
        <meta property="og:type" content="{{$og_type}}">
        <meta property="og:title" content="{{$og_title}}">
        <meta property="og:url" content="{{$og_url}}">
        <meta property="og:image" content="{{$og_image}}">
        <meta property="og:description" content="{{$og_description}}">
        <meta property="thumbnail" content="{{$og_image}}">
        <meta property="og:logo" content="{{$og_image}}">
        <meta property="og:locale" content="ru_RU">



        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- <script src="js/jquery-4.0.0.js"></script>
        <script src="js/home.js"></script> -->

        <!-- Styles / Scripts -->
        
            @vite(['resources/css/app.css', 'resources/js/app.js'])
             @vite(['resources/js/jquery-4.0.0.js', 'resources/js/home.js'])

        
    </head>


<body>
    <!-- Sticky Navbar with Dropdown -->
    <nav class="bg-white shadow-lg fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex-shrink-0 flex items-center">
                        <img class="h-8 w-auto" src="{{ asset('/logo.png') }}" alt="Logo"></a>
                        <span class="ml-2 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 text-xl font-bold tracking-wide uppercase">
    Пасека Макара
</span>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">



                    
                        
<div class="dropdown">
  <div tabindex="0" class="btn m-1">Каталог</div>
  <ul tabindex="-1" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
@foreach (App\Models\Catalog::whereNotNull('url')->orderBy('id', 'DESC')->get() as $catalog)
<li><a href="/catalog/{{$catalog->url}}">{{$catalog->name}}</a><li>
    @endforeach
  </ul>
</div>


                        <a href="/about_us" class="border-transparent text-gray-700 hover:border-gray-300 hover:text-gray-950 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            О&nbsp;нас
                        </a>
                        <a href="/manufacture" class="border-transparent text-gray-700 hover:border-gray-300 hover:text-gray-950 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Производство&nbsp;меда
                        </a>
                         <a href="/opt" class="border-transparent text-gray-700 hover:border-gray-300 hover:text-gray-950 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Оптовикам
                        </a>
                         <a href="/document" class="border-transparent text-gray-700 hover:border-gray-300 hover:text-gray-950 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Документация
                        </a>
                         <a href="/contact" class="border-transparent text-gray-700 hover:border-gray-300 hover:text-gray-950 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Контакты
                        </a>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="hidden md:ml-4 md:flex md:items-center">
                        @auth
                        <a href="/dashboard" class="bg-indigo-600 px-4 py-2 rounded-md text-white text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{auth()->user()->name}}</a>
                                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                              Выход
                            </x-dropdown-link>
                        </form>
                          @else
                        <a href="/login" class="bg-indigo-600 px-4 py-2 rounded-md text-white text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Вход
                        </a>
                        @endauth
                        
                    </div>
                    <div class="flex items-center md:hidden">
                        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu, show/hide based on menu state -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">

                <a href="/about" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    About
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Services
                </a>
                <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">
                    Contact
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                <div class="flex items-center px-4">
                                            @auth
                        <a href="/dashboard" class="w-full bg-indigo-600 px-4 py-2 rounded-md text-white text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Кабинет пользователя</a>
                                               <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                               Выход
                            </x-dropdown-link>
                        </form>
                        @else
                        <a href="/login" class="w-full bg-indigo-600 px-4 py-2 rounded-md text-white text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Вход
                        </a>
                        @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Page content -->
    <div class="pt-16">
@yield("content")
    </div>
<footer class="footer sm:footer-horizontal bg-base-200 text-base-content p-10">
  <nav>
    <h6 class="footer-title">Services</h6>
    <a class="link link-hover">Branding</a>
    <a class="link link-hover">Design</a>
    <a class="link link-hover">Marketing</a>
    <a class="link link-hover">Advertisement</a>
  </nav>
  <nav>
    <h6 class="footer-title">Company</h6>
    <a class="link link-hover" href="/review">reviewes</a>
    <a class="link link-hover">Contact</a>
    <a class="link link-hover">Jobs</a>
    <a class="link link-hover">Pres</a>
  </nav>
  <nav>
    <h6 class="footer-title">Legal</h6>
    <a class="link link-hover">Terms of use</a>
    <a class="link link-hover">Privacy policy</a>
    <a class="link link-hover">Cookie policy</a>
  </nav>
</footer>
<footer class="mb-48 footer bg-base-200 text-base-content border-base-300 border-t px-10 py-4">
  <!-- You can open the modal using ID.showModal() method -->


  @auth()
  @if(auth()->user()->is_admin == 1)
  <button class="btn ml-10 mb-10 fixed bottom-2" onclick="my_modal_4.showModal()">seo</button>
<dialog id="my_modal_4" class="modal">
  <div class="modal-box w-11/12 max-w-5xl">
    <h3 class="text-lg font-bold">Hello!</h3>
    <div>
<div class="w-full">
        <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Fill out our form</h2>
        <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
            <form method="post" action="{{asset('og')}}">
                @csrf
               <div class="mb-5">
                    <label for="og_url" class="block mb-2 font-bold text-gray-600">Og url</label>
                    <input type="text" id="og_url" name="og_url" placeholder="og url" value="{{$_SERVER['REQUEST_URI']}}" class="border border-red-300 shadow p-3 w-full rounded mb-">
                </div>
                <div class="mb-5">
                    <label for="og_type" class="block mb-2 font-bold text-gray-600">Og type</label>
                    <select id="og_type" name="og_type" placeholder="Тип страницы" class="border border-red-300 shadow p-3 w-full rounded mb-">
                        <option value="{{$og_type}}" selected>{{$og_type}}</option>
                        <option value="website">Website</option>
                        <option value="article">Article</option>
                        <option value="product">Product</option>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="og_image" class="block mb-2 font-bold text-gray-600">Og image</label>
                    <input type="text" id="og_image" name="og_image" placeholder="Путь к изображению" class="border border-red-300 shadow p-3 w-full rounded mb-" value="{{$og_image}}">
                </div>
                <div class="mb-5">
                    <label for="og_title" class="block mb-2 font-bold text-gray-600">Og title</label>
                    <input type="text" id="og_title" name="og_title" placeholder="Заголовок страницы" class="border border-red-300 shadow p-3 w-full rounded mb-" value="{{$og_title}}">

                </div>
                <div class="mb-5">
                    <label for="og_description" class="block mb-2 font-bold text-gray-600">Og description</label>
                    <textarea  id="og_description" name="og_description"  class="border border-red-300 shadow p-3 w-full rounded mb-">{{$og_description}}</textarea> 
                </div>
                <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg" type="submit">Сохранить</button>
            </form>
        </div>
    </div>

    </div>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button, it will close the modal -->
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>
@endif
@endauth

  <nav class="md:place-self-center md:justify-self-end">
    <div class="grid grid-flow-col gap-4">
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
        </svg>
      </a>
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
        </svg>
      </a>
      <a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          class="fill-current">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
        </svg>
      </a>
    </div>
  </nav>
</footer>
@if(!isset($_COOKIE["close"]))
<footer class="fixed w-full bottom-0 bg-gray-100 p-3">
    Чтобы обеспечить стабильность и удобство работы с сайтом, а также для сбора данных о том, как посетители взаимодействуют с нашим сайтом, продуктами и услугами, мы применяем различные инструменты, включая файлы cookie. Чтобы получить больше информации о целях, сроках и порядке использования файлов cookie, Ваших правах и механизме их реализации, а также узнать о том, кто может иметь доступ к сведениям из файлов cookie и связанных с этим рисках, пожалуйста, ознакомьтесь с нашей Политикой в отношении обработки файлов cookie. Нажимая кнопку «Принять», Вы даете согласие на использование всех файлов cookie. Вы также можете отказаться от использования файлов cookie, нажав кнопку «Отклонить». В любое время вы можете изменить свой выбор на странице «Управление разрешениями».
<div class="text-center my-3">
<a href="/cookie/close" class="btn  bg-green-500 px-3 hover:bg-green-50 border-1 border-r-2">Принять</a>
<a href="/cookie/close" class="btn  bg-green-500 px-3 hover:bg-green-50 border-1 border-r-2">Отклонить</a>
<button class="btn border bg-white px-3 hover:bg-green-500" onclick="my_modal_1.showModal()">Ознакомиться</button>
<dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <h3 class="text-lg font-bold">Hello!</h3>
    <p class="py-4">Press ESC key or click the button below to close</p>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will close the modal -->
        <button class="btn">Close</button>
      </form>
    </div>
  </div>
</dialog>
</div>
</footer>
@endif
    <script>
        // Simple toggle for mobile menu
        document.querySelector('button[aria-expanded]').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>