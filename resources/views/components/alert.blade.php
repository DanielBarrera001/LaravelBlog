@props(['type'])

@php
    switch ($type) {
        case 'info':
            $class = 'text-fg-brand-strong';
            break;

        case 'danger':
            $class = 'text-fg-danger-strong';
            break;

        case 'success':
            $class = 'text-fg-success-strong';
            break;

        case 'warning':
            $class = 'text-fg-warning rounded-base';
            break;

        case 'dark':
            $class = 'text-heading rounded-base';
            break;
        
        default:
            $class = 'text-gray-500'; 
            break;
    }    

@endphp

<div class="p-4 mb-4 text-sm {{$class}} rounded-base bg-brand-softer" role="alert">
  <span class="font-medium">{{$title ?? 'Info alert!'}}</span> {{$slot}}
</div>