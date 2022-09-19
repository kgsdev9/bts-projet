@extends('dashboard.admin.users.admin.layoutadmin')

@section('admin')

  <div class="container">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Nouvelle Categories</h4>
        <p class="card-description"> Formulaire D'ajout de categorie </p>
        <form class="forms-sample" action="{{route('cate.create')}}"  method="POST"  enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1 col-md-6">Titre de la categories : @error('title_cate') <small style="color: red">{{$message}}</small> @enderror </label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Entrer le nom" name="title_cate" value="{{old('title_cate')}}">
                </div>

                <div class="form-group  col-md-6">
                
                  <label for="exampleInputName1">Cette Categories  est t'elle populaire ? (Optionnel)</label>
                    <select name="populaire"  class="form-control">
                    <option value="">Choisir un etat </option>
                      <option value="populaire">Populaire</option>
                      <option value="normale">Normale</option>
                      <option value="visible">Visible</option>
                  
                    </select>
                </div>
              </div>

              <div class="row">
                
                <div class="form-group  col-md-12">
                  <label for="exampleInputName1">Description de la categorie (Optionnel) </label>
               <textarea name="description_cate" class="form-control"  cols="30" rows="10" ></textarea>

                </div>
              </div>


            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
             
          <button type="submit" class="btn btn-dark mr-2">Ajouter la categorie</button>
          <button class="btn btn-light">Annuler</button>
        </form>
      </div>
    </div>
  </div>


</div>

  </div>


@endsection