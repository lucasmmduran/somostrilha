<div>
  <a x-on:click="scrollToSection('home')" class="flex items-center space-x-2 lg:space-x-0 p-2  text-gray-700">
    {{-- <svg class="w-5 h-54 lg:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
    </svg> --}}
    <span
      class="border-b-2 border-white hover:border-primary-500 transition ease-in duration-75 cursor-pointer">Home</span>
  </a>
</div>

<div>
  <a href="{{ route('nosotros') }}" class="flex items-center space-x-2 lg:space-x-0 p-2  text-gray-700">
    <span
      class="border-b-2 border-white hover:border-primary-500 transition ease-in duration-75 cursor-pointer">Nosotros</span>
  </a>
</div>

<div>
  <a href="#" class="flex items-center space-x-2 lg:space-x-0 p-2  text-gray-700">
    <span
      class="border-b-2 border-white hover:border-primary-500 transition ease-in duration-75 cursor-pointer">Menú</span>
  </a>
</div>

<div>
  <a x-on:click="scrollToSection('contacto')"
    class="mt-4 lg:mt-0 w-full lg:w-auto inline-flex justify-center items-center space-x-2 lg:space-x-0 p-2 rounded text-white bg-primary-500 transition ease-in duration-75 hover:bg-primary-600 cursor-pointer">
    <span>Contacto</span>
  </a>
</div>