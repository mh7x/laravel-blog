<x-layout>
    <x-setting :heading="'Edit post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)"  />
            <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl mt-5" width="200" >
            <x-form.textarea name="excerpt">{{ $post->excerpt }}</x-form.textarea>
            <x-form.textarea name="body">{{ $post->body }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                    <option 
                        value="{{ $category->id }}" 
                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}
                    >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </x-form.field>

            <div class="flex my-6 pt-6 border-t border-gray-200 gap-x-10">
                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Update</button>
            </div>
        </form>

        <form method="POST" action="/admin/posts/{{ $post->id }}">
            @csrf
            @method('DELETE')
            <button class="bg-red-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Delete</button>
        </form>
    </x-setting>
</x-layout>