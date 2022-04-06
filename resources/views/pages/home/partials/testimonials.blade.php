<section id="testimonials" class="bg-white lg:py-10 py-4">
  <div class="container mx-auto px-4">

    <h3 class="font-secondary text-5xl font-extralight text-black lg:mb-8 mb-4 lg:mx-24 font-title">
      Testimonios
    </h3>

    <div class="w-full">
      <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
          autoplay: true,
          loop: true,
          slidesPerView: 1,
          spaceBetween: 0,
          breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 0,
            },
            768: {
              slidesPerView: 1,
              spaceBetween: 0,
            },
            1024: {
              slidesPerView: 1,
              spaceBetween: 0,
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

            <div class="swiper-slide">
              <div class="w-full flex justify-center items-center py-4">
                <div class="w-full lg:mx-24 bg-white p-8 lg:shadow-lg shadow-none rounded-lg">

                  <div class="flex items-center space-x-4">
                    {{-- <img src="{{ asset('img/testimonios/sheila.jpg')}}" class="w-20 rounded-full"> --}}
                    <p class="font-bold text-black text-xl mb-4">Sheila</p>
                  </div>

                  <div class="w-full mt-4">
                    <p class="text-lg font-light text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Iste odio inventore aliquam laudantium cupiditate ad. Architecto vitae voluptas odio quis quasi,
                      dolores, perspiciatis illo aut voluptatum distinctio iste, exercitationem consectetur.</p>

                    <div class="flex items-center mt-2">
                      @for($i=0;$i<4;$i++) <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                        </svg>
                        @endfor
                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                    </div>

                  </div>

                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="w-full flex justify-center items-center py-4">
                <div class="w-full lg:mx-24 bg-white p-8 lg:shadow-lg shadow-none rounded-lg">

                  <div class="flex items-center space-x-4">
                    {{-- <img src="{{ asset('img/testimonios/giuliana.jpg')}}" class="w-20 rounded-full"> --}}
                    <p class="font-bold text-black text-xl mb-4">Giuliana Orsini</p>
                  </div>

                  <div class="w-full mt-4">
                    <p class="text-lg font-light text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Iste odio inventore aliquam laudantium cupiditate ad. Architecto vitae voluptas odio quis quasi,
                      dolores, perspiciatis illo aut voluptatum distinctio iste, exercitationem consectetur.</p>
                    <div class="flex items-center mt-2">
                      @for($i=0;$i<4;$i++) <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                        </svg>
                        @endfor
                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                    </div>

                  </div>

                </div>
              </div>
            </div>



            <div class="swiper-slide">
              <div class="w-full flex justify-center items-center py-4">
                <div class="w-full lg:mx-24 bg-white p-8 lg:shadow-lg shadow-none rounded-lg">

                  <div class="flex items-center space-x-4">
                    {{-- <img src="{{ asset('img/testimonios/carla.jpg')}}" class="w-20 rounded-full"> --}}
                    <p class="font-bold text-black text-xl mb-4">Carla</p>
                  </div>

                  <div class="w-full mt-4">
                    <p class="text-lg font-light text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Iste odio inventore aliquam laudantium cupiditate ad. Architecto vitae voluptas odio quis quasi,
                      dolores, perspiciatis illo aut voluptatum distinctio iste, exercitationem consectetur.</p>

                    <div class="flex items-center mt-2">
                      @for($i=0;$i<4;$i++) <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                        </svg>
                        @endfor
                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                    </div>

                  </div>

                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="w-full flex justify-center items-center py-4">
                <div class="w-full lg:mx-24 bg-white p-8 lg:shadow-lg shadow-none rounded-lg">

                  <div class="flex items-center space-x-4">
                    {{-- <img src="{{ asset('img/testimonios/maria.jpg')}}" class="w-20 rounded-full"> --}}
                    <p class="font-bold text-black text-xl mb-4">María Servin</p>
                  </div>

                  <div class="w-full mt-4">
                    <p class="text-lg font-light text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Iste odio inventore aliquam laudantium cupiditate ad. Architecto vitae voluptas odio quis quasi,
                      dolores, perspiciatis illo aut voluptatum distinctio iste, exercitationem consectetur.</p>

                    <div class="flex items-center mt-2">
                      @for($i=0;$i<4;$i++) <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                        </svg>
                        @endfor
                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                    </div>

                  </div>

                </div>
              </div>
            </div>




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