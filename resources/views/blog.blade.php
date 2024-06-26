<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <article class="py-5 max-w-screen-md border-b border-gray-300">
      <h3 class="mb-2 text-2xl tracking-tight font-bold text-gray-800">{{ $blog ['title'] }}</h3>
    <div class="text-base text-gray-500">
      <a href="#">{{ $blog ['author'] }}</a> | 1 January 2024
    </div>
    <p class="my-4 font-light">
      {{ $blog ['body'] }}
    </p>
    <a href="/blogs" class="font-medium text-gray-500 hover:underline">Back &laquo;</a>
  </article>
</x-layout>
        