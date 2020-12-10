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

                @include ('layouts.publish-tweet-panel')

                <div class="border border-gray-300 rounded-lg">

                    @include ('layouts.tweet')
                    @include ('layouts.tweet')
                    @include ('layouts.tweet')
                    @include ('layouts.tweet')

                </div>
            </div>

            <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">

                @include('layouts.friends-list')

            </div>
        </div>
    </section>
</x-app-layout>
