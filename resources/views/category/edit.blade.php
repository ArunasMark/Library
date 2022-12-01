@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Kategorijos</div>
                    <div class="card-body text-center">

                        <form method="POST" action="{{isset($category)?route('category.update',$category->id):route
                        ('category.store')}}" enctype=="multipart/form-data">
                            @csrf
                            @if (isset($category))
                                @method('put')
                            @endif
                            <div class="mb-3">
                                <label class="form-label float-start">Pavadinimas:</label>
                                <input class="form-control" name="name" type="text" value="{{isset($category)?
                                $category->name:''}}">
                            </div>

                            <button type="submit" class="btn btn-info">{{isset($category)
                            ?'Issaugoti':'Prideti'}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
