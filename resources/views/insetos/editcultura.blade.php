
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <title> editar {{$cultura->nome}} </title>
        <link rel="stylesheet" href="/css/styles.css">
        
        </head>
    <body>
    <form action="/insetos/cultura/update/{{$cultura->id}}"method= "POST" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
    <div id="events-container" class="col-md-12">
    </div>
    <center>
      
        <table >
           
            <th align="right" width="80px">nome da cultura: </th>
                <td>
                    <input type="text" name="nome" size="7"value="{{ $cultura->nome }}">

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
