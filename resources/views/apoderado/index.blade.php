@extends('layouts.app')

@section('content')
<section>
  <div class="container">
    <div class="d-flex align-content-center justify-content-between">
      <h1>Reporte de Asistencia</h1>
      <button class="btn btn-sm btn-primary ml-2">Ver Horario</button>
    </div>
    <div class="card">
      <div class="card-header">
        Consolidado 1
      </div>
      <div class="card-body">
        <h5 class="card-title">Maycol Mayhua Palante</h5>
        <ul>
          <li>
            Semestre: <small class="badge badge-dark">2019-II</small>
          </li>
        </ul>
        <p class="card-text"></p>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered text-center">
        <thead class="thead-dark">
          <tr>
            <th rowspan="2">Fecha</th>
            <th colspan="6">Cursos</th>
          </tr>
          <tr>
            <th>Met. Sistémicas</th>
            <th>Aplicaciones Web</th>
            <th>Teoría de Control</th>
            <th>Taller de A.S.I.</th>
            <th>Redes</th>
            <th>Org. Empresarial</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $r => $v)
          <tr>
            <td>{{ $r }}</td>
            @foreach ($v as $s)
            <td>{{ $s }}</td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection