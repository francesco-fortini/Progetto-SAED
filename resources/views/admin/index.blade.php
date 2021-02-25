@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard riservata ai maestri impianto scii') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Benvenuto! Sei loggato come admin') }}<br><br><br>
                    {{var_dump(Auth::user()->hasRole('administrator'))}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
