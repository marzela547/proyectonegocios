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
        <label for="prdImg">Img url</label>
			<div id="bexterior">
                <div id="binterior">
                    <p>Pulsa aquí para añadir una imagen</p>
                    <input {{readonly}} type="file" name="prdImgPrm" id="prdImgPrm" placeholder="prdImgPrm" value="{{prdImgPrm}}"  accept="image/png, image/jpg"/>
                    </div>
                <img id="imag" src="">
                <button type="button" id="basu" onclick="eliminarIma()"> <ion-icon name="trash-outline" id="basurerito"></ion-icon> </button>
            </div>
        <div>
        <label for="catnom">Categoria</label>
        <br/>
        <select name="catnom" id="catnom" {{if readonly}} readonly disabled {{endif readonly}}>
        {{foreach categorias}}
            <option value="catid" {{if catnom}}selected{{endif catnom}}>{{catnom}}</option>
        {{endfor categorias}}
        </select>
    </div>
    <div>
        <label for="mrcnom">Marca</label>
        <br/>
        <select name="mrcnom" id="mrcnom" {{if readonly}} readonly disabled {{endif readonly}}>
        {{foreach marcas}}
            <option value="catid" {{if mrcnom}}selected{{endif mrcnom}}>{{mrcnom}}</option>
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

    const url = "'https://api.cloudinary.com/v1_1/defil6trk/upload'";
    const form = document.querySelector("form");

    form.addEventListener("submit", (e) => {
    e.preventDefault();

    const files = document.querySelector("prdImg").files;
    const formData = new FormData();

    for (let i = 0; i < files.length; i++){
        let file = files[i];
        formData.append("file", file);
        formData.append("upload_preset", "edpun0xj");

        fetch(url, {
        method: "POST",
        body: formData
        })
        .then((response) => {
            return response.text();
        })
        .then((data) => {
            //document.getElementById("data").innerHTML += data;
            console.log(data);
        });
    }
});

    let  inputFile = document.getElementById('prdImgPrm');
    let imgFoto   =document.getElementById('imag');
    let divInterno =document.getElementById('binterior');
    let divExterno = document.getElementById('bexterior');
    let basurerito = document.getElementById('basu');

    const eliminarIma = () =>{
    divInterno.style.display='block';
    divExterno.style.height='50px';
    basurerito.style.display= 'none';
    imgFoto.style.display='none';
    imgFoto.src= '';
    console.log("ingreso");
    }
console.log("ingreso");
const eventos = () => {
   inputFile.addEventListener('change', (event) => {
   let tam, arriba;
    if(screen.width > 750)
       {
           tam= '8em';
           arriba= '3';
        }
    else
        {
            tam= '4em';
            arriba= '0';
        }

       const file = event.target.files[0];
        console.log(file);
       subirImagen( file ).then( url => imgFoto.src = url ,
        divInterno.style.display='none',
        divExterno.style.height=tam,
        divExterno.style.zIndex=arriba,
        divExterno.style.marginTop = '40px',
        deco.style.marginTop='50px',
        basurerito.style.display= 'block',
        imgFoto.style.display='block');

    });

}

</script>