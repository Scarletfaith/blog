<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form action="{{ route('admin.category.update', $category['id']) }}" method="POST" enctype="multipart/form-data" class="w-full">
                        @csrf
                        @method('PATCH')
                        <div class="flex items-center border-b border-teal-500 py-2">
                          <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Category name" aria-label="Category name..." name="title" value="{{ $category['title'] }}">
                          <input type="submit" class="flex-shrink-0 bg-purple-500 hover:bg-purple-700 border-purple-500 hover:border-purple-700 text-sm border-4 text-white py-1 px-4 rounded" value="Save">
                        </div>
                        @error('title')
                            <div class="text-red-600">Enter the category name!</div>
                        @enderror
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
