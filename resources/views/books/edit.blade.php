@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Prideti knyga</div>
                    <div class="card-body">
                        <form method="POST" action="{{isset($book)?route('books.update',
                        $book->id):route
                        ('books.store')}}" enctype="multipart/form-data">
                            @csrf
                            @if (isset($book))
                                @method('put')
                            @endif
                            <div class="mb-3">
                                <label class="form-label float-start">Pasirinkite kategorija:</label>
                                <select name="category_id" class="form-select">

                                    <option selected>Pasirinkti</option>

                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{ isset($book)&&($category->id==$book->category_id)?'selected':'' }}>
                                            {{$category->name}}
                                        </option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">Pavadinimas:</label>
                                <input class="form-control" name="name" type="text" value="{{isset($book)
                                ?$book->name:''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">Aprasymas:</label>
                                <input class="form-control" name="description" type="text" value="{{isset($book)
                                ?$book->description:''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">ISBN numeris:</label>
                                <input class="form-control" name="IsbnNumber" type="number" value="{{isset($book)
                                ?$book->IsbnNumber:''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">Puslapiu skaicius:</label>
                                <input class="form-control" name="NumberOfPage" type="number" value="{{isset($book)
                                ?$book->NumberOfPage:''}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">Nuotrauka:</label>
                                <input class="form-control" name="photo" type="file" value="{{isset($book)
                                ?$book->photo:''}}">
                            </div>

                            <button type="submit" class="btn btn-info">{{isset($book)?'Isaugoti':'Prideti'}}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


