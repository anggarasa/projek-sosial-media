@extends('home.layouts.main')
@section('home')
<div class="p-16">
    <div class="p-8 mt-24">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                <div>
                    <p class="font-bold text-gray-700 text-xl">22</p>
                    <p class="text-gray-400">Friends</p>
                </div>
                <div>
                    <p class="font-bold text-gray-700 text-xl">10</p>
                    <p class="text-gray-400">Photos</p>
                </div>
                <div>
                    <p class="font-bold text-gray-700 text-xl">89</p>
                    <p class="text-gray-400">Comments</p>
                </div>
            </div>
            <div class="relative">
                <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                </div>
            </div>
            <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
                <a href="/profile-edit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                <button  class="text-white py-2 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">  Message</button>
            </div>
        </div>
            <div class="mt-20 text-center border-b-2 pb-12">
                <h1 class="text-4xl font-medium text-gray-700">{{ $user->username }}</h1>
                <p class="font-light text-gray-600 mt-3">{{ $user->name }}</p>
                <p class="mt-8 text-gray-500"><ion-icon name="call-outline"></ion-icon> +62 {{ $user->nohp }}</p>
                <p class="mt-2 text-gray-500"><ion-icon name="mail-outline"></ion-icon> {{ $user->email }}</p>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-8 mt-8 lg:grid-cols-2">
            <article class="overflow-hidden my-5 rounded-b-lg border-b-4 transition">
                <div class="flex items-center px-2 mb-5 justify-between">
                    <div class="flex items-center">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link">Khatab wedaa</a>
                    </div>
                    <p class="text-black text-xs md:text-sm">1 MIN READ</p>
                </div>
                <img
                  alt=""
                  src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                  class="h-56 w-full object-cover"
                />
              
                <div class="bg-white p-4 sm:p-6">
                    <a href="#" class="text-2xl mr-3"><ion-icon name="heart-outline"></ion-icon></a>
                    <a href="#" class="text-2xl"><ion-icon name="chatbubble-outline"></ion-icon></a>
              
                  <a href="#">
                    <h3 class="mt-0.5 text-lg text-gray-900">How to position your furniture for positivity</h3>
                  </a>
              
                  <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                    dignissimos. Molestias explicabo corporis voluptatem?
                  </p>
                </div>
            </article>
            <article class="overflow-hidden my-5 rounded-b-lg border-b-4 transition">
                <div class="flex items-center px-2 mb-5 justify-between">
                    <div class="flex items-center">
                        <img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link">Khatab wedaa</a>
                    </div>
                    <p class="text-black text-xs md:text-sm">1 MIN READ</p>
                </div>
                <img
                  alt=""
                  src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                  class="h-56 w-full object-cover"
                />
              
                <div class="bg-white p-4 sm:p-6">
                    <a href="#" class="text-2xl mr-3"><ion-icon name="heart-outline"></ion-icon></a>
                    <a href="#" class="text-2xl"><ion-icon name="chatbubble-outline"></ion-icon></a>
              
                  <a href="#">
                    <h3 class="mt-0.5 text-lg text-gray-900">How to position your furniture for positivity</h3>
                  </a>
              
                  <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                    dignissimos. Molestias explicabo corporis voluptatem?
                  </p>
                </div>
            </article>
        </div>
    </div>
@endsection