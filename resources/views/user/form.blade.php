@if($errors->any())
    @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
    @endforeach

@endif 
<hr>

<form action="{{ route("user.simpan") }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }} 
    {{ method_field("put") }}
    <strong>Username</strong><br>
    <input type="text" name="username" > <br>
    
    <strong>Password</strong><br>
    <input type="password" name="password" > <br>
    
    <strong>Photo</strong><br>
    <input type="file" name="foto" > <br>

    <strong>Level</strong><br>
    <input type="text" name="level" > <br>
    
    <label for="active">
        <input type="checkbox" id="active" name="active" value="1">
        Aktif
    </label>
    <br>

    <input type="submit" value="Kirim">
</form>