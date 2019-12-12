@extends('layouts.app')

@section('content')

    

   
            
           
              
                
                <h1>Name: {{ $product->productName }}</h1>
                <h4>ID : {{ $product->id }}</h4>
                <div>
                    <p>Details</p>
                    <p>{{ $product->details}}</p>
                    
                </div>
                
                <p>DETAILS : {{ $product->quantity}}</p>
                <p>PRICE : {{ $product->price }}</p>
                <p>ENTRY :  <br>By: {{ $product->user->name }} <br> At: {{ $product->created_at}}</p>
                <hr>
                @if (!Auth::guest())
                @if (Auth::user()->id == $product->user_id)
                    <div>
                    <p><a href="/Products/{{$product->id}}/edit" class="btn btn-secondary">Edit</a></p>

                <form  action="{{ route('Products.destroy', $product['id']) }}"  method="POST" class="pull-right">
                    {{method_field('DELETE')}}
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                 </form>
                </div>
                @endif
                
                @endif
                
              
              
       
    
       

        
                
                
            
        
            
    
    
@endsection