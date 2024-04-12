@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    <textarea type="text" name="{{ $name }}" id="{{ $name }}" required class="border border-gray-200 rounded p-2 w-full">{{ ucwords(old($name)) }}</textarea>
    <x-form.error name="{{ $name }}"/>
</x-form.field>