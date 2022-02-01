
<!DOCTYPE html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="/css/styles.css">
    
</head>
<body>
   
<div style="padding-left: 90%">

         <table class="collapse navbar-collapse" id="navbar">
            <tr>
         <td >  <a href="{{ route('login') }}">Login</a> </td>
      <td > <a href="{{ route('register') }}" >Register</a>   </td>
                    </tr>
                </table>

</div>
    
    <div id="search-container" class="col-md-12">
        <h1>Busque um inseto</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
    </div>

      
    <center>
      
        <table >
          
            <tr> 
            <th width='75'>nome </th> 
            <th width='150'> nome cientifico </th>
             <th width='150'> autor </th>
             
             </tr>
             @foreach($insetos as $inseto)
             <tr> 
                
                <td>{{ $inseto->nome }} </td> 
                <td > {{ $inseto->nomecientifico }}</td>
                 <td > {{ $inseto->autor }}</td>
                
                 </tr>
                 @endforeach
                </table>
        </center>
  
</body>
</html>