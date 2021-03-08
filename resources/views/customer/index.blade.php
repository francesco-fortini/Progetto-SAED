@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard riservata ai clienti impianto scii') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Benvenuto! Sei loggato come cliente') }}
                    <br><form method="POST" action="{{ route('cancellautente', Auth::id()) }}">
                            @csrf
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
                                Elimina Profilo 
                            <i class="fa fa-trash"> </i>
                            
                            </button>
                        </form> 
                </div>
            </div>
        </div>

        <script type="text/javascript">

            $('.show_confirm').click(function(e){
                if(!confirm('Sei Sicuro di voler cancellare il tuo profilo utente ?')){
                    e.preventDefault();
                }
            });

        </script>

    </div>
</div>
@endsection
