<!doctype html>
<html>
<html lang="pt-br">
<head>
<meta charset="uth-8">

<title> cadastrar Cultura </title>
<link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<center> <h2> cadastrar cultura </h2>

    <form action= "{{route('cadastro_cultura')}}" method= "POST" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        <table border= "1">

    <tr>
                <th align="right">Nome: </th>
                <td>
                <input type="text" name="nome" size="30" id="nome" class="form-control">
             </td>
    </tr>
    <tr>
                <th align="right">Imagem: </th>
                <td>
                    <input type="file" id="image" name="image" class="from-control-file">
                </td>
    </tr>


    <tr>
        <td colspan="2"> <center> <input  class="btn btn-primary" type="submit" value="cadastrar" name="cadastrar"> </center>

    </td>
    </tr>
    </table>
    </form>
</center>
</body>
</html>
