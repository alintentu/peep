
<div class="flex p-4 {{ $loop->last ? '' : 'border border-b border-b-gray-400' }}">

    <div class="mr-2 flex-shrink-0">

        <a href="{{ $tweet->user->path() }}">
            <img 
                src="{{ $tweet->user->avatar }}" 
                alt="webprimate-peep" 
                width="50"
                height="50"
                class="rounded-full mr-6">
        </a>

    </div>

    <div>

        
            <h5 class="font-bold mb-4">
                <a href="{{ $tweet->user->path() }}">{{ $tweet->user->name }}</a>
            </h5>
        

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>

</div>