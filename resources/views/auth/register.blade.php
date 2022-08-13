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
                                <select id="tipo" name="tipo" type="text" class="form-select" value="{{ old('tipo')}}" onchange="showInp()">
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
                            <label for="areaper" class="col-md-4 col-form-label text-md-end">{{ __('Area') }}</label>
                            <div class="col-md-6">
                                <select id="areaper" type="text" class="form-select" name="areaper" value="{{ old('areaper')}}">
                                  <option>Servicios Escolares</option>
                                  <option>General</option>
                                  <option>Edificio D</option>
                                  <option>Edificio L</option>
                                  <option>Biblioteca</option>
                                  <option>Coordinacion</option>
                                </select>
                            </div>
                            <p></p>
                            <label for="cargo" class="col-md-4 col-form-label text-md-end">{{ __('Cargo') }}</label>
                            <div class="col-md-6">
                                <select id="cargo" type="text" class="form-select" name="cargo" value="{{ old('cargo')}}">
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
                            <p></p>
                            <label for="celular" class="col-md-4 col-form-label text-md-end">{{ __('Numero Telefonico') }}</label>
                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular">
                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <label for="motivo" class="col-md-4 col-form-label text-md-end">{{ __('Motivo de Visita') }}</label>
                            <div class="col-md-6">
                                <input id="motivo" type="text" class="form-control @error('motivo') is-invalid @enderror" name="motivo">
                                @error('motivo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="servicios" class="row mb-3" style="display: none">
                            <label for="empresaser" class="col-md-4 col-form-label text-md-end">{{ __('Empresa') }}</label>
                            {{-- select tipo de usuarios --}}
                            <div class="col-md-6">
                                <input id="empresaser" type="text" class="form-control @error('empresaser') is-invalid @enderror" name="empresaser">
                                @error('empresaser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <label for="encargadoser" class="col-md-4 col-form-label text-md-end">{{ __('Encargadoser') }}</label>
                            <div class="col-md-6">
                                <input id="encargadoser" type="text" class="form-control @error('encargadoser') is-invalid @enderror" name="encargadoser">
                                @error('encargadoser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <label for="areaser" class="col-md-4 col-form-label text-md-end">{{ __('Area') }}</label>
                            <div class="col-md-6">
                                <select id="areaser" type="text" class="form-select" name="areaser" value="{{ old('areaser')}}">
                                    <option>Servicios Escolares</option>
                                    <option>Edificio D</option>
                                    <option>Edificio L</option>
                                    <option>Biblioteca</option>
                                    <option>Areas Verdes</option>
                                </select>
                            </div>
                            <p></p>
                            <label for="servicio" class="col-md-4 col-form-label text-md-end">{{ __('Servicio') }}</label>
                            <div class="col-md-6">
                                <input id="servicio" type="text" class="form-control @error('servicio') is-invalid @enderror" name="servicio">
                                @error('servicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="proveedor" class="row mb-3" style="display: none">
                            <label for="empresapro" class="col-md-4 col-form-label text-md-end">{{ __('Empresa') }}</label>
                            {{-- select tipo de usuarios --}}
                            <div class="col-md-6">
                                <input id="empresapro" type="text" class="form-control @error('empresapro') is-invalid @enderror" name="empresapro">
                                @error('empresapro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <label for="encargadopro" class="col-md-4 col-form-label text-md-end">{{ __('Encargado') }}</label>
                            <div class="col-md-6">
                                <input id="encargadopro" type="text" class="form-control @error('encargadopro') is-invalid @enderror" name="encargadopro">
                                @error('encargadopro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>
                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion">
                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="administrador" class="row mb-3" style="display: none">
                            <label for="numadmin" class="col-md-4 col-form-label text-md-end">{{ __('Numero de Empleado') }}</label>
                            {{-- numero de empleado --}}
                            <div class="col-md-6">
                                <input id="numadmin" type="text" class="form-control @error('numadmin') is-invalid @enderror" name="numadmin">
                                @error('numadmin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <p></p>
                            <label for="permisos" class="col-md-4 col-form-label text-md-end">{{ __('Permisos') }}</label>
                            <p class="col-md-6 col-form-label text-left">Administrador <input type="hidden" name="admin" value="0"><input type="checkbox" name="admin" value="1"></p>
                            {{-- validacion de admin campos ocultos para que en la validacion de usuarios el campo booleano aparezca en falso --}}
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
            document.getElementById("servicios").style.display = "none";
            document.getElementById("proveedor").style.display = "none";
            document.getElementById("administrador").style.display = "none";
        }else if(getSelectValue=="Personal"){
            document.getElementById("estudiante").style.display = "none";
            document.getElementById("personal").style.display = "flex";
            document.getElementById("visitante").style.display = "none";
            document.getElementById("servicios").style.display = "none";
            document.getElementById("proveedor").style.display = "none";
            document.getElementById("administrador").style.display = "none";
        }else if(getSelectValue=="Visitante"){
            document.getElementById("estudiante").style.display = "none";
            document.getElementById("personal").style.display = "none";
            document.getElementById("visitante").style.display = "flex";
            document.getElementById("servicios").style.display = "none";
            document.getElementById("proveedor").style.display = "none";
            document.getElementById("administrador").style.display = "none";
        }else if(getSelectValue=="Servicios"){
            document.getElementById("estudiante").style.display = "none";
            document.getElementById("personal").style.display = "none";
            document.getElementById("visitante").style.display = "none";
            document.getElementById("servicios").style.display = "flex";
            document.getElementById("proveedor").style.display = "none";
            document.getElementById("administrador").style.display = "none";
        }else if(getSelectValue=="Proveedor"){
            document.getElementById("estudiante").style.display = "none";
            document.getElementById("personal").style.display = "none";
            document.getElementById("visitante").style.display = "none";
            document.getElementById("servicios").style.display = "none";
            document.getElementById("proveedor").style.display = "flex";
            document.getElementById("administrador").style.display = "none";
        }else if(getSelectValue=="Administrador"){
            document.getElementById("estudiante").style.display = "none";
            document.getElementById("personal").style.display = "none";
            document.getElementById("visitante").style.display = "none";
            document.getElementById("servicios").style.display = "none";
            document.getElementById("proveedor").style.display = "none";
            document.getElementById("administrador").style.display = "flex";
        }
    }
    const btn = document.getElementById('send');

    // Check if btn exists before addEventListener()
    if (btn) {
        btn.addEventListener('click', (e) => {
            e.preventDefault()

            if(document.getElementById('tipo').value == 'Estudiante')
            formulario.setAttribute('action', '{{ url('/registerest') }}')

            if(document.getElementById('tipo').value == 'Personal')
            formulario.setAttribute('action', '{{ url('/registerper ')}}')

            if(document.getElementById('tipo').value == 'Visitante')
            formulario.setAttribute('action', '{{ url('/registervis ')}}')

            if(document.getElementById('tipo').value == 'Servicios')
            formulario.setAttribute('action', '{{ url('/registerser ')}}')

            if(document.getElementById('tipo').value == 'Proveedor')
            formulario.setAttribute('action', '{{ url('/registerpro ')}}')

            if(document.getElementById('tipo').value == 'Administrador')
            formulario.setAttribute('action', '{{ url('/registeradm ')}}')

            document.getElementById('formulario').submit()
        });
    }
</script>
</body>
@endsection
</html>




