<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
    <img class="rounded-t-lg" src="{{ $imgsrc }}" alt="{{ $title }}" />
  </a>
  <div class="p-5">
    <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $desc }}</p>
    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
      Read more
      <svg class="w-3.5 h-3.5 ms-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
      </svg>
    </a>
  </div>
</div>
