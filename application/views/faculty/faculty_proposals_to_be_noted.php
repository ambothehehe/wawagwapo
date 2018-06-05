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
                        <h1><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>&nbsp Proposals to be Noted</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <?php include('application/views/messages.php'); ?>
                <div class="row tab-content">
                    <!-- My Proposals -->
                    
                    <div class="">
                    <table id="note_proposal_list" class="table table=striped table-bordered table-hover lists-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Title of Project/Program/Activity Proposal</th>
                            <th>Submitted By</th>
                            <th>Date & Time Created</th>
                            <th>Remarks</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                    </table>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <?php include('application/views/modals.php'); ?>
    <?php include('application/views/footer.php');?>

   
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>"+"index.php/";
		var dataJSON;
			//alert(data[0].proposal_id);
		var notedTable = $('#note_proposal_list').dataTable({
			"pagingType": "full_numbers",  
		});
			
		$.ajax({
			type: "POST",
			url: base_url + "Faculty/getToBeNotedProposal",
			success:function(data2){
				dataJSON = JSON.parse(data2);
				var dataRows=[];
				for(var i = 0; i < dataJSON.length; i++)
				{	
					var proposal_details = JSON.parse(dataJSON[i].proposal_json_format);
					if(dataJSON[i].form_type == 1)
						var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";

                    else if(dataJSON[i].form_type == 2 && proposal_details.organization.length > 0)
                        var link = "<a href="+base_url+"Representative/loadspecificproposal_faculty/"+dataJSON[i].proposal_id+">";
                    else if(dataJSON[i].form_type == 1 && proposal_details.organization.length > 0)
                        var link = "<a href="+base_url+"Representative/loadspecificproposal_faculty/"+dataJSON[i].proposal_id+">";

					else
						var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
					//console.log(proposal_details);
					dataRows.push([
						"<td>"+link+proposal_details.title+"</a>"+"</td>",
						"<td>"+dataJSON[i].lastname+"</td>",
						dataJSON[i].datetime_created+"</td>",
						"<td>"+"To be Noted"+"</td>"
					]);
					//dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
				}
				if(dataRows.length > 0)
				{
					notedTable.fnAddData(dataRows);
				}else{
				}					
				
			},
			error: function(data) {
				console.log(data);
			}
		});		
    </script>

</body>

</html>