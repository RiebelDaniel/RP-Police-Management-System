@extends('layout')

@section('content')



    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">UID</th>
            <th scope="col">Name</th>
            <th scope="col">Rang
            <th scope="col">Punkte</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->UID }}</th>
                <td><a href="/user/{{$user->id}}"> {{ $user->username }}</a></td>
                <td>{{ $user->rank->name }}</td>
                <td>{{ $user->getPoints() }}</td>
            </tr>

        @endforeach



        </tbody>
        {{ $users->links() }}
    </table>




@endsection