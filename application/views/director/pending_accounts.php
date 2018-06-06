<!DOCTYPE html>
<html>
<body>

    <table id="pending_accounts" class="table table-striped table-bordered table-hover lists-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>School</th>
                                    <th>Department</th>
                                    <th>Organization</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                            <tbody>

                                <?php foreach ($pending as $applying_user): ?>
                                    <tr>
                                        <td>
                                            <?php echo $applying_user->firstname;?> <?php echo $applying_user->lastname;?>
                                        </td>
                                        <td>
                                            <?php echo $applying_user->office;?>
                                        </td>
                                        <td>
                                            <?php echo $applying_user->department;?>
                                        </td>
                                        <td>
                                            <?php echo $applying_user->organization;?>
                                        </td>
                                        <td class="text-center">
                                            <input class="form-control" type ="hidden" name="senderId" value="<?php echo $applying_user->user_id; ?>">
                                            <a class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Accept" onclick="accept_pending_user(<?php echo $applying_user->user_id; ?>); window.location='<?php echo base_url(); ?>index.php/Users/send'" ><span class="glyphicon glyphicon-ok text-success"></span></a>
                                            &nbsp 
                                            <a class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Deny" onclick="deny_pending_user(<?php echo $applying_user->user_id; ?>)"><span class="glyphicon glyphicon-remove text-danger"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                        

</body>
</html>