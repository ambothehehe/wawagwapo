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
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody> 
                        <?php if(empty($coord_d)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php 
                        foreach($mycoord_d as $myrepd) {?>
                            
                                <tr>
                                    <td>
                                        <a href="<?php echo base_url() ?>index.php/Coordinator/loadreportd/<?php echo $myrepd->fd_id; ?>">
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
                                     <?php
                                        echo form_open('Representative/deleteForm_d');?>
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $myrepd->fd_id;?>" >
                                        </form> </td>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody> 
                        <?php if(empty($own_reports_e)) {?>
                            <tr>
                                <td class="text-center" colspan="4"><em>--- No Created Reports ---</em></td>
                            </tr>
                        <?php } ?>


                        <?php foreach($coord_e as $myreps_e) {?>
                            <?php if($myreps_e->creator_id == $user_id) { ?>
                                    <tr>
                                        <td><a href="<?php echo base_url() ?>/Representative/loadreporte/<?php echo $myreps_e->id; ?>"><?php echo $myreps_e->title_of_program;?></a></td>
                                        <td><?php echo $myreps_e->datecreated;?>
                                             <br/>
                                            <input type="hidden" name="creator_id" value="<?php echo $myreps_e->creator_id ;?>">
                                        </td>
                                        <td><?php
                                            echo form_open('Representative/deleteForm_e');?>
                                            <input class="form-control" type="hidden" name="id" value="<?php echo $myreps_e->id;?>" >
                                           <button class="btn btn-sm btn-danger" type="submit" name="form_submit" value="DELETE FORM" onclick="return confirm('Are you sure you want to delete this item?')"><span class="glyphicon glyphicon-trash"></button>
                                            </form> </td>
                                    </tr>
                            <?php }} ?>
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