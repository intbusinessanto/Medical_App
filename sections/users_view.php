<?php include("../templates/header.php"); ?>
<?php include("../sections/users.php"); ?>


<div class="row">
    <div class="col-12">
        <br>
        <div class="row">

            <div class="col-5">
                <form action="" method="POST">
                    <div class="card">
                        <div class="card-header">
                            Usuarios
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="idUsuario" class="form-label"></label>
                                <input type="hidden" class="form-control " name="idUsuario" id="idUsuario" value="<?php echo $idUsuario?>" aria-describedby="helpId" placeholder="ID">
                            </div>
                            <div class="mb-3">
                                <label for="usuLogin" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="usuLogin" id="usuLogin" value="<?php echo $usuLogin?>" aria-describedby="helpId" placeholder="Nombre de usuario">
                            </div>
                            <div class="mb-3">
                                <label for="usuPassword" class="form-label">Contrasena</label>
                                <input type="password" class="form-control" name="usuPassword" id="usuPassword" value="<?php echo $usuPassword?>" aria-describedby="helpId" placeholder="Ingrese la contrasena">
                            </div>
                            <div class="mb-3">
                                <label for="usuEstado" class="form-label">Estado</label>

                                <!-- <input type="text" class="form-control" name="estado" id="estado" aria-describedby="helpId" placeholder="Estado"> -->   
                                
                                <select type="text" class="form-select" name="usuEstado" id="usuEstado" value="<?php echo $usuEstado ?>" aria-describedby="helpId" placeholder="Estado">
                                    <option value="Activo">Activo</option> 
                                    <option value="Inactivo">Inactivo</option> 
                                </select>
                            
                            </div>
                            <div class="mb-3">
                                <label for="usuRol" class="form-label">Rol</label>
                                <input type="text" class="form-control" name="usuRol" id="usuRol" value="<?php echo $usuario['usuRol']; ?>" aria-describedby="helpId" placeholder="Rol">
                            </div>
                            <div class="btn-group" role="group">
                                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                                <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                                <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <div class="col-7">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Usuario Login
                            </th>
                            <th>
                                Estado
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listarUsuarios as $usuario){ ?>
                        <tr>
                            <td> <?php echo $usuario['idUsuario']; ?> </td>
                            <td><?php echo $usuario['usuLogin']; ?></td>
                            <td><?php echo $usuario['usuEstado']; ?></td>
                            
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $usuario['idUsuario']; ?>">
                                    <input type="submit" class="btn btn-info" name="accion" id="idUsuario" value="Seleccionar">
                                </form>
                            </td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include("../templates/footer.php"); ?>