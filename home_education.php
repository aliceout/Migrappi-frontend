<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<?php include('assets/php/_partials/_head.php'); ?>

<body class="has-navbar-fixed-top">


    <!------------------------------------------- TOPNAV ---------------------------------------------->
    <?php include('assets/php/_partials/_topnav.php'); ?>


    <div class="wrap columns">
        <!----------------------------------------- LEFTNAV ------------------------------------------>
        <aside class="column is-2">
            <div class="sidebar">
                <div class="menu">
                    <ul class="menu-list">
                        <li>
                            <a href="form_eduyear.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouvelle année</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="form_education.php">
                                <span class="logoleftnav"><i class="sidebar_sign fal fa-layer-plus"></i>Nouveau formulaire</span>
                                <i class="sidebar_sign fal fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">Années</p>
                    <p class="menu-label">Historique</p>
                    <?php include('assets/php/fake/hist_global.php'); ?>
                </div>
            </div>
        </aside>
        <!------------------------------------------ END LEFTNAV ------------------------------------------>



        <!------------------------------------------ WRAP ------------------------------------------>
        <section class="column">
            <div class="columns">
                <!------------------------------------------ MAIN ------------------------------------------>
                <div class="main column is-full">



                    <!------------------------------------------ SUBTITLE ------------------------------------------>
                    <div class="title_home level columns">
                        <div class="column is-2 folder_block">
                            <span class="folder_line"><span class="folder_number">C14687</span><br />NAKAMURA Aya</span>
                        </div>
                        <div class="column is-7 h1home">
                            <h1 class="subtitle is-4">Service éducation</h1>
                        </div>
                        <?php include('assets/php/_partials/subnav/home.php'); ?>
                    </div>
                    <div class="casetop"></div>



                    <!--------------------------------------- Informations ------------------------------------------>
                    <?php include('assets/php/cases/infos.php'); ?>



                    <!--------------------------------------- Identité ------------------------------------------>
                    <?php include('assets/php/cases/identite.php'); ?>



                    <!--------------------------------------- Contact ------------------------------------------>
                    <?php include('assets/php/cases/contact.php'); ?>



                    <!--------------------------------------- Situation au Maroc ------------------------------------------>
                    <?php include('assets/php/cases/situation_maroc.php'); ?>



                    <!--------------------------------------- Information de santé ------------------------------------------>
                    <?php include('assets/php/cases/sante.php'); ?>



                    <!----------------------------------- Information linguistiques -------------------------------------->
                    <?php include('assets/php/cases/langues.php'); ?>



                    <!--------------------------------- Experience / éducation ---------------------------------->
                    <?php include('assets/php/cases/exp_pro_education.php'); ?>



                    <!----------- END MAIN -------->
                </div>
            </div>
        </section>
        <!----------- END WRAP -------->
    </div>

    <!--------------- SCRIPTS ------------->
    <?php include('assets/php/_partials/_script.php'); ?>

</body>

</html>
