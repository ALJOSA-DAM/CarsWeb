<?php
require_once "header1_en.php";

?>


    <div class="body">
        <div class="zonas-centrales">
            <div class="texto">
                <h2>Car Models</h2>
            </div>
        </div>

<?php /*if (isset($_SESSION['u_level']))
    if($_SESSION['u_level'] == 0 ): */?>
    <div class="boton-anadir">
        <a class="boton" href="index2_en.php?action=formularioAnadirCoche&controller=controller_coche_en">Add Car</a>
    </div>
<?php /*endif; */?>
    <div class="tabla">
        <?php
        //Recorre mediante foreach todos los temas del foro y los pinta por pantalla
        if (!empty($coches)) {
            echo '<table>';
            echo '<tr>';
                echo '<th>Brand</th>';
                echo '<th>Model</th>';
                echo '<th>License plate</th>';
                echo '<th>Availability</th>';
//                echo '<th>Teléfono</th>';
//                echo '<th>Num Trabajadores</th>';
            echo '</tr>';
            foreach ($coches as $coche) {
                $id = $coche['id'];
                $marca = $coche['marca'];
                if($coche['disponible'] == 0 ){
                    $disponible = "Not available";
                    }else{
                    $disponible = "Available";
                }

                echo '<form action="" method="post">';
                echo '<tr>';
                    echo '<td>' . $coche['marca'], '</td>';
                    echo '<td>' . $coche['modelo'], '</td>';
                    echo '<td>' . $coche ['matricula'] . '</td>';
                    echo '<td>' . $disponible . '</td>';
//                    echo '<td>' . $coche ['telefono'] . '</td>';
//                    echo '<td>' . $coche ['num_trabajadores'] . '</td>';
                //if (isset($_SESSION['u_level']))
                    //if($_SESSION['u_level'] == 0 ):
                        echo '<td><a class="boton"  type="submit" href="index2_en.php?id_coche=' . $id . '&action=eliminarCocheController&controller=controller_coche_en">Delete</a></td>';
                        //echo '<td><a class="boton"  type="submit" href="index2.php?id_categoria=' . $id . '&cat_name='.$marca.'&action=formularioModificarOficina&controller=controller_oficina">Modificar</a></td>';
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
