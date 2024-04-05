

    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">

        <div class="p-6 text-xl text-gray-900 dark:text-gray-100">

            <div class="flex items-center justify-between">

                <div>

            <x-create-vutton href="{{ route('todo.create') }}"  />

                </div>

            <div>

                @if (session('danger'))

                <p x-data="{ show:true}" x-show="show" x-transition

                x-init="setTimeout(() => show = false, 5000)"

                class="text-sm text-red-600 dark:text-red-400"> {{ session('danger') }}

            </p>

                        @endif
        </div>
    </div>
        </div>

        <div class="relative overfloe-x-auto">
