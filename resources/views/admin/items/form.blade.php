<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($item) value="{{$item->name}}" @endisset placeholder="Ingrese un nombre" required>
</div>

<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($item) value="{{$item->hp}}" @endisset placeholder="Ingrese los puntos de vida" required>
</div>

<div class="form-group">
    <label for="atq">Ataque</label>
    <input type="number" class="form-control" id="atq" name="atq" @isset($item) value="{{$item->atq}}" @endisset placeholder="Ingrese los puntos de ataque" required>
</div>

<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($item) value="{{$item->def}}" @endisset placeholder="Ingrese los puntos de defensa" required>
</div>

<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($item) value="{{$item->luck}}" @endisset placeholder="Ingrese los puntos de suerte" required>
</div>

<div class="form-group">
    <label for="cost">Costo</label>
    <input type="number" class="form-control" id="cost" name="cost" @isset($item) value="{{$item->cost}}" @endisset placeholder="Ingrese las monedas" required>
</div>