<section class="contenedor">
<h1>Listado de Productos para el Index</h1>
<section class="WWList">
<table>
  <thead>
    <tr>
        <th>Usuario</th>
		<th>Correo</th>
		<th>Estado</th>
        <th>Tipo User</th>
        <th>Modificar/Eliminar</th>
    </tr>
  </thead>
  <tbody>
    {{foreach usuarios}}
      <td>{{username}}</td>
      <td>{{useremail}}</td>
      <td>{{userest}}</td>
      <td>{{rolescod}}</td>
        <td>
          <a href="index.php?page=mnt_usuario&mode=UPD&id={{usercod}}">Editar/</a>
          <a href="index.php?page=mnt_usuario&mode=DEL&id={{usercod}}">Eliminar</a>
        </td>
      </tr>
    {{endfor usuarios}}
  </tbody>
</table>
</section>
</section>

