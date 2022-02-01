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

</x-app-layout>