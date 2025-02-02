@extends('layouts.app')
@section('conteudo')

@section('titulo','Home Administrador')
@section('navbar')
    Home
@endsection

          <div class="card-deck d-flex justify-content-center">
            <div class="conteudo-central d-flex justify-content-center">
                <!-- Solicitar Documento-->
               <a href="{{ route("cadastro-servidor")}}" style="text-decoration:none; color: inherit;">
                  <div class="card cartao text-center " style="border-radius: 30px">
                        <div class="card-body d-flex justify-content-center">
                            <h2 style="padding-top:15px">Cadastrar Servidor</h2>
                        </div>
                  </div>
               </a>

                <a href="{{ route("cadastro-bibliotecario")}}" style="text-decoration:none; color: inherit;">
                    <div class="card cartao text-center " style="border-radius: 30px">
                        <div class="card-body d-flex justify-content-center">
                            <h2 style="padding-top:15px">Cadastrar Bibliotecario</h2>
                        </div>
                    </div>
                </a>

                <a href="{{ route("listar-biblioteca")}}" style="text-decoration:none; color: inherit;">
                    <div class="card cartao text-center " style="border-radius: 30px">
                        <div class="card-body d-flex justify-content-center">
                            <h2 style="padding-top:15px">Listar Biblioteca</h2>
                        </div>
                    </div>
                </a>

              <a href="{{ route("listar-usuario")}}" style="text-decoration:none; color: inherit;">
                  <div class="card cartao text-center " style="border-radius: 30px">
                        <div class="card-body d-flex justify-content-center">
                            <h2 style="padding-top:15px">Listar Usuário</h2>
                        </div>
                  </div>
               </a>
            </div>
          </div>
@endsection
