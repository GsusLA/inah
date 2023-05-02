<?php
require("partials/header.php");
?>

<div class="container" id="diasInabiles">
    <div class="row align-content-center justify-content-center">
        <div class="col-lg-10 col-md-10 col-12 tituloizq">
            <h1>DÍAS INHÁBILES DEL 2023</h1>
            <p style="font-size: 12px;">Las fechas son preliminares</p>
        </div>
    </div>
    <div class="row align-content-center justify-content-center">
        <div class="col-12 ">
            <table class="table " id="tablaDiasI">
                <thead>
                    <tr>
                        <th scope="col">Mes</th>
                        <th scope="col">Descripción <p style="font-size: 10px;">(Ejemplo: Día del trabajo, Vacaciones de verano, Día del trabajador del SO, etc.)</p>
                        </th>
                        <th scope="col">Día Inhábil (dd/mm/aaaa)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Febrero</td>
                        <td>En conmemoración del 5 de febrero día de la promulgación de la Constitución de 1917</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Lunes 06/02/2023</td>

                    </tr>
                    <tr>
                        <td>Marzo</td>
                        <td>Conmemoración del 21 de marzo, natalicio de Benito Juárez</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Lunes 20/03/2023</td>

                    </tr>
                    <tr>
                        <td>Abril</td>
                        <td>Jueves Santo y Viernes Santo</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Lunes 03/04/2023 al Viernes 07/04/2023</td>
                    </tr>
                    <tr>
                        <td>Mayo</td>
                        <td>En conmemoración del Día del Trabajo</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Lunes 01/05/2023</td>
                    </tr>
                    </tr>
                    <tr>
                        <td>Mayo</td>
                        <td>En conmemoración del Aniversario de la Batalla de Puebla</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Viernes 05/05/2023</td>
                    </tr>
                    <tr>
                        <td>Julio</td>
                        <td>Periodo Vacacional</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Lunes 17/07/2023 al Viernes 28/07/2023</td>

                    </tr>
                    <tr>
                        <td>Noviembre</td>
                        <td>En conmemoración al día de muertos</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Jueves 02/11/2023 </td>
                    </tr>
                    <tr>
                        <td>Noviembre</td>
                        <td>En conmemoración del 20 de noviembre, día de la Revolución Mexicana</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Lunes 20/11/2023</td>
                    </tr>
                    <tr>
                        <td>Diciembre-Enero</td>
                        <td>Periodo Vacacional</td>
                        <td><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Jueves 21/12/2023 al Viernes 05/01/2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br><br><br>
<?php
require("partials/footer.php");
?>