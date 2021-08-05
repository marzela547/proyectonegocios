<h1>{{ModalTittle}}</h1>

<form action="index.php?page=mnt_usuario" method="POST">

    <div>
        <label for="usercod">Código</label>
        <br/>
        <input readonly disable type="text"  name="usercodd" id="usercodd"  value="{{usercod}}"/>
        <input   type="hidden" name="mode"  value="{{mode}}"/>
        <input   type="hidden" name="usercod" value="{{usercod}}"/>
    </div>
    <div>
        <label for="username">Nombre de Usuario</label>
        <br/>
        <input type="text" name="username" id="username" placeholder="Descripción" value="{{username}}"/>
    </div>
    <div>
        <label for="useremail">Email</label>
        <br/>
        <input type="text" name="useremail" id="useremail" placeholder="Biografía" value="{{useremail}}"/>
    </div>

    <div>
        <label for="rolescod">Rol</label>
        <br/>
        <input type="text" name="rolescod" id="rolescod"  value="{{rolescod}}"/>
    </div>
        <div>
        <label for="userest">Estado</label>
        <br/>
        <input type="text" name="userest" id="userest" value="{{userest}}"/>
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
            window.location.assign("index.php?page=mnt_usuarios");
        });
    });
</script>