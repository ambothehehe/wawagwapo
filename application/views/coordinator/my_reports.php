<!DOCTYPE html>
<html>

<body>
<div style="height:50%; width:20%; float:left; padding-right:10px; ">
<ul class="nav nav-tabs nav-stacked">
  <li><a data-toggle="tab" class="active" href="#Form_d_list">Form D&nbsp;<small><i>(My Reports)</i></small></a></li>
  <li><a data-toggle="tab" href="#Form_e_list">Form E&nbsp;<small><i>(My Reports)</i></small></a></li>
</ul>
</div>


<div style="width:80%;float:left;">
    <div class="scroll" style="overflow: scroll;  
    background-color: #FFFFFF;
    width: 100%;
    height: 500px;">
<div class="tab-content" style=" margin:5px;">
  <div id="Form_d_list" class="tab-pane fade in active">
   
<!--start FORM D table of my reports -->
 <div class="lists-table">
                    <table id="reportd" class="table table-striped table-bordered table-hover lists-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                            <th>School and Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody> 
                        <?php if(empty($mycoord_d)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php 
                        foreach($mycoord_d as $myrepd) {?>
                            
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url() ?>index.php/Coordinator/loadreportdmyreport/<?php echo $myrepd->fd_id; ?>">
                                             <?php echo $myrepd->fd_title;?></a>
                                    </td>
                                   
                                    <td>
                                        <?php echo $myrepd->datecreated;?><br/>
                                        <input type="hidden" name="creator_id" value="<?php echo $myrepd->creator_id ;?>">
                                    </td>

                                    <td>
                                        <?php echo $myrepd->fd_dept;?><br><p style="font-size:75%;"><?php echo $myrepd->fd_school;?></p>
                                    </td>

                                    <!-- DELETE BUTTON -->
                                    <td>
                                     <?php if($myrepd->report_status == 5) {
                                         echo form_open('Faculty/deleteForm_d');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $myrepd->fd_id;?>" >
                                            <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> 
                                    </td>
                                    <?php }else{ ?>
                                                <input class="form-control" type="hidden" name="id" value="<?php echo $myrepd->fd_id;?>" >
                                                <button class="btn btn-sm btn-danger" disabled type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> 
                                            <?php } ?>
                                     </tr>
                        <?php  }?>

                    </tbody>
                    </table>

                    </div> 
                    <!-- end Form D of my reports -->


  </div>

  <div id="Form_e_list" class="tab-pane fade">
    
   <!--start FORM E table of my reports -->
    <div class="lists-table">
                    <table id="reportd" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Report</th>
                            <th>Date & Time Created</th>
                            <th>School and Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody> 
                        <?php if(empty($mycoord_e)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php 
                        foreach($mycoord_e as $repe) {?>
                            
                                    <tr>
                                        <td>
                                            <a href="<?php echo base_url() ?>index.php/Coordinator/loadreportemyreport/<?php echo $repe->fe_id; ?>">
                                                 <?php echo $repe->title;?></a>
                                        </td>
                                       
                                        <td>
                                            <?php echo $repe->datecreated;?><br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $repe->creator_id ;?>">
                                        </td>

                                        <td>
                                            <?php echo $repe->creators_department;?><br><p style="font-size:75%;"><?php echo $repe->creators_school;?></p>
                                        </td>
                                        
                                        <td>
                                            <?php if($repe->report_status == 5){
                                            echo form_open('Faculty/deleteForm_e');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $repe->fe_id;?>" >
                                            <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> 
                                        </td>
                                             <?php }else{ ?>
                                                <input class="form-control" type="hidden" name="id" value="<?php echo $repe->fe_id;?>" >
                                                <button class="btn btn-sm btn-danger" disabled type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> 
                                            <?php } ?>

                                         </tr>
                                        <?php  }?>
                        </tbody>
                    </table>
                </div> 
                    <!-- end Form E of my reports -->
  </div>
 
 </div>
</div>
</div>


</body>
</html>