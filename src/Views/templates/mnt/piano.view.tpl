<h1>{{ModalTittle}}</h1>

<form action="index.php?page=mnt_piano" method="POST">

    <div>
        <label for="Id_piano">Código</label>
        <br/>
        <input type="text" name"Id_piano" id="Id_piano" placeholder="Código" value="{{Id_piano}}"/>
    </div>
    <div>
        <label for="Descrip_piano">Descripción</label>
        <br/>
        <input type="text" name"Descrip_piano" id="Descrip_piano" placeholder="Descripción" value="{{Descrip_piano}}"/>
    </div>
    <div>
        <label for="Bio_piano">Biografia</label>
        <br/>
        <input type="text" name"Bio_piano" id="Bio_piano" placeholder="Biografía" value="{{Bio_piano}}"/>
    </div>
    <div>
        <label for="Price_piano">Precio</label>
        <br/>
        <input type="text" name"Price_piano" id="Price_piano" placeholder="Precio" value="{{Price_piano}}"/>
    </div>
    <div>
        <label for="Sales_piano">Ventas</label>
        <br/>
        <input type="text" name"Sales_piano" id="Sales_piano" placeholder="Ventas" value="{{Sales_piano}}"/>
    </div>
    <div>
        <label for="Img_uri_piano">URL Imagem</label>
        <br/>
        <input type="text" name"Img_uri_piano" id="Img_uri_piano" placeholder="URL" value="{{Img_uri_piano}}"/>
    </div>
    <div>
        <label for="Imgthb_piano">THB Imagen</label>
        <br/>
        <input type="text" name"Imgthb_piano" id="Imgthb_piano" placeholder="Lo que sea" value="{{Imgthb_piano}}"/>
    </div>
    <div>
        <label for="Est_pieano">Estado</label>
        <br/>
        <select name="Est_pieano" id="Est_pieano">
            <option value="ACT" {{if Est_pieano_act}}selected{{endif Est_pieano_act}}>Mostrar</option>
            <option value="INA" {{if Est_pieano_ina}}selected{{endif Est_pieano_ina}}>Ocultar</option>
        </select>
    </div>
    <div>
        <button type="submit" name="btnConfirmar" >Confirmar</button>
        <button type="button" name="btnCancelar" >Cancelar</button>
    </div>

</form>

<script>
    document.addEventListener("DOMContentLoaded", ()=>{
        const btnCancelar = document.getElementById("btnCancelar");
        btnCancelar.addEventListener("click", (e)=>{
            e.preventDefault();
            e.stopPropagation();
            window.location.assign("index.php?page=mnt_pianos");
        });
    });
</script>