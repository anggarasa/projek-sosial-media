@extends('home.layouts.main')

@section('home')
<div class="p-8">
  {{-- Fitur Search --}}
  <form class="flex items-center max-w-sm mx-auto">   
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <ion-icon name="person-outline" class="w-4 h-4 text-gray-500"></ion-icon>
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-black focus:border-black block w-full ps-10 p-2.5" placeholder="Search User..." required />
    </div>
    <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-black rounded-lg border border-black hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-600">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
    </button>
  </form>

  <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
    <article class="rounded-xl border my-4 border-gray-400 bg-white">
      <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8">
        <a href="#" class="block shrink-0">
          <img
            alt=""
            src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXZhdGFyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60"
            class="size-14 rounded-lg object-cover"
          />
        </a>

        <div>
          <h3 class="font-medium sm:text-lg">
            <a href="#" class="hover:underline"> Adit_n </a>
          </h3>

          <p class="line-clamp-2 text-sm text-gray-700">
            Aditia Nugraha
          </p>

          <div class="mt-2 sm:flex sm:items-center sm:gap-2">
            <div class="flex items-center gap-1 text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z"></path></svg>

              <p class="text-xs">14 Pengikut</p>
            </div>

            <span class="hidden sm:block" aria-hidden="true">&middot;</span>

            <p class="hidden sm:block sm:text-xs sm:text-gray-500">
              Postingan
              <a href="#" class="font-medium underline hover:text-gray-700"> 23 </a>
            </p>
          </div>
        </div>
      </div>

      <div class="flex justify-center">
        <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex border border-black items-center text-black bg-transparent rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-black">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-black me-2" viewBox="0 0 24 24" fill="currentColor"><path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z"></path></svg>
          Ikuti
        </button>
      </div>
    </article>
    <article class="rounded-xl border-2 my-4 border-gray-100 bg-white">
      <div class="flex items-start gap-4 p-4 sm:p-6 lg:p-8">
        <a href="#" class="block shrink-0">
          <img
            alt=""
            src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YXZhdGFyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60"
            class="size-14 rounded-lg object-cover"
          />
        </a>

        <div>
          <h3 class="font-medium sm:text-lg">
            <a href="#" class="hover:underline"> Question about Livewire Rendering and Alpine JS </a>
          </h3>

          <p class="line-clamp-2 text-sm text-gray-700">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus, accusantium temporibus
            iure delectus ut totam natus nesciunt ex? Ducimus, enim.
          </p>

          <div class="mt-2 sm:flex sm:items-center sm:gap-2">
            <div class="flex items-center gap-1 text-gray-500">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"
                />
              </svg>

              <p class="text-xs">14 comments</p>
            </div>

            <span class="hidden sm:block" aria-hidden="true">&middot;</span>

            <p class="hidden sm:block sm:text-xs sm:text-gray-500">
              Posted by
              <a href="#" class="font-medium underline hover:text-gray-700"> John </a>
            </p>
          </div>
        </div>
      </div>

      <div class="flex justify-end">
        <strong
          class="-mb-[2px] -me-[2px] inline-flex items-center gap-1 rounded-ee-xl rounded-ss-xl bg-green-600 px-3 py-1.5 text-white"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
            />
          </svg>

          <span class="text-[10px] font-medium sm:text-xs">Solved!</span>
        </strong>
      </div>
    </article>
  </div>
</div>
@endsection