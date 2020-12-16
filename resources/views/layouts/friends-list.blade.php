<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
@foreach (auth()->user()->follows as $user)
    <li class="mb-4">
        <div>
            <a class="flex item-center text-lg" href="{{ route('profile', $user) }}">
                <img 
                    src="{{ $user->avatar }}" 
                    alt="webprimate-peep" 
                    width="50"
                    height="50"
                    class="rounded-full mr-4">
                {{ $user->name }}
            </a>    
        </div>
    </li>
@endforeach
</ul>    