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
                                            <a href="accueil.php">Liste des clients</a>   
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Clients</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table class="table table-bordered table-hover">
                                      <thead>
                                        <tr>
                                          <th>Nom</th>
                                          <th>Prénom</th>
                                          <th>E-mail</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        include('service/cnx.php');
                                        $set=$db->query("select * from admin");
                                        while ($row=$set->fetch()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['nom']; ?></td>
                                            <td><?php echo $row['prenom']; ?></td>
                                            <td><?php echo $row['email'] ; ?></td>
                                            <td>
                                    <a href="service/supprimer_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Supprimer</a>
                                            </td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
            </div>
    </div>
</div>
<?php include('template/footer.php'); ?>