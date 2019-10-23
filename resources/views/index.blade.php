@extends('layouts.master')

@section('title', 'Home')

@section('sidebar')
<div id="search_options">

</div>
@endsection

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th>Nome Fantasia</th>
        <th>Codigo</th>
        <th>Localidade</th>
        <th>Última Visita</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Posto Jacutinga</td>
        <td>001</td>
        <td>Natal/RN</td>
        <td>10/09/2019</td>
        <td>
            Ativo
            <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
            </label>
        </td>
      </tr>
      <tr>
        <td>Posto Shell rota do Sol</td>
        <td>002</td>
        <td>Natal/RN</td>
        <td>10/09/2019</td>
        <td>
            Inativo
            <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
            </label>
        </td>
      </tr>
      <tr>
        <td>Auto Posto Esmeraldo</td>
        <td>003</td>
        <td>Natal/RN</td>
        <td>10/09/2019</td>
        <td>
            Ativo
            <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
            </label>
        </td>
      </tr>
      <tr>
        <td>Posto Cirne - Rota do Sol</td>
        <td>004</td>
        <td>Natal/RN</td>
        <td>10/09/2019</td>
        <td>
            Ativo
            <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
            </label>
        </td>
      </tr>
      <tr>
        <td>Posto Big Tambaú</td>
        <td>005</td>
        <td>Natal/RN</td>
        <td>10/09/2019</td>
        <td>
            Ativo
            <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
            </label>
        </td>
      </tr>
      <tr>
        <td>Posto Jacutinga</td>
        <td>007</td>
        <td>Natal/RN</td>
        <td>10/09/2019</td>
        <td>
            Ativo
            <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
            </label>
        </td>
      </tr>
    </tbody>
  </table>
@endsection