<h1>Nueva Pizza</h1>
@if ($errors->any())
<div style="color:red">
    <ul>
        @foreach ($errors->all())
    </ul>
</div>
 
<form method="POST" action="{{ route('pizzas.store') }}">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
    <textarea name="descripcion">{{ old('descripcion') }}</textarea>
    <input type="number" step="0.01" name="precio">
 
    <h3>Ingredientes</h3>
    @foreach($ingredientes as $ingrediente)
    <label>
        <input type="checkbox" name="ingredientes[]" value="{{ $ingrediente->id}}">
        {{ $ingrediente->nombre}}
    </label><br>
    @endforeach
 
    <button type="submit">Guardar</button>
</form>