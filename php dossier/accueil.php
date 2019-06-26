<?php include('template/header.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                            <div class="navbar">
                                <div class="navbar-inner">
                                    <ul class="breadcrumb">
                                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                                        <li>
                                            <a href="accueil.php">Accueil</a>   
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                           <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Clients</div>
                                    <?php
                                    //-----------------------------------------------------------------
                                    include('service/cnx.php');
                                    $set=$db->query("select * from client");
                                    $row_count = $set->rowCount();
                                    ?>
                                    <!-- le nombre des client  -->
                                    <div class="pull-right"><span class="badge badge-info"><?php echo $row_count; ?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom & Prénom</th>
                                                <th>Ville</th>
                                                <th>Téléphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row=$set->fetch()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['nom'].' '.$row['prenom'] ; ?></td>
                                                <td><?php echo $row['location']; ?></td>
                                                <td><?php echo $row['tel'] ; ?></td>
                                                <td><a href="#" class="btn btn-primary">Detail</a></td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left">Garde d'animaux</div>
                                    <?php
                                    //-----------------------------------------------------------------
                                    include('service/cnx.php');
                                    $setp=$db->query("select * from registration");
                                    $row_countp = $setp->rowCount();
                                    ?>
                                    <div class="pull-right"><span class="badge badge-info"><?php echo $row_countp; ?></span>

                                    </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Type</th>
                                                <th>Service</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($rowp=$setp->fetch()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $rowp['name']; ?></td>
                                                <td><?php echo $rowp['type']; ?></td>
                                                <td><?php echo $rowp['service'] ; ?></td>
                                                <td><a href="#" class="btn btn-primary">Detail</a></td>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                    </div>
                </div>
        </div>
<?php include('template/footer.php'); ?>
