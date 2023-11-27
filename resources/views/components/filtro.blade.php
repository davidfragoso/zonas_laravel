<form action="{{ route('zonas-arqueologicas.index') }}" method="GET" class="w-50 filtro-form">
    <div class="form-group">
        <select name="estado_id" class="form-control">
            <option value="">Selecciona un Estado</option>
            @foreach($estados as $estado)
                <option value="{{ $estado->id_estado }}">{{ $estado->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </div>
</form>