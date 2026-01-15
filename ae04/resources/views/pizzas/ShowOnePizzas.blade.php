<table>
    <tr>
        <th>Pizza</th>
        <th>Precio</th>
    </tr>
    <tr>
        <h1>{{$pizza -> nombre}}</h1>
        <h2>{{$pizza -> precio}}</h2>
        <p>{{$pizza -> descripcion}}</p>
        <h2>Ingredientes</h2>
        <ul>
            @foreach (pizza->Ingredientes as ingrediente)
            <li>{{Ingrediente->nombre}}</li>
            @endforeach
        </ul>
    </tr>
</table>