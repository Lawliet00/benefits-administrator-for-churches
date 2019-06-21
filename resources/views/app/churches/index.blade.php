@extends('layouts.app')

@section('content')
<div class="container-fluid  mt--7">
	<div class="row">
		<div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LISTADO DE IGLESIAS</font></font></h3>
            </div>
            <div class="table table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">IGLESIA</font></font></th>
                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PASTOR</font></font></th>
                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DENOMINACION</font></font></th>
                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ESTADO</font></font></th>
                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CIUDAD</font></font></th>
                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MUNICIPIO</font></font></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sistema de diseño de argón</font></font></span>
                        </div>
                      </div>
                    </th>
                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      $ 2,500 USD
                    </font></font></td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> pendiente
                      </font></font></span>
                    </td>

                    <td>
                    </td>

                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">60%</font></font></span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
					<td></td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-primary btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v" style="margin-top: 8px;"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="">Actualizar</a>
                          <a class="dropdown-item" href="">Eliminar</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anterior</font></font></span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 </font></font><span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(actual)</font></font></span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Siguiente</font></font></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
		{{-- <div class="col-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mi cuenta</font></font></h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CREAR</font></font></a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Informacion del usuario</font></font></h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre de usuario</font></font></label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección de correo electrónico</font></font></label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre de pila</font></font></label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellido</font></font></label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                Address
                <h6 class="heading-small text-muted mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Información del contacto</font></font></h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección</font></font></label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciudad</font></font></label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">País</font></font></label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">código postal</font></font></label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre mi</font></font></h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre mi</font></font></label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div> --}}
	</div>
</div>
@endsection

@include('layouts.script')