<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('admin.post.create') }}" type="submit" class="uppercase mb-6 bg-blue-500 text-gray-100 text-sm font-bold py-2 px-4 rounded-3xl">New post</a>

                    <table class="table-fixed w-full bg-gray-50">
                        <thead>
                          <tr>
                            <th class="w-16 px-6 py-2 text-xs text-gray-500">id</th>
                            <th class="w-4/6 px-6 py-2 text-xs text-gray-500">Post name</th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($posts as $post)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ $post->id }}</td>
                                    <td class="px-6 py-4">{{ $post->title }}</td>
                                    <td><a href="{{ route('admin.post.show', $post->id) }}" class="border-2 border-gray-300 hover:border-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">Info</a></td>
                                    <td><a href="{{ route('admin.post.edit', $post->id) }}" class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">Edit</a></td>
                                    <td>
                                        <form action="{{ route('admin.post.delete', $post->id) }}" method="POST" class="w-full">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center cursor-pointer">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
