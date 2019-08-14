@extends('layouts.app')

@section('title')
  Iglesias
@endsection

@section('content')
<div class="container-fluid  mt--7">
	<div class="row">
		<div class="col-12">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0 text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">formulario para nueva Iglesia</font></font></h3>
                </div>
                <div class="col-4 text-right">
                  @include('buttons.previous', ['route' => url()->previous()])
                </div>
              </div>
            </div>
            <div class="card-body">
                @if(isset($record))
                    <churches-create-edit-form :record="{{ $record }}" :denominations="{{ $denominations }}"
                    :states="{{ $states }}" :cities="{{ $cities }}"
                    :municipalities="{{ $municipalities }}" :parishes="{{ $parishes }}" route_list="{{ url('/churches') }}" />
                @else
                  	<churches-create-edit-form :denominations="{{ $denominations }}"
                    :states="{{ $states }}" :cities="{{ $cities }}"
                    :municipalities="{{ $municipalities }}" :parishes="{{ $parishes }}" route_list="{{ url('/churches') }}" />
                @endif
            </div>
          </div>
        </div>
	</div>
</div>
@endsection