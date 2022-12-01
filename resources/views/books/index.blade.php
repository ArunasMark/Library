@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-center">Knygos</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Knygos paieska</h5>
                                    <form method="post" action="{{route('books.search')}}">
                                        @csrf
                                        <label class="form-label">Paieska pagal pavadinima: </label>
                                        <input type="text" value="" name="name">
                                        <button class="btn btn-sm btn-secondary ms-3">Ieskoti</button>
                                    </form>
                                </div>
                                @can('create')
                                    <div class="mt-4">
                                        <a class="btn btn-sm btn-secondary mb-0 " href="{{route('books.create')}}">
                                            Prideti nauja knyga</a>
                                    </div>
                                @endcan
                            </div>
                            <hr>
                            <table class="table mt-3 text-center">
                                <thead class="">
                                <tr class="text-center">
                                    <th>Knygos pavadinimas</th>
                                    <th>Knygos kategorija</th>
                                    <th>Knygos aprasymas</th>
                                    <th>ISBN numeris</th>
                                    <th>Puslapiu skaicius</th>
                                    <th>Nuotrauka</th>
                                    <th>Rezervuoti</th>
                                    @can('edit', 'delete')
                                        <th></th>
                                    @endcan
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{$book->name}}</td>
                                        <td>{{$book->category->name}}</td>
                                        <td>{{$book->description}}</td>
                                        <td>{{$book->IsbnNumber}}</td>
                                        <td>{{$book->NumberOfPage}}</td>
                                        <td>{{$book->photo}}</td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">

                                            </label>
                                        </td>
                                        @can('edit', 'delete')
                                            <td>
                                                <div class="float-end d-flex ms-5">
                                                    <a class="btn btn-sm btn-secondary me-3 mt-4" href="{{route('books.edit',
                                            $book->id)}}">Redaguoti</a>
                                                    <form action="{{route('books.destroy', $book->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger mt-4">Istrinti</button>
                                                    </form>
                                                </div>
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


