<x-guest-layout>
        <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 gap-6 mx-auto">
                    <div>
                    <h1 class="text-2xl text-grey-dark font-bold capitalize">{{ $product->name }}</h1>
                    </div>
                    <div class="grid justify-items-end">
                    <a href="/" class="btn btn-primary text-center text-white bg-green px-2 py-4 rounded-md capitalize" type="submit" >back to categories</a>
                    </div>
                </div>
               
                    <div class="grid grid-cols-1 gap-6  pt-10 px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-md capitalize pb-2">Product Name:<span class="text-grey-dark capitalize font-bold "> {{ $product->name }}</span></h3>
                    <h3 class="text-md uppercase text-blue font-bold">Variant:</h3>
                    <ul>
                        @forelse ($product->variants as $prod)
                   
                        <li>
                        <span class="text-grey-dark capitalize font-bold "> Name: </span>  {{ $prod->name }}
                        </li>
                        <li>
                        <span class="text-grey-dark capitalize font-bold "> Web Product Code:</span> {{ $prod->web_product_code}}
                        </li>
                        <li>
                        <span class="text-grey-dark capitalize font-bold "> Sap Product Code:</span> {{ $prod->sap_product_code}}
                        </li>
                        @empty
                        <p class="outline-none ring-1 ring-offset-2 ring-orange">This product doesn't have variants</p>

               
                        @endforelse
                    </ul>
                    </div></div>
                    </div></div></div>
</x-guest-layout>