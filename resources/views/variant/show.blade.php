<x-app-layout>
<x-slot name="header">
<div class="grid grid-cols-2 gap-6 mx-auto">
                    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Variant') }}
        </h2>
        </div>
                    <div class="grid justify-items-end">
                    <a href="/variants" class="btn btn-primary text-center text-white bg-green px-4 py-4 rounded-md capitalize" type="submit" >Back</a>
                    </div>
                </div>
    </x-slot>
        <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 gap-6 mx-auto">
                    <div>
                    <h1 class="text-2xl text-grey-dark font-bold capitalize">{{ $variants->name }}</h1>
                    </div>
                  
                </div>
               
                    <div class="grid grid-cols-1 gap-6  pt-10 px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-md capitalize pb-2">Variant Name:<span class="text-grey-dark capitalize font-bold "> {{ $variants->name }}</span></h3>
                    <h3 class="text-md capitalize pb-2">Web Product Code:<span class="text-grey-dark capitalize font-bold "> {{ $variants->web_product_code }}</span></h3>
                    <h3 class="text-md capitalize pb-2">Sap Product Code :<span class="text-grey-dark capitalize font-bold "> {{ $variants->sap_product_code }}</span></h3>
                    <a href="/variants" type="button" class="bg-green px-2 py-2 rounded-lg text-white ml-4">Back</a>   
                </div></div>
                    </div></div></div>
</x-app-layout>