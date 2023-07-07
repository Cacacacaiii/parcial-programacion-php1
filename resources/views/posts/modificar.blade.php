@include('common/header')

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Modificar Post</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('posts.listar') }}" enctype="multipart/form-data">Regresar</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('posts.modificar2',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Titulo Post:</strong>
                        <input type="text" name="titulo" value="{{ $pots->titulo }}" class="form-control" placeholder="Titulo del post">
                        @error('titulo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Cuerpo Post:</strong>
                        <input type="text" name="cuerpo" value="{{ $post->cuerpo }}" class="form-control" placeholder="Cuerpo del post">
                        @error('cuerpo')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Autor Post:</strong>
                        <input type="text" name="identidadAutor" value="{{ $post->identidadAutor }}" class="form-control" placeholder="Autor del post">
                        @error('identidadAutor')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Enviar</button>
            </div>
        </form>
    </div>

@include('common/footer')