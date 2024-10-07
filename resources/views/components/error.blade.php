@props([
    'errors'
])

@if($errors)
    <ul class='text-sm text-red-600 space-y-1'>
        @foreach ($errors->all() as $error)
        <li class="mt-3 text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
@endif