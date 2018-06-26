<!DOCTYPE html>
<html>
<body>

<table id="active_accounts" class="table table-striped table-bordered table-hover lists-table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Full Name</th>
                                <th class="text-center">Designation</th>
                                <th class="text-center">Office</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tfoot>
                        <tbody>
                            <?php $count = 1; ?>
                            <?php foreach ($active as $actives): ?>
                                <?php if($actives->designation_fkid != 2) { ?>
                            
                            <tr>
                                <td><?= $count++ ?></td>
                                <td><?=$actives->firstname?> <?=$actives->lastname?></td>
                                <td><?=$actives->designation?></td>
                                <td><?=$actives->office?></td>
                                <td class="text-center">
                                    <span id="editAccount" data-toggle="modal" data-target="#editModal">

                                             <input class="form-control" type ="hidden" name="addedbyfirstname" value="<?php echo $fname; ?>">
                                             <input class="form-control" type ="hidden" name="addedbylastname" value="<?php echo $lname; ?>">

                                        <a class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Edit" onclick="launch_edit_profile_modal(<?php echo $actives->user_id; ?>, '<?php echo $fname;?>', '<?php echo $lname;?>');"><span class="glyphicon glyphicon-pencil text-success"></span></a>
                                    </span>
                                    &nbsp 
                                    <a class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="launch_delete_profile(<?php echo $actives->user_id; ?>)"><span class="glyphicon glyphicon-trash text-danger"></span></a>
                                </td>
                            </tr>

                            <?php } ?>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
</body>
</html>