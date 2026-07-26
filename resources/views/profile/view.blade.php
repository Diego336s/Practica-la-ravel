@extends('layouts.app')
@section('contenido')
    @vite(['resources/css/usuarios/view.css'])
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif
        <div class="contenido">
            <div class="card">
                <div class="card-photo"></div>
                <div class="card-title">{{ $user->nombre }} {{ $user->apellido }}<br>
                    <span>{{ $user->name }}</span>
                </div>
                <div class="card-socials">
                    <div>
                        <p><i class="bi bi-credit-card-2-front"></i> {{ $user->documento }}</p>
                        <p><i class="bi bi-envelope-at-fill"></i> {{ $user->email }}</p>
                        <div class="row">
                            <div class="col-6">
                                <form action="{{ route('profile.destroy') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                   
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                       <i class="bi bi-trash3"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary"><i
                                        class="bi bi-pencil"></i></a>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-md-12">



                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    const myModal = document.getElementById('myModal')
                    const myInput = document.getElementById('myInput')

                    myModal.addEventListener('shown.bs.modal', () => {
                        myInput.focus()
                    })
                </script>
            </div>


        </div>
    </div>
@endsection
