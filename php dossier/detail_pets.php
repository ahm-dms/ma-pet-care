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
                                            <a href="accueil.php">Liste des animaux</a>   
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Detail d'animaux</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal">
                                      <fieldset>
                                        <?php
                                        $id =$_GET['id'];
                                        //-----------------------------------------------------------------
                                        include('service/cnx.php');  
                                        $set=$db->query("select * from registration  where id=" .$id);
                                        if($row=$set->fetch()) {
                                        ?>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Nom</label>
                                          <div class="controls">
            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['name']; ?>" type="text"  disabled>
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
                            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['gendre']; ?>" type="text"  disabled>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                    <textarea class="input-xlarge textarea" style="width: 810px; height: 200px"><?php echo $row['description']; ?></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                  <textarea class="input-xlarge textarea" style="width: 810px; height: 200px"><?php echo $row['bio']; ?></textarea>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Service</label>
                                          <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['service']; ?>" type="text"  disabled>
                                          </div>
                                        </div>  
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Type</label>
                                          <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['type']; ?>" type="text"  disabled>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="disabledInput">Tarif de base par nuit</label>
                                          <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['tarif']; ?>" type="text"  disabled>
                                          </div>
                                        </div>  
                                        <div class="control-group">
                        <label class="control-label" for="disabledInput">Nombre total d'animaux que vous pouvez prendre pour un service</label>
                                          <div class="controls">
                            <input class="input-xlarge disabled" id="disabledInput" value="<?php echo $row['nbrservice']; ?>" type="text"  disabled>
                                          </div>
                                        </div>                                   
                                        <div class="form-actions">
                                          <a href="listepets.php" class="btn btn-warning">Retour</a>
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