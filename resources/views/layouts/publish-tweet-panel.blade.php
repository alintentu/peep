
                <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8"> 
                    <form method="POST" action="/tweets">

                    @csrf

                        <textarea style="border-color: white;" name="body" class="w-full" placeholder="what's up? required">
                        
                        </textarea>

                        <hr class="my-4">

                        <footer class="flex justify-between">
                            <img 
                                src="{{ auth()->user()->avatar }}" 
                                alt="avatar-peep" 
                                class="rounded-full mr-4">

                            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Peep-a-roo!</button>
                        </footer>
                    </form>

                    @error('body')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>