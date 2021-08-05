

<section class="contenedor">
{{foreach catalogos}}
<div class="tarjetas">
    <img src={{prdImg}} alt="Imagen" />
    <div class="subtarjeta">
        <h2>{{prddsc}}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
       <h3>Precio:</h3>
       <h3 class="precio">{{prdprc}}</h3>
    </div>
    <!---<button type="button" name="btnAgregar" id="btnAgregar"><ion-icon name="cart-outline"></ion-icon> Agregar al carrito</button>-->
    <form action="" method="post">
        <input type="hidden" name="prdcod" value="{{prdcod}}">
        <input type="hidden" name="prdprc" value="{{prdprc}}">
        <input class="button" type="submit" name="btnAgregar" value=" Agregar al carrito">
    </form>
</div>
{{endfor catalogos}}
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
