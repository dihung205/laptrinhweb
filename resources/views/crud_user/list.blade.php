@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Hành động</th>
                            <th>Avatar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">Xem</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Sửa</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Xóa</a>
                                </th>
                                <th>
                                    @if($user->avartar)
                                        <img src="{{ asset('storage/avatars/' . $user->avartar) }}" alt="Avatar của {{ $user->name }}" width="50" height="50">
                                    @else
                                        <span>Không có avatar</span>
                                    @endif
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection