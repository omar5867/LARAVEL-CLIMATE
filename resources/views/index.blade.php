<!DOCTYPE html>
<html lang="ES">

@include('layouts.header')

<body>
    @include('layouts.navigation')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                <div class="card overflow-hidden">
                    <div class="card-body pt-3">
                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">
                                    <span>Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Explore</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Feed</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="add">
                                    <span>Añadir datos</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("creators.about")}}">
                                    <span>About</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route("method.how")}}">
                                    <span>Method used</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Bienvenido
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <hr>
                <div class="mt-3">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">@sortablelink('ID')</th>
                                    <th scope="col">@sortablelink('Ubicación')</th>
                                    <th scope="col">@sortablelink('Temperatura')</th>
                                    <th scope="col">@sortablelink('Humedad')</th>
                                    <th scope="col">Momento</th>
                                    <th scope="col">Acción</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($tyh as $t)
                                  <tr>
                                    <td>{{ $t['idDatabase'] }}</td>
                                    <td>{{ $t['ubicacion'] }}</td>
                                    <td>{{ $t['temperatura'] }}</td>
                                    <td>{{ $t['humedad'] }}</td>
                                    <td>{{ $t['fechaHora'] }}</td>
                                    <td>
                                        <a href="{{ url('edit/'.$t->idDatabase) }}" class='btn btn-success'>Editar</a>
                                        <a href="{{ url('delete/'.$t->idDatabase) }}" class='btn btn-danger'>Borrar</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              {!! $tyh->appends(\Request::except('page'))->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>