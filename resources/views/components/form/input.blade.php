@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name) }}" id="{{ $name }}" required class="border border-gray-200 rounded p-2 w-full">
    <x-form.error name="{{ $name }}"/>
</x-form.field>