@extends("layout.app")

@section("content")

<div id="products">
    @foreach ($products as $product)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <a href="{{ route('product', ['id' => $product->id]) }}">
                <img class="rounded-t-lg" src="{{$product->img}}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$product->name}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">{{"Price : " . $product->price . "€"}} </p>
                <a href="{{route('update_r_product', ['id' => $product->id]);}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Edit info
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    @endforeach
</div>

    {{-- --}}
    <!-- <ul>
        @foreach ($products as $product)
        <li> <a href="{{ route('product', ['id' => $product->id]) }}"> {{$product->name}} </a>  
            {{ " - " . $product->price . "€"}} 
            <button  onclick="window.location= '{{route('update_r_product', ['id' => $product->id]);}}'"> Edit </button>
            <form action="{{ route("del_product") }}" method="POST" style="display :inline;">
                @csrf {{ csrf_field() }} 
                <input type="hidden" name="id" value={{$product->id}}>
                <input type="submit" value="Supprimer"> 
            </form>
        </li>
        @endforeach
    </ul> -->
    <button  onclick="window.location= '{{route('new_product');}}'"> Ajouter nouveau produit </button>
@endsection
    
