<section id="trabajos" class="bg-white lg:py-20 py-10">
  <div class="container mx-auto px-4">

    <h3 class="text-2xl font-extralight mb-12 font-title text-gray-500 text-center">
      Marcas que confían en nosotros
    </h3>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <div class="w-full">
      <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
          autoplay: true,
          loop: true,
          slidesPerView: 2.5,
          spaceBetween: 12,
          breakpoints: {
            640: {
              slidesPerView: 2.5,
              spaceBetween: 12,
            },
            768: {
              slidesPerView: 5,
              spaceBetween: 12,
            },
            1024: {
              slidesPerView: 5,
              spaceBetween: 12,
            },
          },
        })" class="relative w-full h-full mx-auto flex flex-row">

        {{-- <div class="inset-y-0 left-0 z-10 flex items-center -mr-10">
          <button x-on:click="swiper.slidePrev()"
            class="bg-white flex justify-center items-center w-8 h-8 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div> --}}

        <div class="swiper" x-ref="container">
          <div class="swiper-wrapper">

            @for($i = 1; $i < 12; $i++) <div class="swiper-slide">
              <img class="rounded-lg shadow-lg" src='{{ asset("storage/works/$i.png")}}' />
          </div>
          @endfor

        </div>
      </div>


      {{-- <div class="inset-y-0 right-0 z-10 flex items-center -ml-10">
        <button x-on:click="swiper.slideNext()"
          class="bg-white flex justify-center items-center w-8 h-8 rounded-full shadow focus:outline-none">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div> --}}

    </div>

  </div>


  </div>
</section>