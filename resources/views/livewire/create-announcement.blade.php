<div class="marginTitle">
    <form  class="shadow p-5" wire:submit.prevent='store'> 
            <div class="text-center fa-4x fc-red mb-5">CREA IL TUO ANNUNCIO!</div>
        {{-- TITOLO --}}
        <div class="mb-3">
            <label for="title" class="form-label fs-4 fc-red">Titolo</label>
            <input type="text" name="title" class="form-control " id="title" wire:model='title' @error ('title') is-invalid @enderror value={{old('title')}}>
            @error('title')
            <p class="text-danger fs-5" >{{$message}}</p>
            @enderror
        </div>

        {{-- IMMAGINE --}}
        <div class="my-5 mb-3">
            <label class="fs-4 fc-red form-label" for="img">
                Inserisci l'immagine
            </label>
            <input wire:model='temporary_images' type="file" name="images" id="img" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="Img">
            @error('temporary_images.*')
            <p class="text-danger">{{$message}}</p> 
            @enderror
        </div>
        @if(!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Anteprima foto:</p>
                <div class="row border-info border-4 rounded">
                    @foreach($images as $key => $img)
                    <div class="col">
                    <div class="img-preview mx-auto rounded" style="background-image: url({{$img->temporaryUrl()}});"></div>
                    <button type="button" class="btn" wire:click="removeImage({{$key}})">Cancella</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        
        {{-- PREZZO --}}
        <div class="mb-3">
            <label for="price" class="form-label fs-4 fc-red">Prezzo</label>
            <input type="number" step='0.01' name="price" class="form-control" id="price" wire:model='price' @error ('price') is-invalid @enderror value={{old('price')}}>
            @error('price')
            <p class="text-danger fs-5" >{{$message}}</p>
            @enderror
        </div>
        {{-- CATEGORIE --}}
        <div class="row ">
            <div class="my-3 text-center fc-red" >
                <h3> Categorie </h3>
            </div>
            
        @foreach ($categories as $category)
        <div class="col-6 col-md-8 col-lg-2 d-flex justify-content-evenly  ">
            <input class="btn-check" id="{{"btn-check-". $category->id}}" type="radio" wire:model='category_id' value="{{$category->id}}" name="category">
            <label class="btn w-100 px-0 " for="{{"btn-check-". $category->id}}">
                {{$category->name}}
            </label>
        </div>
        @endforeach
    
    </div>
        {{-- DESCRIZIONE --}}
        <div class="my-5">
            <label for="description" class="form-label fs-4 fc-red">Descrizione</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10" wire:model='description'@error ('description') is-invalid @enderror>{{old('description')}}</textarea>
            @error('description')
            <p class="text-danger fs-5" >{{$message}}</p>
            @enderror
        </div>
        

        
        {{-- PULSANTE --}}
        <div  class="d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-primary px-5"> CREA NUOVO </button>
        </div>
    </form>
</div>