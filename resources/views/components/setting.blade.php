@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h4 class="text-xl font-bold my-8 pb-3 border-b">{{ $heading }}</h4>

    <div class="flex">
        <aside class="w-48">
            <h4 class="font-bold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Dashboard</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <div class="border border-gray-200 p-6 rounded-xl">
                {{ $slot }}
            </div>
        </main>
    </div>
</section>