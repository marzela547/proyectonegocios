<h1>Listado de todos los pianos</h1>

<section class="WWList">
    <table>
    <thead>
        <tr>
            <th>Descripción</th>
            <th>Biografía</th>
            <th>Precio</th>
            <th>Ventas</th>
            <th>URL Imagen</th>
            <th>THB Imagen</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        {{foreach pianos}}
        <tr>
            <td>{{Descrip_piano}}</td>
            <td>{{Bio_piano}}</td>
            <td>{{Price_piano}}</td>
            <td>{{Sales_piano}}</td>
            <td>{{Img_uri_piano}}</td>
            <td>{{Imgthb_piano}}</td>
            <td>{{Est_pieano}}</td>
        </tr>
        {{endfor pianos}}
    </tbody>
</table>
</section>
