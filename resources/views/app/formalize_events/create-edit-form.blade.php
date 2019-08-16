@extends('layouts.app')

@section('title')
  Evento
@endsection

@section('content')
<div class="container-fluid  mt--7">
    <div class="row">
        <div class="col-12">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0 text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Información de evento</font></font></h3>
                </div>
                <div class="col-4 text-right">
                  @include('buttons.previous', ['route' => url()->previous()])
                </div>
              </div>
            </div>
            <div class="card-body">
                @if(isset($record))
                    <event-create-edit-form :record="{{ $record }}" :churches="{{ $churches }}" route_list="{{ url('/formalizeEvents') }}" />
                @else
                    <event-create-edit-form :churches="{{ $churches }}" route_list="{{ url('/formalizeEvents') }}" />
                @endif
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
