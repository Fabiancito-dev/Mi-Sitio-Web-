<div class="">
    <?php if ($this->session->flashdata('status')) : ?>
        <div class="alert-succes-product">
            <?php echo $this->session->flashdata('status'); ?>
        </div>
    <?php endif; ?>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Gestionar <b>Usuarios</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addUserModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Registrar Usuario</span></a>
                    <a href="#deleteUserModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>---</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0;
                foreach ($users as $u) : ?>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td><?php echo $u->usuario_id; ?></td>
                        <td><?php echo $u->nombre . " " . $u->apellido; ?></td>
                        <td><?php echo $u->correo; ?></td>
                        <td>---</td>
                        <td>
                            <a href="#editUserModal<?php echo $u->_id; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#deleteUserModal<?php echo $u->_id; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                        </td>
                    </tr>
                    <!-- Edit Modal HTML -->
                    <div id="editUserModal<?php echo $u->_id; ?>" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url() . 'dashboard/list-users-edit' ?>" method="post">
                                    <input type="hidden" name="id_user" value="<?php echo $u->_id; ?>" required>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modificar datos de Usuario</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>nombre*</label>
                                            <input name="name" type="text" class="form-control" value="<?php echo $u->nombre; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Apellidos*</label>
                                            <input name="last_name" type="text" class="form-control" value="<?php echo $u->apellido; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Correo Electronico*</label>
                                            <input name="email" type="email" class="form-control" value="<?php echo $u->correo; ?>" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-success" value="Aplicar Cambios">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Delete Modal HTML -->
                    <div id="deleteUserModal<?php echo $u->_id; ?>" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url() . 'dashboard/list-users-delete' ?>" method="post">
                                    <input type="hidden" name="id_user" value="<?php echo $u->_id; ?>" required>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Eliminar Usuario</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Estas seguro de querer borrar a este usuario?</p>
                                        <h4 class="modal-title"><?php echo $u->nombre, ' ', $u->apellido; ?></h4>
                                        <p class="text-warning"><small>Esta accion no se puede deshacer.</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Scripts para modal -->
                <?php $i++;
                endforeach; ?>
            </tbody>
        </table>
        <div class="clearfix">
            <!--<div class="hint-text">Mostrando <b><?= $i ?></b> de <b>X</b> registros</div>-->
            <ul class="pagination">
                <?php echo $this->pagination->create_links() ?>
                <li class="page-item disabled"><a href="#">Anterior</a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <!-- <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li> -->
                <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Add Modal HTML -->
<div id="addUserModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url() . 'dashboard/list-users-save' ?>" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombres*</label>
                        <input name="name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Apellidos*</label>
                        <input name="last_name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Correo*</label>
                        <input name="email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Contraseña*</label>
                        <input name="password" type="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>identificacion*</label>
                        <input name="user_id" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Registrar">
                </div>
            </form>
        </div>
    </div>
</div>