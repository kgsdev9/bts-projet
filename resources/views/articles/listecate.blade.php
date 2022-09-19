@extends('dashboard.admin.users.admin.layoutadmin')

@section('admin')

<div class="main-panel">
  <div class="content-wrapper">
 
    @foreach($category as $cate)

<div class="card">
<div class="card-header">
{{  $cate->visibilite }}
</div>
<div class="card-body">
<div class="row">
<div class="col-md-10">
    <h5 class="card-title"> Nom : {{  $cate->category_name}}</h5>
  <h5 class="card-title">{{$cate->description_cate}}</h5>
</div>
</div>
<p class="card-text"> {{$cate->created_at}} </p>
<a href="{{route('cate.edit' , $cate->id)}}" class="btn btn-dark">Modfier La Categogie</a>
<a href="{{route('cate.destroy' ,$cate ->id)}}" class="btn btn-danger" onclick="return confirm('Voulez vous supprimer Cet article ?')">Supprimer La Categorie</a>
</div>
</div>

 @endforeach

@endsection