<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Gallery') }}
            </h2>
            <div>
                <a href="{{ route('galleries.create') }}" class="dark:text-white hover:text-slate-200">New Gallery</a>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Caption
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($galleries as $gallery)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $gallery->image }}
                                    <img class="w-20 h-20" src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->caption }}">
                                </th>
                                <td class="px-6 py-4">
                                    {{ $gallery->caption }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('galleries.edit', $gallery) }}" class="text-white bg-blue-400 hover:bg-blue-500 d-inline-block px-3 py-2 rounded-md text-sm">
                                            {{ __('Edit') }}
                                        </a>
                                        <form method="POST" action="{{ route('galleries.destroy', $gallery) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('galleries.destroy', $gallery) }}" class="text-white bg-red-500 hover:bg-red-600 block px-3 py-2 rounded-md h-full w-full text-sm"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </a>
                                        </form>
                                    </div>
                                    
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                    No galleries found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
