
   <x-guest-layout>
        <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 gap-6 mx-auto">
                    <div>
                    <h1 class="text-2xl text-grey-dark font-bold capitalize">{{ $category->name }}</h1>
                    </div>
                    <div class="grid justify-items-end">
                    <a href="/" class="btn btn-primary text-center text-white bg-green px-2 py-4 rounded-md capitalize" type="submit" >back to categories</a>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-6 bg-white border-b border-gray-200">
                <h3 class="text-md capitalize pb-2">Category Name:<span class="text-grey-dark capitalize font-bold "> {{ $category->name }}</span></h3>
                <h3 class="text-md capitalize pb-2"> Meta Title:<span class="text-grey-dark capitalize font-bold "> {{ $category->meta_title }}</span></h3>
                <h3 class="text-md capitalize pb-8">Meta Description:<span class="text-grey-dark capitalize font-bold "> {{ $category->meta_description }}</span></h3>
                <h3 class="text-md capitalize pb-2">Meta Keywords:</h3>
                <ul>   
                @forelse ($category->meta_keywords as $cat)
                    <li>
                        {{ $cat }}
                    </li>
                        @empty
                        <p>no meta</p>
                        @endforelse
                </ul>
                    <h3 class="text-md uppercase text-blue font-bold">Products:</h3>
                </div>
                </div>
                    <div class="grid grid-cols-4 gap-6 space-x-8 pt-10 px-8">


            @forelse($category->products as $prod)

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg hover:bg-blue hover:text-white px-8 py-8 ">
                            <a  href="{{ route ('getProductVariants', $prod->slug) }}" class="text-sm h-full">
                            <p class="mt-1 font-medium text-lg font-gothic-bold text-grey-dark uppercase hover:text-white">{{ $prod->name}}</p>
                            <p class="mt-1 font-medium text-md text-grey-dark font-gothic-bold hover:text-white "> {{$prod->slug}}</p>
                            </a>
                        </div>
            @empty

        <p class="outline-none ring-1 ring-offset-2 ring-orange">No products for this category</p>
            @endforelse

                    </div>
              
                </div>
        </div>
   </x-guest-layout>