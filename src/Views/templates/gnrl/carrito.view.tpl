
    <section class="tablacarrito">
        <section class=" tablacarritos">
        <table id="tabla">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Eliminar de Carrito</th>
                </tr>
            </thead>
            <tbody>
                {{foreach carrito}}
                <tr>
                    <td><img src={{prdImg}} alt="Imagen" /></td>
                    <td >{{prddsc}}</td>
                    <td>
                    <input value="{{prdprc}}" name="prdprc" type="hidden"  id="preci" readonly/>
                    <p>{{prdprc}}</p>
                    </td>
                    <td class="canti" >
                        <form action="index.php?page=gnrl_carrito" method="post">
                            <input value="{{crtcod}}" name="crtcod" type="hidden" />
                            <input class="cantidadesc" value="{{crtcan}}" name="crtcan" type="number"  id="can"  onclick="totalb()"/>
                        </form>
                    </td>
                    <td>
                         <form action="index.php?page=gnrl_carrito" method="post">
                            <input value="{{prdcod}}" name="prdcod" type="hidden" />
                            <input value="{{prddsc}}" name="prddsc" type="hidden" />
                            <input class="buttoncc" name="btneliminarc" id="btneliminarc" type="submit" value="Eliminar del Carrito"/>
                        </form>
                    </td>
                    <td>
                        <input name="subtotal" type="hidden"  id="subtotal" readonly/>
                    </td>

                </tr>
                {{endfor carrito}}
            </tbody>
        </table>
            <div class="total">
                <p class="">Total:</p>
                <p id = "tol" name = "total"></p>
            </div>
                <hr width=100% />
            <form method="post" action="index.php?page=gnrl_carrito">
                <button type="submit" name="btnComprar" id="compra" class="btnComprar" >Compra Carrito</button>
            </form>
        </section>
    </section>


<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<script>
    totalb();
    function totalb ()
    {
        let cantidad = 0;
        let precio = 0;
        let total = 0;
        var txttotal = document.getElementById("tol");
        var cantidades = document.getElementsByName("crtcan");
        var precios = document.getElementsByName("prdprc");
        for(var i=0; i<cantidades.length; i++)
        {
            let subtotal = 0;
            cantidad = parseFloat(cantidades[i].value);
            precio = parseFloat(precios[i].value);
            if(cantidad > 0)
            {
            subtotal = cantidad * precio;
            total+=subtotal;
            }
            else
            {
                alert("La cantidad debe ser > 0");
                document.getElementById('compra').disabled=false;
            }

        }
        txttotal.innerHTML = total;
    }
    var cantidades = document.getElementsByName("crtcan");

        for(var i=0; i<cantidades.length; i++)
        {
            cantidades[i].addEventListener("change",datoscan);
        }
    function datoscan(e)
    {
        e.preventDefault();
        e.stopPropagation();
        console.log(e.target.parentNode);
        e.target.parentNode.submit();
    }
</script>

