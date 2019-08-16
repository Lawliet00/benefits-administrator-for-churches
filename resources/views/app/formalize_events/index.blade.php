@extends('layouts.app')

@section('title')
  Eventos
@endsection

@section('content')

<div class="container-fluid  mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                        <h3 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LISTADO DE EVENTOS</font></font></h3>
                        </div>
                        <div class="col-4 text-right">
                            @include('buttons.previous', ['route' => url()->previous()])
                            @include('buttons.create', ['route' => route('formalizeEvents.create')])
                            {{-- @include('buttons.minimize') --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <event-list :records_base="{{ $events }}" route_edit="{{ url('formalizeEvents/{id}/edit') }}" />
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
