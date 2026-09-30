@extends('layouts.base')
@section('content')

<div class="text-center text-3xl">{{$catalog->name}}</div>

<div class="flex flex-wrap justify-center gap-8 m-8">



    <!-- Первая карточка -->
    <div class="w-64 md:w-80 shadow-lg rounded-lg overflow-hidden">
        <img alt="Песочный мёд" class="w-full h-64 object-cover" id="019d9ae5-23fa-7308-bbf2-ecb1bcf7ece1">
        <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Песочный мёд</h3>
            <span class="text-right block text-base font-bold text-green-600">от 6.00 ₽</span>
            <div class="mt-4">
                <p class="font-semibold">Состав:</p>
                <p class="text-gray-700">Мёд натуральный цветочный (нектар цветов: лесная малина, чабрец)</p>
            </div>
            <div class="mt-4">
                <p class="font-semibold">Срок хранения:</p>
                <p class="text-gray-700">2 года</p>
            </div>
            <a href="#" class="block w-full mt-6 py-2 text-center text-white uppercase font-semibold tracking-widest bg-yellow-500 hover:bg-yellow-600 rounded-md">В корзину</a>
        </div>
    </div>

    <!-- Вторая карточка -->
    <div class="w-64 md:w-80 shadow-lg rounded-lg overflow-hidden">
        <img alt="Пуговой мёд" class="w-full h-64 object-cover" id="019d9ae5-23f3-7ff5-9b16-aafdb776fc94">
        <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Пуговой мёд</h3>
            <span class="text-right block text-base font-bold text-green-600">от 6.00 ₽</span>
            <div class="mt-4">
                <p class="font-semibold">Состав:</p>
                <p class="text-gray-700">Мёд натуральный цветочный (нектар цветов: иссоп, белый клевер, фацелия, чертополох, люцерна, вереск)</p>
            </div>
            <div class="mt-4">
                <p class="font-semibold">Срок хранения:</p>
                <p class="text-gray-700">2 года</p>
            </div>
            <a href="#" class="block w-full mt-6 py-2 text-center text-white uppercase font-semibold tracking-widest bg-yellow-500 hover:bg-yellow-600 rounded-md">В корзину</a>
        </div>
    </div>

    <!-- Третья карточка -->
    <div class="w-64 md:w-80 shadow-lg rounded-lg overflow-hidden">
        <img alt="Мёд песочной с гречихой" class="w-full h-64 object-cover" id="019d9ae5-23eb-7ee9-bc0a-bf5521a312da">
        <div class="p-4">
            <h3 class="text-lg font-semibold mb-2">Мёд песочной с гречихой</h3>
            <span class="text-right block text-base font-bold text-green-600">от 6.00 ₽</span>
            <div class="mt-4">
                <p class="font-semibold">Состав:</p>
                <p class="text-gray-700">Мёд натуральный цветочный, травы гречиш, вереск, иван-чай</p>
            </div>
            <div class="mt-4">
                <p class="font-semibold">Срок хранения:</p>
                <p class="text-gray-700">2 года</p>
            </div>
            <a href="#" class="block w-full mt-6 py-2 text-center text-white uppercase font-sembol tracking-widest bg-yellow-500 hover:bg-yellow-600 rounded-md">В корзину</a>
        </div>
    </div>

</div>








@endsection