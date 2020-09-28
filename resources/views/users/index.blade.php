@extends('layouts.app')

@section('content')

<div class="container">


        <div class="page-header-container d-flex justify-content-between mb-3">
            <h1 class="page-header-title">Users</h1>

            <div class="d-flex">
                <a href="/users/export/excel" class="btn btn-primary">Export Excel</a>
            </div>
        </div>


        <table class="table">

            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Modified</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('j/m/Y', strtotime($user->updated_at)) }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>


        </table>

        <div class="">{{ $users->links() }}</div>
    </div>



</div>

@endsection
