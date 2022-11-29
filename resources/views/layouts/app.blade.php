<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8567cbef-b271-48ba-973d-e54a5cef8dda";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body class="antialiased">

    <div>
        <div class="isolate bg-white">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
                <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]"
                    viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3"
                        d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                    <defs>
                        <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177"
                            y2="474.645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9089FC"></stop>
                            <stop offset="1" stop-color="#FF80B5"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="px-6 pt-6 lg:px-8">
                <div>
                    <nav class="flex h-9 items-center justify-between" aria-label="Global">
                        <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
                            <a href="{{route('homepage')}}" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                    alt="">
                            </a>
                        </div>
             
                        <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:gap-x-12">
                            <!-- <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Product</a> -->

                    
                        </div>
                        <div class=" lg:flex lg:min-w-0 lg:flex-1 lg:justify-end">
                        
                                <a href="{{route('ask-form')}}" class="inline-block rounded-lg bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                                    Publica Tu Oferta
                                    <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
                                  </a>    
                        </div>
                    </nav>
                   
                </div>
            </div>
            <main>
                {{ $slot }}
            </main>
        </div>

    </div>

    <footer class="bg-white">
        <div class="mx-auto max-w-7xl overflow-hidden py-12 px-4 sm:px-6 lg:px-8">
          <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            <!-- <div class="px-5 py-2">
              <a href="#" class="text-base text-gray-500 hover:text-gray-900">About</a>
            </div> -->

          </nav>
       
          <p class="mt-8 text-center text-base text-gray-400">&copy; 2022 LinkForm, Inc. All rights reserved.</p>
        </div>
      </footer>
      






    @livewire('notifications')
</body>

</html>