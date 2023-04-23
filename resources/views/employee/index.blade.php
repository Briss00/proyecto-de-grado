@extends('components.crud.index')

@php
    $edit_route_name = 'employee.edit';
    $delete_route_name = 'employee.destroy';
@endphp

@section('headers')
    <th scope="col">#</th>
    <th scope="col">First</th>
    <th scope="col">Last</th>
    <th scope="col">Handle</th>
@endsection

@section('datas-table')
    @foreach ($datas as $key => $data)
    @include('components.crud.table-content')
    @endforeach
@endsection
