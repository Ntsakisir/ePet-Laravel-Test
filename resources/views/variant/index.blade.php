<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Variants') }}
        </h2>
    </x-slot>
<div class="w-full m-w-2xl m-16">
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
                    <a href="{{route ('addVariant', $product->id) }}" type="button" class="btn btn-primary ml-4">Add</a>
                </td>
                <td>
                    <a type="button" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a type="button" class="btn btn-primary">Delete</button>
                </td>
                </tr>
               @endforeach
         
       </tbody>
   </table>
</div>
</x-app-layout>