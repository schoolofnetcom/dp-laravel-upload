<form action="/upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="url">
    <input type="submit" value="Enviar">
</form>
