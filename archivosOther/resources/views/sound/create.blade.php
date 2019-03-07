@extends('layouts.header');

@section('title', 'Audios Create')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form class="form-group" method="POST" action="/audios" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Audio</label>
                <input type="file" name="audio">
            </div>

            <button type="submit" class="btn btn-primary">GUARDAR</button>
            <a href="{{ '/audios' }}" class="btn">Volver</a>
        </form>
    </div>
@endsection
<script>
    function fileValidation(){
        var fileInput = document.getElementById('file');
        var filePath = fileInput.value;
        var allowedExtensions = /(.jpg|.jpeg|.png|.gif)$/i;
        if(!allowedExtensions.exec(filePath)){
            alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
            fileInput.value = '';
            return false;
        }else{
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

    //function to validate file extension
    function validateFileExtension(fld,FieldName)
    {
        if(!/(\.txt|\.pdf|\.exls|\.doc)$/i.test(fld))
        {
            varError = varError + FieldName + "Invalid text file type.\n";
            return false;
        }
        return true;
    }
</script>