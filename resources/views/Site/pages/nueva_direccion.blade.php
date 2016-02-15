@extends('Site.layout.template')

@section('script1')
<script src="{{asset('app/js/jquery-ui.js')}}"></script>
@stop


@section('content')
<section class="section-perfil">
    <div class="container">
      <div class="text-left">
        <h1 class="title">Mi Cuenta</h1>
      </div>
      <div class="clearfix container-account">
        <div class="account-navigation margin-large-top">
          <ul class="account-navigation-ul">
            <li>
              <a href="perfil.html"><i class="fa fa-user"></i> <span>Mi Perfil</span></a>
              <ul class="profile-items">
                <li><a href="perfil.html">Mis datos personales</a></li>
                <li><a href="direcciones.html">Mis direcciones</a></li>
              </ul>
            </li>
            <li>
              <a href=""><i class="fa fa-truck"></i><span>Mis pedidos</span></a>
            </li>
          </ul>
        </div>
        <div class="account-section">
          <div class="category-title">
            <h2>Mi perfil</h2>
          </div>
          <div class="section-content">
            <div class="category-subtitle">
              <h3>Mis direcciones <a href="agregardirect.html">Agregar dirección</a></h3>
              <h4>Predeterminada <a href="entrega.html">Cambiar</a></h4>
            </div>
            <form class="form-add-address" action="">
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Otro Teléfono</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Referencia</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Distrito</label>
                    <select name="" id="" class="form-control">
                      <option value="">Seleccione</option>
                      <option value="">Barranco</option>
                      <option value="">Lince</option>
                      <option value="">Chorrillos</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn-add-address">CONTINUAR</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
