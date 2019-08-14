@extends('layouts.app')

@section('title')
  Iglesias
@endsection

@section('content')

<div class="container-fluid  mt--7">
	<div class="row">
		<div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                        <h3 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LISTADO DE IGLESIAS</font></font></h3>
                        </div>
                        <div class="col-4 text-right">
                            @include('buttons.previous', ['route' => url()->previous()])
                            @include('buttons.create', ['route' => route('churches.create')])
                            {{-- @include('buttons.minimize') --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <churches-list :records="{{ $churches }}" />
                </div>
            </div>
        </div>
	</div>
</div>
@endsection
