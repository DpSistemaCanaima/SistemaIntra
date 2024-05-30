<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.php">
                <i class="bi bi-grid"></i>
                <span>Inicio</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Solicitud</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li <?php if (!$mostrar_li) echo 'style="display: none;"'; ?>>
                    <a href="soporte_tecnico.php">
                        <i class="bi bi-circle"></i><span>ARC</span>
                    </a>
                </li>

                <li <?php if (!$mostrar_li) echo 'style="display: none;"'; ?>>
                    <?php
      $ID = $_SESSION['IDDATOS'];
      $sql1 = "SELECT IDDATOS FROM user_datos WHERE IDDATOS = '$ID' ";
         $resulta = mysqli_query($conn,$sql1);
      
         $mostre = mysqli_fetch_assoc($resulta) 
         ?>
                    <a href="Constancia_de_trabajo.php?edi=<?php echo $mostre['IDDATOS'];?>">
                        <i class="bi bi-circle"></i><span>Contancia de Trabajo</span>
                    </a>
                </li>

                <li <?php if (!$mostrar_li) echo 'style="display: none;"'; ?>>
                    <a href="recibo.php">
                        <i class="bi bi-circle"></i><span>Recibo de Pago</span>
                    </a>
                </li>


                <li>
                    <a href="#openModal">Iniciar Sesion</a>


                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Descargas</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="./pdf/vacaciones.xls">
                        <i class="bi bi-circle"></i><span>Planilla de Vacaciones</span>
                    </a>
                </li>
                <li>
                    <a href="./pdf/permiso.docx">
                        <i class="bi bi-circle"></i><span>Planilla de Permisos</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Biblioteca Digital</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="./pdf/103_Manual_Canaimit.pdf">
                        <i class="bi bi-circle"></i><span>Manual de Canaima</span>
                    </a>
                </li>
                <li>
                    <a href="./pdf/para_el_usuario.docx">
                        <i class="bi bi-circle"></i><span>Cuidado de la Canaima</span>
                    </a>
                </li>
                <li>
                    <a href="./pdf/guia linux.pdf">
                        <i class="bi bi-circle"></i><span>Guia de Linux</span>
                    </a>
                </li>
                <li>
                    <a href="./pdf/Linux Desde Cero.pdf">
                        <i class="bi bi-circle"></i><span>Linux desde Cero</span>
                    </a>
                </li>
                <li>
                    <a href="./pdf/fundamentos de linux.pdf">
                        <i class="bi bi-circle"></i><span>Fundamentos de Linux</span>
                    </a>
                </li>
                <li>
                    <a href="./pdf/administrador de linux.pdf">
                        <i class="bi bi-circle"></i><span>Administrador de Linux</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Web</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="https://bdvenlinea.banvenez.com">
                        <i class="bi bi-circle"></i><span>Banco de Venezuela</span>
                    </a>
                </li>
                <li>
                    <a href="https://bicentenarioenlinea.bicentenariobu.com.ve/?p=1">
                        <i class="bi bi-circle"></i><span>Banco Bicentenario</span>
                    </a>
                </li>
                <li>
                    <a href="https://btenlinea.bt.com.ve/lg">
                        <i class="bi bi-circle"></i><span>Banco del Tesoro</span>
                    </a>
                </li>

                <li>
                    <a href="https://www.banesconline.com/mantis/Website/Login.aspx">
                        <i class="bi bi-circle"></i><span>Banco Banesco</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.provincial.com/personas.html">
                        <i class="bi bi-circle"></i><span>Banco Provincial</span>
                    </a>
                </li>
                <li>
                    <a href="https://persona.patria.org.ve/login/clave/">
                        <i class="bi bi-circle"></i><span>Patria</span>
                    </a>
                </li>
                <li>
                    <a href="https://mincyt.gob.ve/">
                        <i class="bi bi-circle"></i><span>Mincyt</span>
                    </a>
                </li>
                <li>
                    <a href=" https://minmujer.gob.ve/">
                        <i class="bi bi-circle"></i><span>Minmujer</span>
                    </a>
                </li>
            </ul>

        </li><!-- End Charts Nav -->
        <li class="nav-item" <?php if (!$mostrar_li) echo 'style="display: none;"'; ?>>
            <a class="nav-link collapsed" href="logout.php">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Cerrar</span>
            </a>
        </li><!-- End Login Page Nav -->

</aside><!-- End Sidebar-->