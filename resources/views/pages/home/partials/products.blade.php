<section id="productos" class="bg-white lg:py-20 py-10">
  <div class="container mx-auto px-4">

    <div class="flex justify-center items-center space-x-4">
      <h3 class="text-5xl font-extralight text-black font-title">
        Productos
      </h3>
    </div>

    <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 lg:mt-12 mt-8">
      @foreach($products as $key => $product)
      <article class="{{ ($key == 0) ? " lg:col-span-2 col-span-1" : "col-span-1" }} relative w-full h-120 bg-cover
        bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 ease-in-out"
        style="background-image: url('{{$product->image_path }}');" />
      <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-50 transition duration-300 ease-in-out">
      </div>
      <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-end pb-12">
        <div class="text-center text-white">
          <h3 class="mb-10 text-3xl text-center font-educationTitle uppercase">{{ $product->title }}</h3>
          <a href="/educacion/{{ $product->slug }}"
            class="px-4 py-2 uppercase  border-gray-300 border-2 text-base hover:bg-primary-800 transition ease-in duration-200">
            VER DETALLES
          </a>
        </div>
      </div>
      </article>
      @endforeach
    </div>

  </div>
</section>