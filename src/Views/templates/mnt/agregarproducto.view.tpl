<link rel="stylesheet" href="../../../../public/css/agregarproducto.css">

<section>
    <div class=" overflow-hidden m-0 h-auto w-full lg:w-2/4  ">
        <form class="  relative my-3 mx-8 justify-center w-auto h-auto lg:w-2/8 lg:mt-5 flex lg:mr-5 lg:flex-wrap lg:align-middle">
            <fieldset class="border rounded-md  relative w-full h-full bg-red-200 flex flex-wrap ">
                <div class="my-2 mx-2 h-12 w-full block lg:w-2/4 "><label for="txtproducto">Nombre del Producto</label><input type="text" name="txtproducto" id="txtproducto" class="w-full border border-gray-400 " placeholder="Anillo Fantasy" required=""><span id="txtproductoerror" class="hidden "></span><br></div>
                <div class="m-2 h-12 w-full flex p-0 lg:w-2/5 align-middle  ">
                    <div class=" w-2/4  "><label class="lbl" for="cmbmarca">Marca</label><select name="cmbmarca" id="cmbmarca" class="w-full" required=""><option value="">Seleccionar...</option><option value="opcpandora">Pandora</option><option value="opccasio">Casio</option><option value="opcbgood">Be Good</option></select><br></div>
                    <div class="ml-4 w-2/4  "><label class="lbl" for="cmbcategoria">Categoría</label><select name="cmbcategoria" id="cmbcategoria" class="w-full" required=""><option value="">Seleccionar...</option><option value="opcpulseras">Pulseras</option><option value="opcrelojes">Relojes</option><option value="opcanillos">Anillos</option></select></div><br></div>
                <div class="m-2 h-12 w-full lg:block lg:w-2/4 "><label for="txtprecio">Precio del Producto</label><input type="text" name="txtprecio" id="txtprecio" class="w-full border border-gray-400" placeholder="Anillo Fantasy" required=""><span id="txtprecioerror" class="hide"></span><br></div>
                <div class="flex  h-12 w-full lg:w-72 m-2 border-gray-900 ">
                    <!--
                    <div id="bexterior" class=" h-10 text-center align-middle flex border bg-gray-300  w-full lg:h-12  undefined">
                        <div id="binterior" class="lg:w-64 w-full m-1 lg:m-2  h-8 border-dashed border-gray-500 border border-collapse undefined">
                            <p class="text-xs mt-2 w-full overflow-hidden">Pulsa aquí para añadir una imagen</p><input class="relative bottom-9 max-w-full h-full z-0 opacity-0" type="file" name="foto" id="foto" accept="image/png, image/jpg"></div><img class="hidden"></div>
                    -->
                    <input type="file" id="myFile" name="filename">
                </div>
                <div class="w-full h-32 m-2 mb-8"><label for="txtLongText">Descripción del Producto</label><br><textarea id="txtLongText" e="txtLongText" rows="20" class="w-full h-full" placeholder="Descripción del producto" required=""></textarea><br></div>
                <div class="m-2 w-full h-12  align-middle flex  justify-end"><button class="lg:w-28 lg:h-12 w-full h-full   bg-blue-600 text-blue-50 hover:text-blue-600 hover:bg-blue-50  " type="submit" name="btnEnviar">Guardar</button></div>
            </fieldset>
        </form>
    </div>
</section>