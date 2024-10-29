<x-layout>
  {{-- untuk mengirimkan variable ke layout karena tidak bisa langsung dari route ke layout --}}
  <x-slot:title> {{ $title }} </x-slot>
  <h3 class="text-xl">Ini adalah halaman About</h3>
  <p>Halo {{ $name; }}</p>
</x-layout>