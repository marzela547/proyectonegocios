<section class="contenedor">
<h1>{{ModalTittle}}</h1> 

<form class="formu" action="index.php?page=mnt_producto" method="POST">

    <div>
        <label for="prdcod">Código</label>
        <br/>
        <input readonly disabled type="text" name"prdcod" id="prdcod" placeholder="Código" value="{{prdcod}}"/>
        <input type="hidden" name="mode" value="{{mode}}"/>
        <input type="hidden" name="prdcod" value="{{prdcod}}"/>
    </div>
    <div>
            <label for="prddsc">Descripción</label>
            <br/>
            <input {{readonly}} type="text" name="prddsc" id="prddsc" placeholder="prddsc" value="{{prddsc}}"/>
        </div>
			<div>
            <label for="prdprc">Precio</label>
            <br/>
            <input {{readonly}} type="text" name="prdprc" id="prdprc" placeholder="prdprc" value="{{prdprc}}"/>
        </div>
			<div>
            <label for="prdImg">Img url</label>
            <br/>
            <input {{readonly}} type="text" name="prdImgPrm" id="prdImgPrm" placeholder="prdImgPrm" value="{{prdImgPrm}}"/>
        </div>
        <div>
        <label for="catnom">Categoria</label>
        <br/>
        <select name="catnom" id="catnom" {{if readonly}} readonly disabled {{endif readonly}}>
        {{foreach categorias}}
            <option value="catnom" {{if catnom}}selected{{endif catnom}}>{{catnom}}</option>
        {{endfor categorias}}
        </select>
    </div>
    <div>
        <label for="mrcnom">Marca</label>
        <br/>
        <select name="mrcnom" id="mrcnom" {{if readonly}} readonly disabled {{endif readonly}}>
        {{foreach marcas}}
            <option value="catnom" {{if mrcnom}}selected{{endif mrcnom}}>{{mrcnom}}</option>
        {{endfor marcas}}
        </select>
    </div>
		<div>
            <label for="prdcnt">Cantidad</label>
            <br/>
            <input {{readonly}} type="text" name="prdcnt" id="prdcnt" placeholder="prdcnt" value="{{prdcnt}}"/>
        </div>
    <div>
    {{if showCommitBtn}}<button type="submit" name="btnConfirmar" >Confirmar</button>{{endif showCommitBtn}}
    <button type="button" id="btnCancelar" >
        {{if showCommitBtn}}
        Cancelar
        {{endif showCommitBtn}}
        {{ifnot showCommitBtn}}
        Regresar
        {{endifnot showCommitBtn}}
    </button>
    </div>

</form>
</section>
<script>
    document.addEventListener("DOMContentLoaded", ()=>{
        const btnCancelar = document.getElementById("btnCancelar");
        btnCancelar.addEventListener("click", (e)=>{
            e.preventDefault();
            e.stopPropagation();
            window.location.assign("index.php?page=mnt_productos");
        });
    });
</script>