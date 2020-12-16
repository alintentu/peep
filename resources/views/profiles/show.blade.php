<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> -->
    </x-slot>
    <section class="container mx-auto" style="max-width: 1200px;">
        <div class="lg:flex lg:justify-between">
            <div class="lg:w-32">

                @include('layouts.sidebar-links')

            </div>

            <div class="lg:flex-1 lg:mx-10">

                <div class="border border-gray-300 rounded-lg">

                    <header class="mb-6 relative">

                        <img src="/images/me.jpg" alt="" class="mb-2 rounded-lg">

                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                                <p class="text-sm">{{ $user->email }}</p>
                            </div>

                            <div >
                                <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
                            </div>
                        </div>

                        <p class="text-sm">
                        Conducerea USR PLUS a decis, miercuri, să facă o contraofertă pentru PNL: prima variantă Cîțu-premier și 
                        șefia Camerei Deputaților la USR PLUS, sau, a doua variantă, Cioloș-premier, iar șefia Camerei...
                        </p>

                        <img src="{{ $user->avatar }}" class="rounded-full mr-2 absolute" style="width: 150px; left: calc(50% - 75px); top:68%">

                    </header>

                    @include('timeline', [
                        'tweets' => $user->tweets
                    ])
                    
                </div>

            </div>

            <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">

                @include('layouts.friends-list')

            </div>
        </div>
    </section>
</x-app-layout>