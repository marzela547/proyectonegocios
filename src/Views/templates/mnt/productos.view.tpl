<section class="contenedor">
<h1>Listado de Productos para el Index</h1>
<section class="WWList">
<table>
  <thead>
    <tr>
        <th>No.</th>
        <th>Descripción</th>
				<th>Precio</th>
				<th>ImgPrm</th>
				<th>ImgScd</th>
        <th>Modificar/Eliminar</th>
    </tr>
  </thead> 
  <tbody>
    {{foreach productos}}
    <tr>
      <td>{{rownum}}</td>
      <td><a href="index.php?page=mnt_producto&mode=DSP&id={{prdcod}}">{{prddsc}}</a></td>
			<td>{{prdprc}}</td>
			<td>{{prdImgPrm}}</td>
			<td>{{prdImgScd}}</td>
      <td>
        <a href="index.php?page=mnt_producto&mode=UPD&id={{prdcod}}">Editar/</a>
        <a href="index.php?page=mnt_producto&mode=DEL&id={{prdcod}}">Eliminar</a>
      </td>
    </tr>
    {{endfor productos}}

  </tbody>
</table>
<button type="button" name="btnAgregar" id="btnAgregar">Agregar producto</button>
</section>
</section>
<script>
    document.addEventListener("DOMContentLoaded", ()=>{
        const btnAgregar = document.getElementById("btnAgregar");
        btnAgregar.addEventListener("click", (e)=>{
            e.preventDefault();
            e.stopPropagation();
            window.location.assign("index.php?page=mnt_producto&mode=INS");
        });
    });
</script>
