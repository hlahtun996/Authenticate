@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table>
                    <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Code
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Show
                            </th>
                            <th>
                                Edit
                            </th>
                            <th>
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->code}}</td>
                                <td>{{$item->price}}</td>
                                <!--<td>
                        <img src="{{asset('/uploads/'.$item->photo)}}" width="80" height="80">
                        </td>-->
                               
                                <form action="{{ route('items.destroy',$item->id) }}" method="POST">
   
   <td><a class="btn btn-info" href="{{ route('items.show',$item->id) }}">Show</a></td>

   <td><a class="btn btn-primary" href="{{ route('items.edit',$item->id) }}">Edit</a></td>
    <td>
   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</dvi>

@endsection
