

    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">

        <div class="p-6 text-xl text-gray-900 dark:text-gray-100">

            @if (request('search'))

            <h2 class="pb-3 font-semibold leading-tight text-gray-800 text-x1 dark:text-gray-200">

                Search results for : {{  request('search') }}

            </h2>

            @endif

            <form class="flex items-center gap-2">

                <x-text-input id="search" name="search" type="text" class="w-full"

                placeholder="Search by name or email ..." value="{{ request('search') }}" autofocus/>

                <x-primary-button type ="submit">

                {{ __('Search') }}

                </x-primary-button>

            </form>

        </div>

        <div class ="px-6 text-gray-900 text-x1 dark:text-gray-100">

            <div class="flex items-center justify-between">

                <div> </div>

            <div>

                @if (session('success'))

                <p x-data="{ show:true}" x-show="show" x-transition

                x-init="setTimeout(() => show = false, 5000)"

                class="text-sm text-green-600 dark:text-green-400"> {{ session('success') }}

            </p>

             @endif

             @if (session('danger'))

             <p x-data="{ show: true}" x-show x-transition

             x-init="setTimeout(() => show = false, 5000)"

             class="pb-3 text-sm text-red-600 dark:text-red-400">{{  session('danger') }}

        </p>

        @endif


    </div>

        </div>

    </div>

        <div class="relative overflow-x-auto">

            {{-- Action Here --}}

            @if ($todo->is_complete == false)

            <form action="{{ route('todo.complete', $todo) }}" method="Post">

                @csrf

                @method('PATCH')

                <button type="submit"

                class="text-green-600 dark:text-green-400">

                                        Complete

                </button>

            </form>

            @else

            <form action="{{ route('todo.uncomplete', $todo) }}" method="Post">

                @csrf

                @method('PATCH')

                <button type="submit"

                class="text-blue-600 dark:text-blue-400">

                                        Uncomplete


            </button>

        </form>

        @endif

    </div>
