{{-- untuk menghilangkan php di htmlnya  --}}
@props(['active' => false])

{{-- ika $active bernilai true (artinya link tersebut sesuai dengan URL saat ini), maka kelas bg-gray-900 text-white akan diterapkan. Ini akan memberi latar belakang hitam dan teks putih ke link tersebut, menunjukkan bahwa link sedang aktif. --}}
<a {{ $attributes }}
class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} px-3 py-2 text-sm font-medium" aria-current="{{ request()->is('/') ? 'page' : false }}">{{ $slot }}
</a>

