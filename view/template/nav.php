<nav class="clearfix">
        <ul>
            <li><a href="<?php echo HOME_URI;?>">Início</a></li>
            <li><a href="<?php echo HOME_URI;?>">MVC</a></li>
            <li><a href="<?php echo HOME_URI;?>">POO</a></li>
            <li><a href="<?php echo HOME_URI;?>urlAmigavel/">URL Amigável</a></li>
            <li><a href="<?php echo HOME_URI;?>contato/">Contato</a></li>
            <?php
            if (isset($_SESSION['user'])) {
               
                if ($_SESSION['user']['perfil']=="admin") {
                    ?>
            <li><a href="<?php echo HOME_URI; ?>usuario/">Usuário</a></li>
        <?php
                }
            }
        ?>
           
        </ul>
    </nav>