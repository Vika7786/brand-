@extends('layouts.base')
@section('content')
<div class="p-9">



<marquee>{{$maintext->discription_small}}</marquee>



<div class="min-h-screen flex flex-col px-8 justify-center bg-white">
  <!-- Themes: blue, purple and teal -->
  <div data-theme="teal" class="mx-auto max-w-6xl">
    <h2 class="leading-tight text-4xl font-bold mb-9">{{$maintext->name}}</h2>

    <section class="font-sans text-black">
      <div class="[ lg:flex lg:items-center ] [ fancy-corners fancy-corners--large fancy-corners--top-left fancy-corners--bottom-right ]">
        <div class="flex-shrink-0 self-stretch sm:flex-basis-40 md:flex-basis-50 xl:flex-basis-60">
          <div class="h-full">
            <article class="h-full">
              <div class="h-full">
                <img class="h-full object-cover" src="{{asset('storage/'.$maintext->picture)}}" width="733" height="412" alt='""' typeof="foaf:Image" />
              </div>
            </article>
          </div>
        </div>
        <div class="p-6 bg-grey">
          <div class="leading-relaxed">
          {{$maintext->discription_small}}            
        </div>
        </div>
        
      </div>
      <div class="prose max-w-none mt-10">
       {!!$maintext->body!!}

          
      </div>
    </section>
  </div>
</div>
</div>



@endsection
