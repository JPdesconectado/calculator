<form method="POST" action="{{route('imc.store')}}">
    @csrf

    <div>
        <div>
            <label for="height" >Altura</label>
            <div>
                <input id="height" type="text"
                     name="height"
                     required
                     placeholder="1.70"
                     autofocus>
            </div>
        </div>

        <div>
            <label for="parent_id">Peso</label>
            <div>
                <input id="weight" type="text"
                name="weight"
                required
                placeholder="75"
                autofocus>
            </div>
        </div>
        <div>
            <div>
                <button type="submit">Calcular</button>
            </div>
        </div>

    </div>
</form>
