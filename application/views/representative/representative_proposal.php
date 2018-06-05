<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Home</title>
    <?php include('application/views/header.php');?>
</head>

<body>
    <div id="wrapper" class="container">
     
    <?php include('application/views/sidebar.php');?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            <?php include('application/views/topNav.php');?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h1><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>&nbsp; My Proposals</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <?php include('application/views/messages.php'); ?>

                <div class="row tab-content">

                <ul class="nav nav-tabs nav-justified">
    <li class="active"><a data-toggle="tab" href="#draft_proposals">Drafts</a></li>
    <li><a data-toggle="tab" href="#returned_proposals">Returned</a></li>

    <li><a id = "repsubmitted" data-toggle="tab" href="#submitted_proposals">Submitted <span id = "sirkolsubmittedrep" class="sirkol label label-danger" style ="display: none;">!</span></a></li>
     
   
   
  </ul>

            <div class="tab-content">
            <div id="draft_proposals" class="tab-pane fade in active">
              <div class="lists-table">
              <?php include('drafts_proposal.php');?>
                </div>
            
            <div id="submitted_proposals" class="tab-pane fade">
             <div class="lists-table">
              <?php include('submitted_proposal.php');?>
                </div>
                
                
            <div id="returned_proposals" class="tab-pane fade">
             <div class="lists-table">
              <?php include('returned_proposals.php');?>
                </div>
            </div>
            </div>
            </div>
            
            
          </div> <!-- tab-content -->

                   
            </div> <!-- row tab content -->
        </div><!-- container fluid -->

    </div> <!-- page content wrapper -->
    <?php include('application/views/footer.php');?>
	<script type="text/javascript">
		$(document).ready(function () {
			var data;
			var dataJSON;
			//alert(data[0].proposal_id);
			var draftTable = $('#submitted_proplist').dataTable({
			  "pagingType": "full_numbers",  
			});
			
			$.ajax({
				type: "POST",
				url: base_url + "Procedure_one/getDraftProposal",
				data:data,
				success:function(data2){
					dataJSON = JSON.parse(data2);
					var dataRows=[];
					for(var i = 0; i < dataJSON.length; i++)
					{
						if(dataJSON[i].form_type == 1) /*if form a and b*/
							var link = "<a href="+base_url+"Representative/form_a_1?proposal_id="+dataJSON[i].proposal_id+">";
						else
							var link = "<a href="+base_url+"Representative/form_a?proposal_id="+dataJSON[i].proposal_id+">";
						dataRows.push([
							"<td>"+link+dataJSON[i].proposal_json_format.title+"</a>"+"</td>",
							dataJSON[i].date_created+"</td>"
						]);
						//dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
					}
					if(dataJSON.length > 0)
					{
						draftTable.fnAddData(dataRows);
					}
				},
				error: function(data) {
					console.log(data);
				}
			});
						
			/*submitted proposal*/
			var draftTable1 = $('#submitted_1').dataTable({
			  "pagingType": "full_numbers",  
			});
			
			$.ajax({
				type: "POST",
				url: base_url + "Procedure_one/getSubmittedProposal",
				data:data,
				success:function(data2){
					dataJSON = JSON.parse(data2);
					var dataRows=[];
					for(var i = 0; i < dataJSON.length; i++)
					{
						var status = "";
						if(dataJSON[i].form_type == 1) /*if form a and b*/
						{
							var link = "<a href="+base_url+"Representative/form_a_1?proposal_id="+dataJSON[i].proposal_id+">";
						}
						else
							var link = "<a href="+base_url+"Representative/form_a?proposal_id="+dataJSON[i].proposal_id+">";
						if(dataJSON[i].status == 1){
							status = "For chair endorsement";
						}else if(dataJSON[i].status == 3){
							status = "For coordinator endorsement";
						}else if(dataJSON[i].status == 4){
							status = "For dean endorsement";
						}else if(dataJSON[i].status == 5){
							status = "Committee Review";
						}else if(dataJSON[i].status == 6){
							status = "On-going Committee Review";
						}else if(dataJSON[i].status == 10){
							status = "For Director endorsement to VPAA";
						}else if(dataJSON[i].status == 11){
							status = "For VPAA approval";
						}else if(dataJSON[i].status == 12){
							status = "Approved";
						}

						dataRows.push([
							"<td>"+link+dataJSON[i].proposal_json_format.title+"</a>"+"</td>",
							dataJSON[i].date_created+"</td>",
							status
						]);
						//dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
					}
					if(dataJSON.length > 0)
					{
						draftTable1.fnAddData(dataRows);
					}
				    
				},
				error: function(data) {
					console.log(data);
				}
			});
			
			/*returned proposal*/
			var draftTable2 = $('#submitted_2').dataTable({
			  "pagingType": "full_numbers",  
			});
			
			$.ajax({
				type: "POST",
				url: base_url + "Procedure_one/getReturnedProposal",
				data:data,
				success:function(data2){
					dataJSON = JSON.parse(data2);
					var dataRows=[];
					for(var i = 0; i < dataJSON.length; i++)
					{
						if(dataJSON[i].form_type == 1) /*if form a and b*/
							var link = "<a href="+base_url+"Representative/form_a_1?proposal_id="+dataJSON[i].proposal_id+">";
						else
							var link = "<a href="+base_url+"Representative/form_a?proposal_id="+dataJSON[i].proposal_id+">";
						dataRows.push([
							"<td>"+link+dataJSON[i].proposal_json_format.title+"</a>"+"</td>",
							dataJSON[i].proposal_json_format.inclusive_date1+"</td>",
							"Returned"
						]);
						//dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
					}
					if(dataJSON.length > 0)
					{
						draftTable2.fnAddData(dataRows);
					}
				},
				error: function(data) {
					console.log(data);
				}
			});
			
		});
	</script>

	<!-- <script type="text/javascript">
		$("#repsubmitted").click(function(){
			$("#sirkolsubmittedrep").show();
		});
	</script> -->

</body>

</html>