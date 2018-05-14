@extends("template.master")

@section("content")

{{ $data->links() }}
<table class="table table-bordered table-striped ">
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Level</th>
        <th>Foto</th>
        <th>Opsi</th>
    </tr>
    @foreach ($data as $user)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->level }}</td>
            <td><img src="/{{ $user->foto }}" width="50px" height="50px"></td>
            <td>
                
            </td>
        </tr>
    @endforeach
</table>
@endsection