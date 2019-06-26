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
                                <div class="muted pull-left">Detail de client</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal">
                                      <fieldset>
                                        <?php
                                        $id =$_GET['id'];
                                        //-----------------------------------------------------------------
                                        include('service/cnx.php');  
                                        $set=$db->query("select * from client  where id=" .$id);
                                        if($row=$set->fetch()) {
                                        ?>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Prénom & Nom</label>
                                          <div class="controls">
            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['prenom'].' '.$row['nom']; ?>" type="text"  disabled>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Date naissance</label>
                                          <div class="controls">
            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['daten']; ?>" type="text"  disabled>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Sexe</label>
                                          <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['gender']; ?>" type="text"  disabled>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Ville</label>
                                          <div class="controls">
                        <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['location']; ?>" type="text"  disabled>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Adresse</label>
                                          <div class="controls">
                        <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['adresse']; ?>" type="text"  disabled>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Téléphone</label>
                                          <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['tel']; ?>" type="text"  disabled>
                                          </div>
                                        </div>                                       
                                        <div class="form-actions">
                                          <a href="listeclients.php" class="btn btn-warning">Retour</a>
                                        </div>
                                      </fieldset>
                                        <?php 
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
            </div>
    </div>
</div>
<?php include('template/footer.php'); ?>