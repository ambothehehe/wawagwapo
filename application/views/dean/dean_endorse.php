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
                        <h1><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>&nbsp Proposals For Endorsement</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <?php include('application/views/messages.php'); ?>
                <div class="row tab-content">
                    <!-- My Proposals -->
                    
                    <table id="endorsed_proposal_list" class="table table-striped table-bordered table-hover lists-table">
                        <thead>
                            
                            <th class="text-center">Title of PPA Proposal</th>
                            <th class="text-center">Submitted By</th>
                            <th class="text-center">Date Submitted</th>
                        </thead>
                        <tbody>                        
                    </tbody>
                    </table>
                   
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
                
            $.ajax({
                type: "POST",
                url: base_url + "Dean/getToBeEndorsedProposal",
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
                        //console.log(proposal_details);
                        var user_id = "<?php echo $_SESSION['user_id']; ?>";
                        dataRows.push([
                            "<td>"+link+proposal_details.title+"</a>"+"</td>",
                            "<td>"+"<a onclick="+"launch_submitted_user_profile("+user_id+")"+">"+dataJSON[i].lastname+"</a></td>",
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

        });
    </script>

</body>

</html>