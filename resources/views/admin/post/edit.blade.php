<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <script src="{{ asset('ckeditor4/ckeditor.js') }}"></script>
                    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>

                    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="w-full">
                        @csrf
                        @method('PATCH')
                        <div class="flex items-center border-b border-gray-400 border-teal-500 mb-4 py-2">
                          <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Post name" aria-label="Post name..." name="title" value="{{ $post->title }}">
                        </div>
                        @error('title')
                            <div class="text-red-600">Enter the post name!</div>
                        @enderror

                        <label class="block text-left" style="max-width: 300px">
                            <span class="text-gray-700">Select categories</span>
                            <select class="form-multiselect block w-full mt-1" name="category_id[]" multiple>
                                @foreach ($categories as $category)
                                    <option {{ is_array($post->categories->pluck('id')->toArray()) && in_array($category->id, $post->categories->pluck('id')->toArray()) ? ' selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </label>

                        @error('category_id')
                        <div class="text-red-600">Select the post category!</div>
                        @enderror

                        <textarea name="content" id="ckeditor" rows="10" cols="80">{{ $post->content }}</textarea>
                        
                        @error('content')
                            <div class="text-red-600">Enter the post content!</div>
                        @enderror

                        <div class="md:flex md:items-center mt-6">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">Select a preview image:</label>
                            <div class="md:w-1/3">
                                <input type="file" name="preview_image">
                            </div>
                            <div class="w-25 grid">
                                <span class="text-center mb-2">Current preview image:</span>
                                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="Preview image" class="h-40 border-2 px-6 py-2">
                            </div>
                        </div>

                        @error('preview_image')
                            <div class="text-red-600">Select preview image!</div>
                        @enderror

                        <input type="submit" class="flex-shrink-0 bg-purple-500 hover:bg-purple-700 border-purple-500 hover:border-purple-700 text-sm border-4 text-white mt-4 py-1 px-4 rounded cursor-pointer" value="Save changes">
                    </form>

                    <script>
                        var editor = CKEDITOR.replace( 'ckeditor' );
                        CKFinder.setupCKEditor( editor );
                    </script>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>