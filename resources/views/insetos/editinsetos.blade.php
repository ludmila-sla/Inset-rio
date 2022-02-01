
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <title> editar {{$inseto->nome}} </title>
        <link rel="stylesheet" href="/css/styles.css">
        
        </head>
    <body>
    <form action="/insetos/update/{{$inseto->id}}"method= "POST" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
    <div id="events-container" class="col-md-12">
    </div>
    <center>
      
        <table >
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
            <th align="right" width="80px">nome do inseto: </th>
                <td>
                    <input type="text" name="nome" size="7"value="{{ $inseto->nome }}">

                                 </td>
    </tr>
    <tr>
                <th align="right">Nome cientifico: </th>
                <td>
                <input type="text" name="nomecientifico" size="30" value="{{ $inseto->nomecientifico }}">

             </td>
    </tr>
    <tr>
                <th align="right">Autor: </th>
                <td>
                    <input type="text" name="autor"  size="30" value="{{ $inseto->autor }}">

                </td>
    </tr>
 
    <tr>
        <th align="right">Imagem:  </th>
        <td>
        
            <input type="file" id="image" name="image" class="from-control-file">
        </td>
</tr>
    <tr>
        <td colspan="2"> <center> <input  class="btn btn-primary" type="submit" value="salvar" name="salvar"> </center>

    </td>
    </tr>
                
                </table>
        </center>
    </form>
    </body>
</html>
