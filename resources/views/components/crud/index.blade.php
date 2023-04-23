@extends('layouts.adminlte_template')


@section('content')
    <h2>Lista general</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                @yield('headers')
            </tr>
        </thead>
        <tbody>
            @yield('datas-table')
        </tbody>
    </table>

@endsection
