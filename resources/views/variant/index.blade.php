<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Variants') }}
        </h2>
    </x-slot>
<div class="w-full m-w-2xl m-16">
   <table class="mb-10">
       <thead>
         
               <th>
                   ID
               </th>
               <th>
                  Product Name
               </th>
               <th>
                   Action
               </th>
        
       </thead>
       <tbody>
           
               @foreach ($products as $product)
               <tr>
                <td>
                    {{ $product->id }}
                </td>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    <a href="{{route ('addVariant', $product->id) }}" type="button" class="bg-green px-2 py-2 rounded-lg text-white ml-4">Add Variant</a>
                </td>
               
                </tr>
               @endforeach
         
       </tbody>
   </table>
<table>
   <thead>
         
         <th>
             ID
         </th>
         <th>
             Name
         </th>
         <th>
             Action
         </th>
  
 </thead><tbody>
               @foreach ($variants as $variant)
               <tr>
                <td>
                    {{ $variant->id }}
                </td>
                <td>
                    {{ $variant->name }}
                </td>
                <td>
                    <a href="{{ route ('show', $variant->id) }}" type="button" class="bg-green px-2 py-2 rounded-lg text-white ml-4">View</a>
                </td>
                <td>
                    <a href="{{ route ('editVariant', $variant->id) }}" type="button" class="bg-yellow px-2 py-2 rounded-lg text-white ml-4">Edit</a>
                </td>
                <td>
                <form method="POST" action="{{route ('destroy', ['id' => $variant->id ] )}}">
                @method('delete')
                                @csrf
                                <button type="submit" class="bg-red px-2 py-2 rounded-lg text-white ml-4" onclick="return confirm('Are you sure ?')"> <span><i class="fas fa-trash"></i></span>
                                    {{ __('Delete') }}
                                </button>
                            </form>
                </td>
                </tr>
               @endforeach
         
       </tbody>
   </table>
</div>
</x-app-layout>