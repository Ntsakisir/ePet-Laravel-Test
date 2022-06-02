<x-app-layout>
    <x-slot name="header">
    <div class="grid grid-cols-2 gap-6 mx-auto">
                    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
        </div>
                    <div class="grid justify-items-end">
                    <a href="{{ route('createProduct') }}" class="btn btn-primary text-center text-white bg-green px-2 py-4 rounded-md capitalize" type="submit" >add new product</a>
                    </div>
                </div>
    </x-slot>
    <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
         
        <th  scope="col" class="px-6 py-3">
                   ID
               </th>
               <th  scope="col" class="px-6 py-3">
                   Name
               </th>
               <th  scope="col" class="px-6 py-3">
                   Action
               </th>
        
       </thead>
       <tbody>
           
               @forelse ($products as $product)
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <td class="px-6 py-4">
                    {{ $product->id }}
                </td>
          <td class="px-6 py-4">
                    {{ $product->name }}
                </td>
         
          <td class="px-6 py-4">
          <a  href="{{ route ('getProductVariants', $product->slug) }}" type="button" class="bg-green px-2 py-2 rounded-lg text-white ml-4">view</a>
                </td>
          <td class="px-6 py-4">
                    <a href="{{ route ('editProduct', $product->id) }}" type="button" class="bg-yellow px-2 py-2 rounded-lg text-white ml-4">Edit</a>
                </td>
          <td class="px-6 py-4">
          <form method="POST" action="{{route ('destroyProduct', ['id' => $product->id ] )}}">
                @method('delete')
                                @csrf
                                <button type="submit" class="bg-red px-2 py-2 rounded-lg text-white ml-4" onclick="return confirm('Are you sure ?')"> <span><i class="fas fa-trash"></i></span>
                                    {{ __('Delete') }}
                                </button>
                            </form>
                </td>
                </tr>

                @empty

                <p>no products to display</p>
               @endforelse
         
       </tbody>
   </table>
</div>
                </div></div>
</x-app-layout>