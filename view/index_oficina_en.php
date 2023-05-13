<?php
require_once "header1_en.php";

?>


    <div class="body">
        <div class="zonas-centrales">
            <div class="texto">
                <h2>Our offices</h2>
            </div>
        </div>

<?php /*if (isset($_SESSION['u_level']))
    if($_SESSION['u_level'] == 0 ): */?>
    <div class="boton-anadir">
        <a class="boton" href="index2_en.php?action=formularioAnadirOficina&controller=controller_oficina_en">Add Office</a>
    </div>
<?php /*endif; */?>
    <div class="tabla">
        <?php
        //Recorre mediante foreach todos los temas del foro y los pinta por pantalla
        if (!empty($oficinas)) {
            echo '<table>';
            echo '<tr>';
                echo '<th>Name</th>';
                echo '<th>Address</th>';
                echo '<th>Email</th>';
                echo '<th>Phone</th>';
                echo '<th>Number of employees</th>';
            echo '</tr>';
            foreach ($oficinas as $oficina) {
                $id = $oficina['id'];
                $nombre = $oficina['nombre'];
                echo '<form action="" method="post">';
                echo '<tr>';
                    echo '<td>' . $oficina['nombre'], '</td>';
                    echo '<td>' . $oficina ['direccion'] . '</td>';
                    echo '<td>' . $oficina ['email'] . '</td>';
                    echo '<td>' . $oficina ['telefono'] . '</td>';
                    echo '<td>' . $oficina ['num_trabajadores'] . '</td>';
                //if (isset($_SESSION['u_level']))
                    //if($_SESSION['u_level'] == 0 ):
                        echo '<td><a class="boton"  type="submit" href="index2_en.php?id_oficina=' . $id . '&action=eliminarOficinaController&controller=controller_oficina_en">Delete</a></td>';
                        //echo '<td><a class="boton"  type="submit" href="index2.php?id_categoria=' . $id . '&cat_name='.$nombre.'&action=formularioModificarOficina&controller=controller_oficina">Modificar</a></td>';
                    //endif;
                echo '</tr>';
                echo '</form>';
            }
            echo '</table>';

        }

        ?>
    </div>
    </div>

<?php include "footer.php";
