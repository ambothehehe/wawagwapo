<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Home</title>
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
                        <h1><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>&nbsp; Proposals</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <?php include('application/views/messages.php'); ?>
                <div class="row">
                    <ul class="nav nav-tabs nav-justified" id="coordinator-proposal-tabs" role="tablist">
                        <li class="nav-item active">
                            <a href="#my-proposals" class="nav-link" data-toggle="tab" role="tab">
                                <strong>My Proposals</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#review" class="nav-link" data-toggle="tab" role="tab">
                                <strong>For Review</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#recommendation" class="nav-link" data-toggle="tab" role="tab">
                                <strong>Recommendation</strong>
                            </a>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="my-proposals" role="tab-panel">
                            <?php include('my_proposals.php');?>
                        </div>
                        <div class="tab-pane fade" id="review" role="tab-panel">
                            <?php include('review.php');?>
                        </div>
                        <div class="tab-pane fade" id="recommendation" role="tab-panel">
                            <?php include('recommendation.php');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php include('application/views/modals.php'); ?>

    <?php include('application/views/footer.php');?>

    <script type="text/javascript">
    	$(document).ready(function(){
    		var data;
	        var base_url = "<?php echo base_url(); ?>"+"index.php/";
			var dataJSON;
				//alert(data[0].proposal_id);
			var reccomendationTable = $('#recommendation_proposal_list').dataTable({
				"pagingType": "full_numbers",  
			});

			var review_proposal_list = $('#review_proposal_list').dataTable({
				"pagingType": "full_numbers",  
			});				

			//DISPLAY SA RECOMMENDATION PROPOSAL
			$.ajax({
				type: "POST",
				url: base_url + "Coordinator/getToBeEndorsedProposal",
				success:function(data2){
					dataJSON = JSON.parse(data2);
					var dataRows=[];
					for(var i = 0; i < dataJSON.length; i++)
					{	
						var proposal_details = JSON.parse(dataJSON[i].proposal_json_format);
						if(dataJSON[i].form_type == 1)
							var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
						else
							var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
						//console.log(proposal_details);
						var user_id = "<?php echo $user_id; ?>";
						dataRows.push([
							"<td>"+link+proposal_details.title+"</a>"+"</td>",
							"<td>"+"<a onclick="+"launch_submitted_user_profile("+user_id+")"+">"+dataJSON[i].lastname+"</a></td>",
							"<td>"+dataJSON[i].datetime_created+"</td>"
						]);
						//dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
					}
					if(dataRows.length > 0)
					{						
						reccomendationTable.fnAddData(dataRows);
					}else{
					
					}
				},
				error: function(data) {
					console.log(data);
				}
			});

			var my_coord_proposals = $('#my_coord_proposals').dataTable({
				"pagingType": "full_numbers",  
			});
				

			$.ajax({
				type: "POST",
				url: base_url + "Procedure_one/getDraftProposal",
				data: data,
				success:function(data2){
					dataJSON = JSON.parse(data2);
					var dataRows=[];
					for(var i = 0; i < dataJSON.length; i++)
					{	
						var proposal_details = dataJSON[i].proposal_json_format;
						if(dataJSON[i].form_type == 1)
							var link = "<a href="+base_url+"Representative/form_a_1?proposal_id="+dataJSON[i].proposal_id+">";
						else
							var link = "<a href="+base_url+"Representative/form_a_1?proposal_id="+dataJSON[i].proposal_id+">";
						console.log(proposal_details);
						var user_id = "<?php echo $user_id; ?>";
						dataRows.push([
							"<td>"+dataJSON[i].proposal_id+"</td>",
							"<td>"+link+proposal_details.title+"</a>"+"</td>",
							"<td>"+dataJSON[i].date_created+"</td>",
							"<td>Draft</td>"
						]);
						//dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
					}
					
					if(dataRows.length > 0)
					{						
						my_coord_proposals.fnAddData(dataRows);
					}else{
					
					}					
					
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert(errorThrown);
				}
			});

			$.ajax({
				type: "POST",
				url: base_url + "Procedure_one/getSubmittedProposal",
				success:function(data2){
					dataJSON = JSON.parse(data2);
					var dataRows=[];
					for(var i = 0; i < dataJSON.length; i++)
					{	
						var proposal_details = dataJSON[i].proposal_json_format;
						if(dataJSON[i].form_type == 1)
							var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
						else
						var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
						//console.log(proposal_details);
						var user_id = "<?php echo $user_id; ?>";
						dataRows.push([
							"<td>"+dataJSON[i].proposal_id+"</td>",
							"<td>"+link+proposal_details.title+"</a>"+"</td>",
							"<td>"+dataJSON[i].datetime_created+"</td>",
							"<td>Submitted</td>"
						]);
						//dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
					}
					if(dataRows.length > 0)
					{						
						my_coord_proposals.fnAddData(dataRows);
					}else{
					}
				},
				error: function(data) {
					console.log(data);
				}
			});
			
			$.ajax({
				type: "POST",
				url: base_url + "Coordinator/getProposalForReview",
				success:function(data2){
					dataJSON = JSON.parse(data2);
					
					var dataRows=[];
					for(var i = 0; i < dataJSON.length; i++)
					{	
						//var proposal = JSON.stringify(dataJSON[i].proposal_json_format);
						var proposal_details =JSON.parse(dataJSON[i].prop_details.proposal_json_format);
						//if(dataJSON[i].prop_details.form_type == 1)
						var scorelink = "<?php echo base_url() ?>"+"index.php/Proposals/view_allscores/"+dataJSON[i].prop_details.proposal_id;
						var viewscores = "<td>"+"<a href="+scorelink+">"+"View"+"</a></td>";
						var link = "<a href="+base_url+"Director/review_specificproposal/"+dataJSON[i].prop_details.proposal_id+"/"+dataJSON[i].reviewer1+"/"+dataJSON[i].reviewer2+"/"+dataJSON[i].prop_details.review_id+">";
						//else
							//var link="<a href=#>";
						
						var user_id = "<?php echo $user_id; ?>";
						console.log(proposal_details);
						dataRows.push([
							"<td>"+link+proposal_details.title+"</a>"+"</td>",
							"<td>"+dataJSON[i].user+"</td>",
							"<td>"+dataJSON[i].prop_details.date_created+"</td>",
							"<td>"+dataJSON[i].pair+"</td>",
							"<td>"+viewscores+"</td>"
						]);
						//dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
					}
					if(dataRows.length > 0)
					{						
						review_proposal_list.fnAddData(dataRows);
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