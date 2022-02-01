
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div id="search-container" class="col-md-12">
        <h1>Busque um inseto</h1>
        <form action="/dashboard" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
    </div>
    <center>
        <table >
          
            <tr> 
                <th width='75'>foto </th>
            <th width='75'>nome da cultura </th> 
           
             
             </tr>
             @foreach($culturas as $cultura)
             <tr> 
                <td> <img src="/img/events/{{ $cultura->image }}" alt="{{ $cultura->nome }}"> </td> 
                <td>{{ $cultura->nome }} </td> 
               
                <td> <a href="/insetos/editcultura/{{ $cultura->id }}" > Editar</a>  
                    <form action="/insetos/cultura/{{ $cultura->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" > Deletar</button>
                </form></td>
                 </tr>
                 @endforeach
                </table>
      
        <table >
          
            <tr> 
                <th width='75'>foto </th>
            <th width='75'>nome </th> 
            <th width='150'> nome cientifico </th>
             <th width='150'> autor </th>
             
             </tr>
             @foreach($insetos as $inseto)
             <tr> 
                <td> <img src="/img/inseto/{{ $inseto->image }}" alt="{{ $inseto->nome }}"> </td> 
                <td>{{ $inseto->nome }} </td> 
                <td > {{ $inseto->nomecientifico }}</td>
                 <td > {{ $inseto->autor }}</td>
                <td> <a href="/insetos/editinsetos/{{ $inseto->id }}" > Editar</a>  
                    <form action="/insetos/{{ $inseto->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" > Deletar</button>
                </form></td>
                 </tr>
                 @endforeach
                </table>
        </center>
    
</x-app-layout>
