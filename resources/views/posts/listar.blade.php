@include('common/header')

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Listado Posts</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('posts.crear') }}"> Crear Post</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id Post</th>
                    <th>Titulo Post</th>
                    <th>Cuerpo Post</th>
                    <th>Autor Post</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->titulo }}</td>
                        <td>{{ $post->cuerpo }}</td>
                        <td>{{ $post->identidadAutor }}</td>
                        <td>
                            <form action="{{ route('posts.eliminar',$post->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('posts.modificar',$post->id) }}">Modificar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $posts->links() !!}
    </div>

@include('common/footer')