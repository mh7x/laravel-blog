<x-layout>
    <x-setting heading="Manage posts">
        <ul role="list" class="divide-y divide-gray-100 border border-gray-100">
            @foreach ($posts as $post)
                <li class="p-5 hover:bg-gray-100">
                    <a href="/admin/posts/{{ $post->id }}/edit" class="flex justify-between gap-x-6">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $post->title }}</p>
                                <p class="mt-1 truncate text-xs leading-5 text-gray-500">Category: {{ $post->category->name }}</p>
                            </div>
                        </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm leading-6 text-gray-900">{{ $post->author->name }}</p>
                            <p class="mt-1 text-xs leading-5 text-gray-500">Posted <time>{{ $post->created_at->diffForHumans() }}</time></p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </x-setting>
</x-layout>