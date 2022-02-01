<!html>
<head>

<title> cadastrar Insetos </title>
<link rel="stylesheet" href="/css/styles.css">

</head>
<body>
<center> <h2> cadastrar insetos </h2>


    <form action= "{{route('cadastro_insetos')}}"method= "POST" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        <table>
            <tr>
                <th align="right">cultura id: </th>
                <td>
                    <label for="cultura_id" :value="__('Selecione a cultura')" />
                    @if(count($culturas) > 0)
                        <select name="cultura_id" required>
                            @foreach($culturas as $c)
                                <option value="{{$c->id}}">{{$c->nome}}</option>
                            @endforeach
                        </select>
                    @else
                        Nenhum registro de túmulos disponíveis encontrado!
                    @endif

                </td>
        </tr>
            <tr>
                <th align="right" width="80px">nome do inseto: </th>
                <td>
                    <input type="text" name="nome" size="7">

                                 </td>
    </tr>
    <tr>
                <th align="right">Nome cientifico: </th>
                <td>
                <input type="text" name="nomecientifico" size="30">

             </td>
    </tr>
    <tr>
                <th align="right">Autor: </th>
                <td>
                    <input type="text" name="autor"  size="30">

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
