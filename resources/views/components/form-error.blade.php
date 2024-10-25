<!-- resources/views/components/form-error.blade.php -->
@error($name)
    <span class="text-red-600 text-sm font-medium bg-red-100 border border-red-300 rounded-md p-2 mt-1 block">
        {{ $message }}
    </span>
@enderror
