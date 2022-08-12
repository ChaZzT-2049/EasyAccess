<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    @extends('layouts.app')
  </head>
  <body>
    @section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                {{-- formulario --}}
                <div class="card-body">
                    <form method="POST" action="#" id="formulario">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            {{-- campo nombre --}}
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                {{-- capturar errores y validaciones --}}
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            {{-- campo email --}}
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                {{-- capturar errores y validaciones --}}
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tipo" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Usuario') }}</label>
                            {{-- select tipo de usuarios --}}
                            <div class="col-md-6">
                                <select id="tipo" name="tipo" type="text" class="form-select" value="{{ old('tipo')}}" onchange="showInp()" action="{{ url('/register') }}">
                                    <option value="default">Selecciona un tipo de usuario</option>
                                    <option value="Estudiante">Estudiante</option>
                                    <option value="Personal">Personal</option>
                                    <option value="Visitante">Visitante</option>
                                    <option value="Servicios">Servicios</option>
                                    <option value="Proveedor">Proveedor</option>
                                    <option value="Administrador">Administrador</option>
                                </select>
                            </div>
                        </div>

                        <div id="estudiante" class="row mb-3" style="display: none">
                            <label for="matricula" class="col-md-4 col-form-label text-md-end">{{ __('Matricula') }}</label>
                            {{-- Matricula --}}
                            <div class="col-md-6">
                                <input id="matricula" type="text" class="form-control @error('matricula') is-invalid @enderror" name="matricula" value="{{ old('matricula')}}">
                                @error('matricula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <label for="carrera" class="col-md-4 col-form-label text-md-end">{{ __('Carrera') }}</label>
                            <div class="col-md-6">
                                <select id="carrera" type="text" class="form-select" name="carrera" value="{{ old('carrera')}}">
                                    <option>Desarrollo y Gestión de Software</option>
                                    <option>Gastronomía</option>
                                    <option>Gestión y Desarrollo Turístico</option>
                                    <option>Contaduría</option>
                                    <option>Mantenimiento Industrial</option>
                                    <option>Terapia física</option>
                                </select>
                            </div>
                        </div>

                        <div id="personal" class="row mb-3" style="display: none">
                            <label for="numemp" class="col-md-4 col-form-label text-md-end">{{ __('Numero de Empleado') }}</label>
                            {{-- numero de empleado --}}
                            <div class="col-md-6">
                                <input id="numemp" type="text" class="form-control @error('numemp') is-invalid @enderror" name="numemp">
                                @error('numemp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <label for="area" class="col-md-4 col-form-label text-md-end">{{ __('Area') }}</label>
                            <div class="col-md-6">
                                <select id="area" type="text" class="form-select" name="area" value="{{ old('area')}}">
                                  <option>Servicios Escolares</option>
                                  <option>Edificio D</option>
                                  <option>Edificio L</option>
                                  <option>Biblioteca</option>
                                  <option>Coordinacion</option>
                                </select>
                            </div>
                            <p></p>
                            <label for="cargo" class="col-md-4 col-form-label text-md-end">{{ __('Cargo') }}</label>
                            <div class="col-md-6">
                                <select id="cargo" type="text" class="form-select" name="cargo" value="{{ old('area')}}">
                                  <option>Rector</option>
                                  <option>Coordinador</option>
                                  <option>Directivo</option>
                                  <option>Secretaria</option>
                                  <option>Psicologo</option>
                                  <option>Profesor</option>
                                </select>
                            </div>
                        </div>

                        <div id="visitante" class="row mb-3" style="display: none">
                            <label for="identificacion" class="col-md-4 col-form-label text-md-end">{{ __('Identificación') }}</label>
                            {{-- select tipo de usuarios --}}
                            <div class="col-md-6">
                                <input id="identificacion" type="text" class="form-control @error('identificacion') is-invalid @enderror" name="identificacion">
                                @error('identificacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            {{-- contraseña --}}
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                {{-- capturar errores y validaciones --}}
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            {{-- confirmar contraseña --}}
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div className="col-md-6">
                            {{-- validacion de admin
                                campos ocultos para que en la validacion de usuarios el campo booleano aparezca en falso
                            --}}
                            <input type="hidden" name="admin" value="0">
                            <input type="hidden" name="admin" value="0">
                        </div>

                        <div class="row mb-0">
                            {{-- subir formulario --}}
                            <div class="col-md-6 offset-md-4">
                                <button type="button" id="send" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showInp(){
        getSelectValue = document.getElementById("tipo").value;
        if(getSelectValue=="Estudiante"){
            document.getElementById("estudiante").style.display = "flex";
            document.getElementById("personal").style.display = "none";
            document.getElementById("visitante").style.display = "none";
        }else if(getSelectValue=="Personal"){
            document.getElementById("estudiante").style.display = "none";
            document.getElementById("personal").style.display = "flex";
            document.getElementById("visitante").style.display = "none";
        }else if(getSelectValue=="Visitante"){
            document.getElementById("estudiante").style.display = "none";
            document.getElementById("personal").style.display = "none";
            document.getElementById("visitante").style.display = "flex";
        }
    }
    const btn = document.getElementById('send');
    console.log(btn); // null

    // Check if btn exists before addEventListener()
    if (btn) {
        btn.addEventListener('click', (e) => {
            console.log('btn clicked');
            e.preventDefault()

            if(document.getElementById('tipo').value == 'Estudiante')
            formulario.setAttribute('action', '{{ url('/registerest') }}')

            if(document.getElementById('tipo').value == 'Personal')
            formulario.setAttribute('action', '{{ url('/registerper ')}}')

            document.getElementById('formulario').submit()
        });
    }
</script>
</body>
@endsection
</html>




