@extends('layouts.app')

@section('authcontent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добро пожаловать</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы авторизованы!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
