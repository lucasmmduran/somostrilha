<section id="servicios" class="bg-black lg:py-20 py-10">
  <div class="container mx-auto px-4">

    <div class="flex justify-center items-center space-x-2">
      <h3 class="text-5xl font-extralight text-white font-title">
        Servicios MUD
      </h3>
      <svg class="w-12 h-12 text-primary-800 rounded-full " fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
          clip-rule="evenodd"></path>
      </svg>
    </div>

    <div class="grid lg:grid-cols-5 grid-cols-2 gap-4 mt-8">
      @foreach($services as $key => $service)
      <div class="bg-white rounded-lg w-full h-full {{ ($key == 0) ? " lg:col-span-1 col-span-2"
        : "lg:col-span-1 col-span-1" }}">
        <img src="{{ asset('img/servicios/'.$key.'.jpg?2') }}"
          class="object-cover object-center h-64 rounded-t-lg w-full" />
        <div class="px-2 flex justify-center items-end pb-4">
          <div class="py-4">
            <div class="text-center text-black">
              <h3 class="text-lg font-title uppercase">{{ $service->title }}</h3>
              {{-- <a href="#"
                class="px-4 py-2 uppercase font-bold border-primary-700 text-primary-700 border-2 text-base hover:bg-primary-800 hover:text-white transition ease-in duration-200">
                VER DETALLES
              </a> --}}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>