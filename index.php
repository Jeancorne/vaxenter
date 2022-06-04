<?php

?>
<?php include_once 'dbconfig.php'; ?>
<?php include_once 'header.php'; ?>
<div style="text-align: center;" class="container">
    <img src="img/vaxenterimg.jpg" style="width: 30%;" alt="" srcset="">
</div>
<div class="container">
    <a href="add-data.php" class="btn btn-large btn-info">
        <i class="glyphicon glyphicon-plus"></i> &nbsp; Agregar usuario
    </a>
</div>
<br />
<div class="container">
    <table class='table table-bordered table-responsive'>
        <tr>
            <th>N°</th>
            <th>Nombre </th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th colspan="2" align="center">Acciones</th>
        </tr>
        <?php
        $crud->dataview("SELECT * FROM tbl_users");
        ?>
    </table>
</div>
<?php include_once 'footer.php'; ?>