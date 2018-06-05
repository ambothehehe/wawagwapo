<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Proposals</title>
    <?php include('application/views/header.php');?>
</head>

<body>

    <div id="wrapper">

        <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <?php include('application/views/topNav.php');?>

            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h1><span class="glyphicon glyphicon-check" aria-hidden="true"></span>&nbsp; Approved Proposals</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- My Proposals -->
                    
                    <table id="vpaaListApproveProposals" class="table table-striped table-bordered table-hover lists-table">
                        <thead>
                            
                            <th class="text-center">Title of PPA Proposal</th>
                            <th class="text-center">Submitted By</th>
                            <th class="text-center">Date Submitted</th>
                           
                        </thead>
                         <tbody>
						</tbody>
                    </table>
                    <!-- <nav align="center">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav> -->
                </div>
            </div>

            <!-- Leigh Profile -->
            <div class="modal fade" tabindex="-1" role="dialog" id="leigh_profile">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp User's Information</h4>
                  </div>
                  <div class="modal-body">
                    <table>
                        <tr>
                            <td width="35%"><label>Full Name</label></td>
                            <td width="5%"><label>:</label></td>
                            <td>Leigh Mabano</td>
                        </tr>
                        <tr>
                            <td><label>Office/Unit</label></td>
                            <td><label>:</label></td>
                            <td>CAS - Computer and Information Sciences</td>
                        </tr>
                        <tr>
                            <td><label>Designation</label></td>
                            <td><label>:</label></td>
                            <td>Representative</td>
                        </tr>
                        <tr>
                            <td><label>Email Address</label></td>
                            <td><label>:</label></td>
                            <td>leigh_example@yahoo.com</td>
                        </tr>
                        <tr>
                            <td><label>Contact Number</label></td>
                            <td><label>:</label></td>
                            <td>09123456789</td>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Amanda Profile -->
            <div class="modal fade" tabindex="-1" role="dialog" id="amanda_profile">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp User's Information</h4>
                  </div>
                  <div class="modal-body">
                    <table>
                        <tr>
                            <td width="35%"><label>Full Name</label></td>
                            <td width="5%"><label>:</label></td>
                            <td>Amanda Quinal</td>
                        </tr>
                        <tr>
                            <td><label>Office/Unit</label></td>
                            <td><label>:</label></td>
                            <td>CAS - Computer and Information Sciences</td>
                        </tr>
                        <tr>
                            <td><label>Designation</label></td>
                            <td><label>:</label></td>
                            <td>Representative</td>
                        </tr>
                        <tr>
                            <td><label>Email Address</label></td>
                            <td><label>:</label></td>
                            <td>amanda_example@yahoo.com</td>
                        </tr>
                        <tr>
                            <td><label>Contact Number</label></td>
                            <td><label>:</label></td>
                            <td>09123456789</td>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>

        </div>

    </div>

    <?php include('application/views/footer.php');?>
<script type="text/javascript">
        $(document).ready(function(){
            var data;
            var base_url = "<?php echo base_url(); ?>"+"index.php/";
            var dataJSON;
			
			var vpaaListApproveProposals = $('#vpaaListApproveProposals').dataTable({
                "pagingType": "full_numbers",  
            });
                
            $.ajax({
                type: "POST",
                url: base_url + "Vpaa/approveProposal",
                success:function(data2){
                    dataJSON = JSON.parse(data2);
                    var dataRows=[];
                    for(var i = 0; i < dataJSON.length; i++)
                    {   
                        var proposal_details = JSON.parse(dataJSON[i].proposal_json_format);
                        if(dataJSON[i].form_type == 1)
                            var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
                        else
                            var link="<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
                        console.log(proposal_details);
                        var user_id = "<?php echo $_SESSION['user_id']; ?>";
                        dataRows.push([
                            "<td>"+link+proposal_details.title+"</a>"+"</td>",
                            "<td>"+"<a onclick="+"launch_submitted_user_profile("+user_id+")"+">"+dataJSON[i].lastname+"</a></td>",
                            "<td>"+dataJSON[i].date_created+"</td>"
                        ]);
                        //dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
                    }
                    
					if(dataRows.length > 0){
						vpaaListApproveProposals.fnAddData(dataRows);
					}else{
					    
					}
                },
                error: function(data) {
                    console.log(data);
                }
            }); 
			
        });
    </script>
</body>

</html>