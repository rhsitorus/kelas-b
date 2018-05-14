<form action="/proses" method="post">
    {{ method_field("delete") }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    nama <input type="text" name="nama">

    <input type="submit">

</form>