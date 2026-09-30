@extends('layouts.base')
@section('content')
<div class="prose max-w-none p-9">
<div class="mt-20 px-8">
    <form class="max-w-2xl" method="post" action="/review">
        @csrf
        <div class="flex flex-wrap border shadow rounded-lg p-3 dark:bg-gray-600">
            <h2 class="text-xl text-gray-600 dark:text-gray-300 pb-2">Account settings:</h2>

            <div class="flex flex-col gap-2 w-full border-gray-400">

                <div>
                    <label for="name" class="text-gray-600 dark:text-gray-400">User
                        name
                    </label>
                    <input id="name"
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow dark:bg-gray-600 dark:text-gray-100"
                        type="text" name="name" />
                </div>

                <div>
                    <label for="email" class="text-gray-600 dark:text-gray-400">Email</label>
                    <input id="email"
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow dark:bg-gray-600 dark:text-gray-100"
                        type="text" name="email" />
                </div>

                <div>
                    <label for="message" class="text-gray-600 dark:text-gray-400">Message</label>
                    <textarea id="message"
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow dark:bg-gray-600 dark:text-gray-100"
                        name="message"></textarea>
                </div>
                <div class="flex justify-end">
                    <button
                        class="py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700"
                        type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>

<blockquote class="flex flex-col items-center p-4">
@foreach($reviews as $review)
    <p class="max-w-4xl text-xl font-medium text-center md:text-2xl lg:text-3xl">
        "
{{$review->message}}
        "
        </p>
    <footer class="flex items-center gap-3 mt-6 md:mt-12">
            <p>{{$review->name}}</p>
            <p class="font-medium text-black/60">{{optional($review->created_at)->diffForHumans()}}</p>
    </footer>
@endforeach    
</blockquote>
<p>{!!$reviews->links()!!}</p>
</div>
</div>
@endsection