<!DOCTYPE html>
<html lang="en">

<head>
    <title>CESPPMS - Home</title>
    <?php include('application/views/header.php'); ?>
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
                    <ul class="nav nav-tabs nav-justified" id="director-proposal-tabs" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link" data-toggle="tab" href="#endorse" role="tab">
                                <strong>For Committee Review</strong>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">
                                <strong>For Endorsement</strong>
                            </a>
                        </li>
                    </ul>
                </div>
                <br>
                <div class="row">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="endorse" role="tab-panel">
                            <?php include('endorsed_proposals.php'); ?>
                        </div>
                        
                        <div class="tab-pane fade" id="review" role="tab-panel">
                            <?php include('review_proposals.php'); ?>
                        </div>
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
            var endorsedTable = $('#endorsed_proposal_list').dataTable({
                "pagingType": "full_numbers",  
            });
            
            var doneReviewTable = $('#review_props').dataTable({
                "pagingType": "full_numbers",  
            });
                
            $.ajax({
                type: "POST",
                url: base_url + "Director/getToBeEndorsedProposal",
                success:function(data2){
                    dataJSON = JSON.parse(data2);
                    var dataRows=[];
                    for(var i = 0; i < dataJSON.length; i++)
                    {   
                        var proposal_details = JSON.parse(dataJSON[i].proposal_json_format);
                        if(dataJSON[i].form_type == 1){
                            var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
                        }
                        else if(dataJSON[i].form_type == 2){
                            var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].proposal_id+">";
                        }
                        else if(dataJSON[i].form_type == 0){
                            var link = "<a href="+base_url+"Representative/loadspecificproposal_c/"+dataJSON[i].proposal_id+">";
                        }
                        console.log(proposal_details);
                        var user_id = "<?php echo $_SESSION['user_id']; ?>";
                        dataRows.push([
                            "<td>"+link+proposal_details.title+"</a>"+"</td>",
                            "<td>"+dataJSON[i].lastname+"</a></td>",
                            "<td>"+dataJSON[i].datetime_created+"</td>"
                        ]);
                        //dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
                    }
                    
                    if(dataRows.length > 0){
                        endorsedTable.fnAddData(dataRows);
                    }else{
                        
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            }); 
            
            
            /*ajax call for proposals DONE completed*/
             $.ajax({
                type: "POST",
                url: base_url + "Director/getForEndorsementDirector",
                success:function(data2){
                    dataJSON = JSON.parse(data2);
                    var dataRows=[];
                    
                    for(var i = 0; i < dataJSON.length; i++)
                    {   
                        //var proposal = JSON.stringify(dataJSON[i].proposal_json_format);
                        var proposal_details =JSON.parse(dataJSON[i].prop_details.proposal_json_format);
                        //alert(dataJSON[i].prop_details.status);
                        //if(dataJSON[i].prop_details.form_type == 1)
                        var scorelink = "<?php echo base_url() ?>"+"index.php/Proposals/view_allscores/"+dataJSON[i].prop_details.proposal_id;
                        
                        var viewscores = "<td>"+"<a href="+scorelink+">"+"View"+"</a></td>";
                        
                         var link = "<a href="+base_url+"Representative/loadspecificproposal/"+dataJSON[i].prop_details.proposal_id+"/"+"10"+">";
                        
                        //console.log(proposal_details);
                        
                        dataRows.push([
                            "<td>"+link+proposal_details.title+"</a>"+"</td>",
                            "<td>"+dataJSON[i].user+"</td>",
                            "<td>"+dataJSON[i].prop_details.date_created+"</td>",
                            "<td>"+dataJSON[i].pair+"</td>",
                            "<td>"+viewscores+"</td>"
                        ]);
                        //dataRows.push("<tr>"+"<td>"+dataJSON[i].proposal_json_format.title+"</td>"+"<td>"+dataJSON[i].proposal_json_format.inclusive_date1+"</td>"+"</tr>");
                    }
                    
                    if(dataRows.length > 0){
                        doneReviewTable.fnAddData(dataRows);
                    }else{
                        
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            })
        });
    </script>

</body>

</html>