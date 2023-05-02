@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:ring-rose-600 dark:focus:border-rose-600 focus:border-rose-600 dark:focus:border-rose-600 rounded-md shadow-sm']) !!}>
