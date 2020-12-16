<div class="border border-gray-300 rounded-lg">

@foreach ($tweets as $tweet)
    @include ('layouts.tweet')
@endforeach

</div>