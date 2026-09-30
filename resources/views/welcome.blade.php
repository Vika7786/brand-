@extends("layouts.base")
@section("content")
<div>
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto font-sans-body">
    
    <div class="text-center mb-16 space-y-2">
        <span class="ml-2 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 text-xl font-bold tracking-wide uppercase">
    Пасека Макара
</span>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif-display text-gray-900 leading-tight">
            Noticias y <span class="text-teal-600 italic">Actividades</span>
        </h2>
        <p class="text-gray-700 max-w-2xl mx-auto text-lg">
            Интернет-магазин мёда
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
        
        <div class="lg:col-span-7 group cursor-pointer">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 h-full flex flex-col">
                <div class="relative overflow-hidden h-64 md:h-96 w-full">
                    <img class="w-full smile h-full object-cover transform group-hover:scale-105 transition-transform duration-700" 
                         src="{{ asset('storage/contents/01KRBTDCE6T05PZ6M4AEBVEFMM.jpg') }}"
                         alt="blog image">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-1 rounded-lg text-xs font-bold text-teal-700 shadow-sm">
                        СДЕЛАТЬ ЗАКАЗ
                    </div>
                </div>

                <div class="p-8 md:p-10 flex-1 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                            <span class="flex items-center gap-1"><ion-icon name="calendar-outline"></ion-icon> 15 Ene, 2024</span>
                            <span class="flex items-center gap-1"><ion-icon name="person-outline"></ion-icon> Por Admin</span>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-serif-display text-gray-800 mb-4 leading-tight group-hover:text-teal-700 transition-colors">
                            Guía para principiantes: Diseño Web Moderno
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Adéntrate en el mundo de Tailwind CSS con esta guía amigable. Aprende los conceptos básicos, diseño responsivo y cómo personalizar tu sitio web.
                        </p>
                    </div>
                    
                    <div class="flex items-center text-teal-600 font-bold group-hover:translate-x-2 transition-transform duration-300">
                        Leer artículo completo <ion-icon name="arrow-forward-outline" class="ml-2"></ion-icon>
                    </div>
                </div>
            </div>
        </div>


        <div class="lg:col-span-5 flex flex-col gap-6 justify-center">

            <article class="bg-white p-5 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group border border-gray-100 flex gap-5 items-start">
                <div class="flex-shrink-0 w-16 h-16 rounded-xl shadow-sm group-hover:shadow-xl transition-shadow duration-300">
        <img src="{{ asset('storage/gallery/foto6.jpg') }}"
         alt="Соты"
         class="w-full h-full object-cover rounded-xl group-hover:opacity-90 transition-opacity">
</div>
                
                <div class="flex-col">
                    <h4 class="text-xl font-bold text-gray-800 font-serif-display leading-tight mb-2 group-hover:text-yellow-600 transition-colors">
                        Мёд в сотах: польза и хранение
                    </h4>
                    <p class="text-base text-gray-700 line-clamp-2">
                        «Пчелиные жвачки» - так в шутку называют медовые соты.
                    </p>
                </div>
            </article>

            <article class="bg-white p-5 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group border border-gray-100 flex gap-5 items-start">
                <div class="flex-shrink-0 w-16 h-16 bg-teal-100 rounded-xl flex flex-col items-center justify-center text-teal-700 shadow-sm group-hover:bg-teal-600 group-hover:text-white transition-colors duration-300">
                    <span class="text-2xl font-bold font-serif-display leading-none">20</span>
                    <span class="text-[10px] uppercase font-bold tracking-wider">Feb</span>
                </div>
                
                <div class="flex-col">
                    <h4 class="text-xl font-bold text-gray-800 font-serif-display leading-tight mb-2 group-hover:text-teal-600 transition-colors">
                        Как выбрать качественный мёд?
                    </h4>
                    <p class="text-base text-gray-700 line-clamp-2">
                        Натуральный мёд полезен. Это аксиома. Но натуральность нужно каждый раз доказывать.
                    </p>
                </div>
            </article>

            <article class="bg-white p-5 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group border border-gray-100 flex gap-5 items-start">
                <div class="flex-shrink-0 w-16 h-16 bg-red-100 rounded-xl flex flex-col items-center justify-center text-red-700 shadow-sm group-hover:bg-red-500 group-hover:text-white transition-colors duration-300">
                    <span class="text-2xl font-bold font-serif-display leading-none">05</span>
                    <span class="text-[10px] uppercase font-bold tracking-wider">Mar</span>
                </div>
                
                <div class="flex-col">
                    <h4 class="text-xl font-bold text-gray-800 font-serif-display leading-tight mb-2 group-hover:text-red-600 transition-colors">
                        Мёд полезен для детей?
                    </h4>
                    <p class="text-base text-gray-700 line-clamp-2">
                        Оставайтесь здоровыми!"
                    </p>
                </div>
            </article>

           <article class="bg-white p-5 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1 group border border-gray-100 flex gap-5 items-start">
                <div class="flex-shrink-0 w-16 h-16 bg-red-100 rounded-xl flex flex-col items-center justify-center text-red-700 shadow-sm group-hover:bg-red-500 group-hover:text-white transition-colors duration-300">
                    <span class="text-2xl font-bold font-serif-display leading-none">05</span>
                    <span class="text-[10px] uppercase font-bold tracking-wider">Mar</span>
                </div>
                
                <div class="flex-col">
                    <h4 class="text-xl font-bold text-gray-800 font-serif-display leading-tight mb-2 group-hover:text-red-600 transition-colors">
                        Какой мёд стоит попробовать в разных странах?
                    </h4>
                    <p class="text-base text-gray-700 line-clamp-2">
                        Настоящей экзотикой туристу в Китае может показаться мёд из личи. 
                    </p>
                </div>
            </article>


        </div>
    </div>
    </section>
    
</div>
@endsection