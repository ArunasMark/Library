@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-center">Knygu kategorijos</div>
                        <div class="card-body">
                            @can('create')
                                <a class="btn btn-secondary float-end" href="{{route('category.create')}}">
                                    Prideti nauja kategorija</a>
                            @endcan
                            <table class="table text-center">
                                <thead class="text-center">
                                <tr>
                                    <th>Kategorijos pavadinimas</th>
                                    <th>Knygos</th>
                                    @can('edit', 'delete')
                                        <th></th>
                                    @endcan
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->name}}</td>
                                        <td>
                                            <a href="{{route('categoryBooks', $category->id)}}" class="btn
                                            btn-info">Knygos</a>
                                        </td>
                                        @can('edit','delete')
                                            <td class="float-end d-flex">

                                                <a class="btn btn-secondary me-2" href="{{route('category.edit',
                                            $category->id)}}">Redaguoti</a>

                                                <form action="{{route('category.destroy', $category->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">Istrinti</button>
                                                </form>

                                            </td>
                                        @endcan
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

