<?php

/** @var \App\Models\Category $category */

?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table-fixed mb-4 w-full bg-gray-50">
                        <tbody class="bg-white">
                            <tr class="whitespace-nowrap">
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">id</td>
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">{{ $category->id }}</td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">Category name</td>
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500"><b>{{ $category->title }}</b></td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">Created</td>
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">{{ $category->created_at->format('d-m-Y, H:i:s') }}</td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">Last Updated</td>
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">{{ $category->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="flex items-center justify-center mb-4">
                        <a href="{{ route('admin.category.edit', $category->id) }}" class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded-l inline-flex items-center">Edit</a>
                        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" class="w-full">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-4 rounded-r inline-flex items-center cursor-pointer">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
