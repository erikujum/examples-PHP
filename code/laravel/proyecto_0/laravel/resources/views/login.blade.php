<div>
    @extends('app')
    @section('content')
    @if(session('success'))
        <h1>{{session('success')}}</h1>
    @endif

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center"> Formulario login </h3>
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
