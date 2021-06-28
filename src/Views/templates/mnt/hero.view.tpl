<h1>Trabajar con heroepanel</h1>

<form action="index.php?page=mnt_heroe" method="POST">

    <div>
        <label for="heroItemid">Código</label>
        <input type="text" name"heroItemid" id="heroItemid" placeholder="Código" value="{{heroItemid}}"/>
    </div>
    <div>
        <label for="heroname">Panel</label>
        <input type="text" name"heroname" id="heroname" placeholder="Panel" value="{{heroname}}"/>
    </div>
    <div>
        <label for="heroimgurl">URL Imagenes</label>
        <input type="text" name"heroimgurl" id="heroimgurl" placeholder="URL Imagen" value="{{heroimgurl}}"/>
    </div>
    <div>
        <label for="heroaction">HTML a Mostrar Hero</label>
        <input type="text" name"heroaction" id="heroaction" placeholder="HTML en Hero" value="{{heroaction}}"/>
    </div>
    <div>
        <label for="heroorder">Orden a Mostrar</label>
        <input type="text" name"heroorder" id="heroorder" placeholder="" value="{{heroorder}}"/>
    </div>
    <div>
        <label for="heroest">Estado</label>
        <select name="heroest" id="heroest">
            <option value="ACT" {{if heroest_act}}selected{{endif heroest_act}}>Mostrar</option>
            <option value="INA" {{if heroest_ina}}selected{{endif heroest_ina}}>Ocultar</option>
        </select>
    </div>
    <div>
        <button type="submit" name="btnConfirmar" >Confirmar</button>
        &nbsp;
        <button type="button" id="btnCancelar" >Cancelar</button>
    </div>

</form>

<script>
    document.addEventListener("DOMContentLoaded", ()=>{
        const btnCancelar = document.getElementById("btnCancelar");
        btnCancelar.addEventListener("click", (e)=>{
            e.preventDefault();
            e.stopPropagation();
            window.location.assign("index.php?page=mnt_pianos");
        })
    });
</script>