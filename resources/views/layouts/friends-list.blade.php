<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
@foreach (range(1, 8) as $index)
    <li class="mb-4">
        <div class="flex item-center">
            <img 
                src="https://i.pravatar.cc/40" 
                alt="webprimate-peep" 
                class="rounded-full mr-6">
            Alin Tentu
        </div>
    </li>
@endforeach
</ul>    