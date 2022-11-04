@props(['name'])

<x-backend.form.field >

    <input name="{{ $name }}" class="form-control" id="{{ $name }}" {{ $attributes }} required>

    <x-backend.form.label name="{{ $name }}" />

    <x-backend.form.error name="{{ $name }}" />

</x-backend.form.field>