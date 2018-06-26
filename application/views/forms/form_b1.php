<!DOCTYPE html>
<html lang="en">



<body>

   
      <div class="page-header text-center">
                        <h1>Filling Out Form B <small>CES Program/Project/Activity Proposal</small></h1>
                        <h3>(<em>Details</em>)</h3>
                    </div>

                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>Program/Project/Activity Profile</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered" width="100%">
                                      <thead>
                                        <th class="bg-success">A. College/School/Department/Unit Responsible (<em>please <span class="text-danger">check/tick</span> the appropiate item</em>)<span style = "color: red;"> ****</span></th>
                                      </thead>
                                      <tbody>
                                        <tr> <td class="col-md-8">
                                         
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" id="CES Office" value="CES Office" required>CES Office</label>
                                                   <!--  <?php echo form_checkbox('unit_responsible[]', 'CES Office'); ?>CES Office -->
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                   <!--   <?php echo form_checkbox('unit_responsible[]', 'School of Arts and Sciences'); ?>School of Arts and Sciences -->

                                                    <label><input type="checkbox" name="unit_responsible[]" id="School of Arts and Sciences" value="School of Arts and Sciences" data-toggle="collapse" data-target="#sas">School of Arts and Sciences</label>
                                                    <div id="sas" class="collapse">
                                                      <select class="form-control"  name="school_of_arts_and_sciences">
                                                        <option value="0">-- Select your Department --</option>
                                                        <option id="Languages and Literature" value="Languages and Literature">Languages and Literature</option>
                                                        <option id="Philosophy and Religious Studies" value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                                                        <option id="Psychology" value="Psychology">Psychology</option>
                                                        <option id="Anthropology, Sociology and History" value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                                                        <option id="Biology" value="Biology">Biology</option>
                                                        <option id="Chemistry" value="Chemistry">Chemistry</option>
                                                        <option id="Computer and Information Sciences" value="Computer and Information Sciences">Computer and Information Sciences</option>
                                                        <option id="Mathematics" value="Mathematics">Mathematics</option>
                                                        <option id="Physics" value="Physics">Physics</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" id="School of Archetecture, Fine Arts and Design" value="School of Archetecture, Fine Arts and Design" data-toggle="collapse" data-target="#safad">School of Architecture, Fine Arts and Design</label>
                                                    <div id="safad" class="collapse">
                                                      <select class="form-control" name="school_of_architecture_fine_arts_and_design">
                                                        <option value="0">-- Select your Department --</option>
                                                        <option id="Architecture" value="Architecture">Architecture</option>
                                                        <option id="Fine Arts" value="Fine Arts">Fine Arts</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" id="School of Education" value="School of Education" data-toggle="collapse" data-target="#soed">School of Education</label>
                                                    <div id="soed" class="collapse">
                                                      <select class="form-control" name="school_of_education">
                                                        <option value="0">-- Select your Department --</option>
                                                        <option id="Teacher Education" value="Teacher Education">Teacher Education</option>
                                                        <option id="Science and Mathematics" value="Science and Mathematics">Science and Mathematics</option>
                                                        <option id="Physical Education" value="Physical Education">Physical Education</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" id="School of Engineering" value="School of Engineering" data-toggle="collapse" data-target="#soe">School of Engineering</label>
                                                    <div id="soe" class="collapse">
                                                      <select class="form-control" name="school_of_engineering">
                                                        <option value="0">-- Select your Department --</option>
                                                        <option id="Chemical Engineering" value="Chemical Engineering">Chemical Engineering</option>
                                                        <option id="Civil Engineering" value="Civil Engineering">Civil Engineering</option>
                                                        <option id="Computer Engineering" value="Computer Engineering">Computer Engineering</option>
                                                        <option id="Electronics and Communications Engineering" value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                                        <option id="Electrical Engineering" value="Electrical Engineering">Electrical Engineering</option>
                                                        <option id="Industrial Engineering" value="Industrial Engineering">Industrial Engineering</option>
                                                        <option id="Mechanical Engineering" value="Mechanical Engineering">Mechanical Engineering</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" id="School of Business and Economics" value="School of Business and Economics" data-toggle="collapse" data-target="#sbe">School of Business and Economics</label>
                                                    <div id="sbe" class="collapse">
                                                      <select class="form-control" name="school_of_business_and_economics">
                                                        <option value="0">-- Select your Department --</option>
                                                        <option id="Accountancy" value="Accountancy">Accountancy</option>
                                                        <option id="Business Administration" value="Business Administration">Business Administration</option>
                                                        <option id="Economics" value="Economics">Economics</option>
                                                        <option id="Hospitality Management" value="Hospitality Management">Hospitality Management</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" id="School of Health Care Profession" value="School of Health Care Profession" data-toggle="collapse" data-target="#shcp">School of Health Care Profession</label>
                                                    <div id="shcp" class="collapse">
                                                      <select class="form-control" name="school_of_health_care_profession">
                                                        <option value="0">-- Select your Department --</option>
                                                        <option id="Nursing" value="Nursing">Nursing</option>
                                                        <option id="Pharmacy" value="Pharmacy">Pharmacy</option>
                                                        <option id="Nutrition and Dietics"value="Nutrition and Dietics">Nutrition and Dietics</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" id="School of Law and Governance" value="School of Law and Governance" data-toggle="collapse" data-target="#solg">School of Law and Governance</label>
                                                    <div id="solg" class="collapse">
                                                      <select class="form-control" name="school_of_law_and_governance">
                                                        <option value="0">-- Select your Department --</option>
                                                        <option id="Law" value="Law">Law</option>
                                                        <option id="Political Science" value="Political Science">Political Science</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="unit_responsible[]" id="Support Unit" value="Support Unit" data-toggle="collapse" data-target="#su">Support Unit</label>
                                                    <div id="su" class="collapse">
                                                      <select class="form-control" name="support_unit">
                                                        <option value="0">-- Choose your Unit --</option>
                                                        <option id="Athletics Office" value="Athletics Office">Athletics Office</option>
                                                        <option id="Campus Ministry, Talamban" value="Campus Ministry, Talamban">Campus Ministry, Talamban</option>
                                                        <option id="Guidance Center" value="Guidance Center">Guidance Center</option>
                                                        <option id="Director of Library" value="Director of Library">Director of Library</option>
                                                        <option id="OSA Downtown" value="OSA Downtown">OSA Downtown</option>
                                                        <option id="OSA Talamban" value="OSA Talamban">OSA Talamban</option>
                                                        <option id="Club Mega" value="Club Mega">Club Mega</option>
                                                        <option id="Pathways" value="Pathways">Pathways</option>
                                                        <option id="USC-Supreme Student Council" value="USC-Supreme Student Council">USC-Supreme Student Council</option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                </td> 
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                      <thead>
                                        <th class="bg-success">B. Time Frame (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)<span style = "color: red;"> ****</span></th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" id="Short Term-" name="term" value="Short Term-" data-toggle="collapse" id="shortterm" data-target="#short_term" enabled="true">Short Term</label>
                                                  </div>
                                                  <div id="short_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" id="1 Semester" name="semester" value="1 Semester" enabled="true" id="sem1" >1 Semester</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" id="2 Semesters" name="semester" value="2 Semesters" enabled="true" id="sem2" >2 Semesters</label>
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" id="Medium Term-" value="Medium Term-"data-toggle="collapse" id="medterm" data-target="#medium_term" enabled="true">Medium Term</label>
                                                  </div>
                                                  <div id="medium_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" id="3 Semesters" name="semester" value="3 Semesters" enabled="true" id="sem3" >3 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" id="4 Semesters" name="semester" value="4 Semesters" enabled="true" id="sem4" >4 Semesters</label>
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="radio">
                                                    <label><input type="radio" name="term" id="Long Term-" value="Long Term-" data-toggle="collapse" id="longterm" data-target="#long_term" enabled="true">Long Term</label>
                                                  </div>
                                                  <div id="long_term" class="collapse">
                                                    <div class="panel">
                                                      <ul style="list-style-type:none">
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" id="5 Semesters" name="semester" value="5 Semesters" enabled="true" id="sem5" >5 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio">
                                                           <label><input type="radio" id="6 Semesters" name="semester" value="6 Semesters" enabled="true" id="sem6" >6 Semesters</label>
                                                          </div>
                                                        </li>
                                                        <li>
                                                          <div class="radio form-inline">
                                                            <label><input type="radio" id="others" name="semester" value="others" enabled="true" id="sem_others" >Others:</label>
                                                            &nbsp
                                                            <input type="text" id="othersem" class="form-control" name="semester_others" placeholder="Count by Semesters" >
                                                               
                                                          </div>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 3rd Part -->
                                      <thead>
                                        <th class="bg-success">C. Locus and Leadership (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)<span style = "color: red;"> ****</span></th>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <table class="table table-bordered" width="100%">
                                              <tr>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="Course-based(undergraduate)" value="Course-based(undergraduate)">Course-based (undergraduate)</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="Course-based(graduate)" value="Course-based(graduate)">Course-based (graduate)</label>
                                                  </div>
                                                </td>
                                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="Student Organization-led" value="Student Organization-led">Student Organization-led</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="Department-led" value="Department-led">Department-led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="School-wide" value="School-wide">School-wide</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="Alumni-led" value="Alumni-led">Alumni-led</label>
                                                  </div>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="Support-unit Led" value="Support-unit Led">Support-unit Led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="SVD-Led" value="SVD-Led">SVD-Led</label>
                                                  </div>
                                                </td>
                                                <td>
                                                  <div class="checkbox form-inline">
                                                    <label><input type="checkbox" name="locus_and_leadership[]" id="others:" value="others:">Others</label>
                                                    &nbsp
                                                    <input type="text" class="form-control" placeholder="Type Here..." name="locus_and_leadership_others">
                                                  </div>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>

<!-- +_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_ 4th Part -->
                                      <thead>
                                        <th class="bg-success">D. Nature of the Program/Project/Activity (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)<span style = "color: red;"> ****</span></th>
                                      </thead>
                                      
                                      <?php include('nature_of_the_program.php'); ?>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                      <thead>
                                        <th class="bg-success">E. Program Area (<em>please <span class="text-danger">check/tick</span> the appropriate item</em>)<span style = "color: red;"> ****</span></th>
                                      </thead>
                                      
                                      <?php include('program_area.php'); ?>

                                    </table>
                                </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>Significance/Relevance Matrix</h4>
                              </div>
                              <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                  <p><span class="glyphicon glyphicon-info-sign"></span>&nbsp <em>please <strong>check/tick</strong> the appropriate item</em></p>
                                </div>
                                <table class="table table-bordered" width="100%">

<!--STARRRRRRRTTTTTT HERE! radio buttons-->
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Contextual Dimension: <em>establish responsive is the P/P/A to the local context:</em><span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
              <!--START OF FIRST PART RADIO BUTTON-->
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="prelimasschoice_contextdimension[]" id="unitdone" data-toggle="collapse" data-target="#prelim1" value="unit have done preliminary needs assessment">unit have done preliminary needs assessment <span class="glyphicon glyphicon-asterisk"></span></label>
                                              </div>

                                          <!--COLLAPSE #prelim1-->
                                              <div id="prelim1" class="collapse">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Unit personnel involved in the needs assessment activity:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                          <label><input type="checkbox" name="unit_personnel_involved[]" id="faculty members" value="faculty members">faculty members</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" id="student org./majors" value="student org./majors">student org./majors</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" id="class instructor" value="class instructor">class instructor</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" id="course enrollees" value="course enrollees">course enrollees</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" id="staff" value="staff">staff</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" id="student volunteers" value="student volunteers">student volunteers</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" id="community/org partners" value="community/org partners">community/org partners</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" id="employed enumerators" value="employed enumerators">employed enumerators</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2">
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="unit_personnel_involved[]" id="others_context" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" id="unit_personnel_involved_others" name="unit_personnel_involved_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                              <!--END COLLAPSE #prelim1-->
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" id="unitnotdone" name="prelimasschoice_contextdimension[]" value="unit have not done preliminary needs assessment">unit have not done preliminary needs assessment</label>
                                              </div>
                                            </td>
                                          </tr>
<!--END OF FIRST PART RADIO BUTTON-->

                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="prelimasschoice_contextdimension[]" value="with existing verifiable data from the field" id="withdata" data-toggle="collapse" data-target="#data1">with existing verifiable data from the field <span class="glyphicon glyphicon-asterisk"></span></label>
                                              </div>
                                              <div id="data1" class="collapse">
                                                <table class="table table-bordered" width="100%">
                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Data source/s:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                          <label><input type="checkbox" name="data_sources[]" id="research(faculty/student)" value="research(faculty/student)">research (faculty/student)</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" id="provided/expressed by the partner" value="provided/expressed by the partner">provided/expressed by the partner</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" id="thesis/dissertation" value="thesis/dissertation">thesis/dissertation</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" id="recommended by faculty/student/class" value="recommended by faculty/student/class">recommended by faculty/student/class</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" id="CES data gathering initiatives" value="CES data gathering initiatives">CES data gathering initiatives</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" id="from Government agency" value="from Government agency">from Government agency</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" id="community meetings" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" id="reflection notes/papers" value="reflection notes/papers">reflection notes/papers</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="data_sources[]" id="from secondary sources" value="from secondary sources">from secondary sources</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="data_sources[]" id="others_datasource" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" id="data_sources_others" name="data_sources_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Tools used to gather data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" id="survey/questionnare" value="survey/questionnare">survey/questionnare</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" id="exposure/immersions" value="exposure/immersions">exposure/immersions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" id="KII/FGDs" value="KII/FGDs">KII/FGDs</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" id="validation sessions" value="validation sessions">validation sessions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" id="ocular visit" value="ocular visit">ocular visit</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" id="documents review" value="documents review">documents review</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" id="community meetings" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="tools_used_to_gather[]" id="others_tools" value="others_tools">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" id="tools_used_to_gather_others" name="tools_used_to_gather_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Means employed to verify the data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" id="survey/questionnare_mean" value="survey/questionnare">survey/questionnare</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" id="exposure/immersions_mean" value="exposure/immersions">exposure/immersions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" id="KII/FGDs_mean" value="KII/FGDs">KII/FGDs</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" id="validation sessions_mean" value="validation sessions">validation sessions</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" id="ocular visit_mean" value="ocular visit">ocular visit</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" id="documents review_mean" value="documents review">documents review</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" id="community meetings_mean" value="community meetings">community meetings</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="means_employed_to_verify[]" id="others_mean" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" id="means_employed_to_verify_others" name="means_employed_to_verify_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>

                                                  <thead>
                                                    <th colspan="2"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Who collected the data:</th>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" id="faculty_collected" value="faculty">faculty</label>
                                                        </div>
                                                      </td>
                                                      <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" id="government agency_collected" value="government agency">government agency</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" id="undergraduate students_collected" value="undergraduate students">undergraduate students</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" id="partner community/org./institution_collected" value="partner community/org./institution">partner community/org./institution</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" id="graduate students_collected" value="graduate students">graduate students</label>
                                                        </div>
                                                      </td>
                                                      <td>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="who_collected[]" id="deloaded researcher_collected" value="deloaded researcher">deloaded researcher</label>
                                                        </div>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="2">
                                                        <div class="checkbox form-inline">
                                                            <label><input type="checkbox" name="who_collected[]" id="others_collected" value="others">Others</label>
                                                            &nbsp
                                                            <input type="text" class="form-control" id="who_collected_others" name="who_collected_others" placeholder="Type Here...">
                                                        </div>
                                                      </td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="prelimasschoice_contextdimension[]" value="without data from the field" id="withoutdata" data-toggle="collapse" data-target="#data2">without data from the field</label>
                                              </div>
                                              <div id="data2" class="collapse">
                                                <div class="panel">
                                                  <table class="table" width="100%">
                                                    <tr>
                                                      <td>
                                                        <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Enumerate bases for proposing the P/P/A:</th></label>
                                                        <textarea class="form-control" rows="10" id="bases_for_proposing_ppa" name="bases_for_proposing_ppa" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td>
                                                        <label><span class="glyphicon glyphicon-triangle-right"></span>&nbsp What are the means employed to ensure the responsiveness of the P/P/A to the local condition?</th></label>
                                                        <textarea class="form-control" rows="10" id="means_employed_to_ensure_responsiveness" name="means_employed_to_ensure_responsiveness" placeholder="Type Here..."></textarea>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                        <div class="alert alert-info" role="alert">
                                          <p><span class="glyphicon glyphicon-asterisk"></span>&nbsp <em>Please provide as attachment a copy of the needs assessment report or any available data as basis for this proposal</em></p>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
<!--ENDDDDD HERE! radio buttons-->


<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Productivity Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A involves technology:</em><span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="production of new technology">production of new technology</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="transfer of existing technology">transfer of existing technology</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="utilization of existing technology">utilization of existing technology</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="refinement/modification of existing technology">refinement/modification of existing technology</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="training or capacity-building for the use of Technology">training or capacity-building for the use of Technology</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="productivity_dimension[]" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="productivity_dimension_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 3rd Part -->
                                  <thead>
                                    <th class="bg-success">C. Economic Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A has economic implications:</em><span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="generation of new livelihood projects/opportunities">generation of new livelihood projects/opportunities</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="enhancement of partner’s current livelihood">enhancement of partner’s current livelihood</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="economic_dimension[]" value="employability of partners at">employability of partners at</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="employability_of_partners" placeholder="Type Here...">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="economic_dimension[]" value="measurable increase in the income of partners">measurable increase in the income of partners</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="economic_dimension[]" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="economic_dimension_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 4th Part -->
                                  <thead>
                                    <th class="bg-success">
                                      D. Social Dimension: <em>please <span class="text-danger">check/tick</span> the appropriate item if the P/P/A will lead to or benefit: <small>PROVIDE THE ESTIMATED NUMBER OF BENEFICIARIES PER GROUP</small></em>
                                    <span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th class="text-center" colspan="2">The P/P/A will benefit:</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                                                    <input id="nigga" type="checkbox">households
                                                  </label>
                                                </div>
                                                <div id="collapseOne" class="collapse col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                  <input type="number" class="form-control" name="social_dimension_household" placeholder="How many? ****">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="youth(male)" value="youth(male)" data-toggle="collapse" data-target="#youth_m">youth (male) <em>[13 to 30 years old]</em></label>
                                                </div>
                                                <div id="youth_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_youth_male" placeholder="How many? ****">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="Local Government Units" value="Local Government Units" data-toggle="collapse" data-target="#2_lgu">Local Government Units</label>
                                                </div>
                                                <div id="2_lgu" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_local_government_unit" placeholder="How many? ****">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="youth(female)" value="youth(female)" data-toggle="collapse" data-target="#youth_f">youth (female) <em>[13 to 30 years old]</em></label>
                                                </div>
                                                <div id="youth_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_youth_female" placeholder="How many? ****">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="Organizations/Associations"  value="Organizations/Associations" data-toggle="collapse" data-target="#oa">Organizations/Associations</label>
                                                </div>
                                                <div id="oa" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_organization" placeholder="How many? ****">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="children(boy)" value="children(boy)" data-toggle="collapse" data-target="#boy">children (boy) <em>[6 to 12 years old]</em></label>
                                                </div>
                                                <div id="boy" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_children_boy" placeholder="How many? ****">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="senior citizens(male)" value="senior citizens(male)" data-toggle="collapse" data-target="#sr_m">senior citizens (male) <em>[at least 60 years old]</em></label>
                                                </div>
                                                <div id="sr_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_senior_citizen_male" placeholder="How many? ****">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="children(girl)" value="children(girl)" data-toggle="collapse" data-target="#girl">children (girl) <em>[6 to 12 years old]</em></label>
                                                </div>
                                                <div id="girl" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_children_girl" placeholder="How many? ****">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="senior citizens(female)" value="senior citizens(female)" data-toggle="collapse" data-target="#sr_f">senior citizens (female) <em>[at least 60 years old]</em></label>
                                                </div>
                                                <div id="sr_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_senior_citizen_female" placeholder="How many? ****">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="infants(boy)" value="infants(boy)" data-toggle="collapse" data-target="#infants_b">infants (boy) <em>[0 to 5 years old]</em></label>
                                                </div>
                                                <div id="infants_b" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_infants_boy" placeholder="How many? ****">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="adults(male)" value="adults(male)" data-toggle="collapse" data-target="#adults_m">adults (male) <em>[31 to 59 years old]</em></label>
                                                </div>
                                                <div id="adults_m" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_adults_male" placeholder="How many? ****">
                                                </div>
                                              </td>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="infants(girl)" value="infants(girl)" data-toggle="collapse" data-target="#infants_g">infants (girl) <em>[0 to 5 years old]</em></label>
                                                </div>
                                                <div id="infants_g" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_infants_girl" placeholder="How many? ****">
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="social_dimension[]" id="adults(female)" value="adults(female)" data-toggle="collapse" data-target="#adults_f">adults (female) <em>[31 to 59 years old]</em></label>
                                                </div>
                                                <div id="adults_f" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 collapse">
                                                  <input type="number" class="form-control" name="social_dimension_adults_female" placeholder="How many? ****">
                                                </div>
                                              </td>
                                              <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="social_dimension[]" id="others_social_dimension" value="others" data-toggle="collapse" data-target="#benefit_others">Others</label>
                                              </div>
                                              <div id="benefit_others" class="collapse form-inline">
                                                <input type="text" class="form-control" name="social_dimension_others" placeholder="Type Here...">
                                                <input type="number" class="form-control" name="social_dimension_others_count" placeholder="How many? ****">
                                              </div>
                                            </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 5th Part -->
                                  <thead>
                                    <th class="bg-success">E. Environmental  Dimension: <em>the P/P/A addresses the environmental needs of the community</em><span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" id="River Management" value="River Management">River Management</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" id="Greening Initiatives" value="Greening Initiatives">Greening Initiatives <small>(e.g. Tree Panting, forestation, etc.)</small></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" id="Mangrove Planting" value="Mangrove Planting">Mangrove Planting</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" id="Clean-up Drives" value="Clean-up Drives">Clean-up Drives <small>(coastal, river, drainage, sewage, etc.)</small></label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="environment_dimension[]" id="Beautification Activities" value="Beautification Activities">Beautification Activities</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox"name="environment_dimension[]" id="others_environment_dimension" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="environment_dimension_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 6th Part -->
                                  <thead>
                                    <th class="bg-success">F. Governance Dimension: <em>the program/project/activity will yield:</em><span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="networking with local government units and community leaders" value="networking with local government units and community leaders">networking with Local Government Units and community leaders</label>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="funding support from local government units" value="funding support from local government units">funding support from Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="funding support from other partners" value="funding support from other partners">funding support from other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="established counterparts from local government units" id="established counterparts from local government units" value="established counterparts from local government units">established counterparts from Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="established counterparts from other partners" value="established counterparts from other partners">established counterparts from other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="MOA/MOU with LGUs" value="MOA/MOU with LGUs">Memorandum of Agreement or Memorandum of Understanding with Local Government Units</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="MOA/MOU with other partners" value="MOA/MOU with other partners">Memorandum of Agreement or Memorandum of Understanding with other partners</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="policy advocacy by USC faculty/students/staff" value="policy advocacy by USC faculty/students/staff">policy advocacy by USC faculty/students/staff</label>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="government_dimension[]" id="policy change initiatives by LGUs" value="policy change initiatives by LGUs">policy change initiatives by Local Government Units</label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="checkbox form-inline">
                                                <label><input type="checkbox" name="government_dimension[]" id="others_government_dimension" value="others">Others</label>
                                                &nbsp
                                                <input type="text" class="form-control" name="government_dimension_others" placeholder="Type Here...">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>Implications to Work hours, Academic Program, and Research</h4>
                              </div>
                              <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                  <p sty;e="text:justify"><span class="glyphicon glyphicon-info-sign"></span>&nbsp <em>The following variables are identified as essentials in order to determine that your program/project/activities are aligned to your unit’s program offerings and research priorities. Please provide the required preliminary data. <strong>Also, do take note that these will be verified after the completion of the program/project/activity.</strong></em></p>
                                </div>
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                  <thead>
                                    <th class="bg-success">A. Practical Counts: <em>please provide below your estimated count per item:</em><span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="hours_needed_to_prepare" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of man hours needed to prepare the P/P/A</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="hours_needed_to_complete" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of man hours needed to complete the P/P/A</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="faculty_members_involved_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of faculty members who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="course_based_students_involved_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of course-based students who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="student_organization_members_involved_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Student Organization members who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="staff_involved_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of staff who will be involved</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="campaign_materials_to_produce_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Information and Education Campaign materials to be produced</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="campaign_materials_to_improve_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of Information and Education Campaign materials to be improved/enhanced</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="curriculum_programs_to_develop_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of curricular programs to be developed</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="curriculum_programs_to_improve_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of curricular programs to be improved/enhanced</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="proposals_to_develop_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of proposals to be developed</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="papers_presented_count" class="form-control" placeholder = "****" ></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of papers to be presented</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="papers_published_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of papers to be published</td>
                                                </tr>
                                              </table>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <table width="100%">
                                                <tr>
                                                  <td width="20%"><input type="number" name="policies_to_advocate_count" class="form-control" placeholder = "****" required></td>
                                                  <td>&nbsp</td>
                                                  <td>No. of policies to be advocated</td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success">B. Human Resource Implications: <em>please provide the specifics:</em><span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th colspan="3" class="text-center"><u>PREPARATION</u> OF THE PPA</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td width="30%"></td>
                                              <td class="text-center"><label>Faculty Members</label></td>
                                              <td class="text-center"><label>Students</label></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Expertise and/or specialization needed</td>
                                              <td><textarea class="form-control" rows="3" name="preparation_expertise_needed_faculty_members" placeholder = "****"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="preparation_expertise_needed_students" placeholder = "****"></textarea></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                              <td><textarea class="form-control" rows="3" name="preparation_roles_faculty_members" placeholder = "****"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="preparation_roles_students" placeholder = "****"></textarea></td>
                                            </tr>
                                          </tbody>
                                        </table>

                                        <table class="table table-bordered" width="100%">
                                          <thead>
                                            <th colspan="3" class="text-center">IMPLEMENTATION</u> OF THE PPA</th>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td width="30%"></td>
                                              <td class="text-center"><label>Faculty Members</label></td>
                                              <td class="text-center"><label>Students</label></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Expertise and/or specialization needed</td>
                                              <td><textarea class="form-control" rows="3" name="implementation_expertise_needed_faculty_members" placeholder = "****"></textarea></td>
                                              <td><textarea class="form-control" rows="3"name="implementation_expertise_needed_students" placeholder = "****"></textarea></td>
                                            </tr>
                                            <tr>
                                              <td><span class="glyphicon glyphicon-triangle-right"></span>&nbsp Roles/tasks</td>
                                              <td><textarea class="form-control" rows="3" name="implementation_roles_faculty_members" placeholder = "****"></textarea></td>
                                              <td><textarea class="form-control" rows="3" name="implementation_roles_students" placeholder = "****"></textarea></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

  

                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <h4>Linkage Profile</h4>
                              </div>
                              <div class="panel-body">
                                <table class="table table-bordered" width="100%">
<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 1st Part -->
                                 

<!-- _+_+_+_+_+_+_+_+_+_+_+_+_+_+ 2nd Part -->
                                  <thead>
                                    <th class="bg-success"> Nature of Linkage/Partnership: <em>please specify:</em><span style = "color: red;"> ****</span></th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <table class="table table-bordered" width="100%">
                                          <tr>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio"  id="withmoa" name="moadelatorre" value="1" data-toggle="collapse" data-target="#with_moa">with Memorandum of Understanding / Memorandum of Agreement</label>
                                              </div>
                                              <div id="with_moa" class="nigga collapse">
                                                <div class="panel">
                                                  <table width="100%">

                                                    <tr>
                                                      <td class="text-right"><label>Date Signed:</label></td>
                                                      <td width="2%"></td>
                                                      <td><input type="text" name="date_signed" class="form-control datepicker" placeholder="mm/dd/yyyy ****"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Signatories for USC:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="signatories_for_usc" class="form-control" placeholder="Type Here... ****"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Signatories for Partner:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="signatories_for_partner" class="form-control" placeholder="Type Here... ****"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <hr>
                                                        <label>Enumerate the Major duties of USC/Unit:</label>
                                                        <textarea class="form-control" rows="5" name="major_duties_of_usc_unit" placeholder="Type Here... ****"></textarea>
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <label>Enumerate the Major duties of Partner/s:</label>
                                                        <textarea class="form-control" rows="5" name="major_duties_of_partner" placeholder="Type Here... ****"></textarea>
                                                      </td>
                                                    </tr>
                                                    
                                                  </table>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                              <div class="radio">
                                                <label><input type="radio" name="moadelatorre" id="withoutmoa"  value="0" data-toggle="collapse" data-target="#without_moa">without Memorandum of Understanding / Memorandum of Agreement</label>
                                              </div>
                                              <div id="without_moa" class="collapse">
                                                <div class="panel">
                                                  <table width="100%">
                                                    <tr>
                                                      <td class="text-right"><label>Since when is the linkage:</label></td>
                                                      <td width="2%"></td>
                                                      <td><input type="text" name="date_linkage_started" class="form-control datepicker" placeholder="Type Here... ****"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td class="text-right"><label>Who initiated the linkage:</label></td>
                                                      <td></td>
                                                      <td><input type="text" name="who_initiated_linkage" class="form-control" placeholder="Type Here... ****"><br></td>
                                                    </tr>
                                                    <tr>
                                                      <td colspan="3">
                                                        <hr>
                                                        <label>Enumerate the activities already done:</label>
                                                        <textarea name="activities_done" class="form-control" rows="5" placeholder="Type Here... ****"></textarea>
                                                      </td>
                                                    </tr>
                                                    
                                                  </table>
                                                  
                                                </div>
                                              </div>

                                            </td>
                                          </tr>
                                        </table>
                                         <div>
                                                        <label>Enumerate the opportunities identified:</label>
                                                        <textarea class="form-control" rows="5" name="opportunities_identified" placeholder="Type Here... ****"></textarea>
                                                    </div>
                                                    <div>
                                                        <label>Enumerate the challenges/problems encountered:</label>
                                                        <textarea class="form-control" rows="5" name="challenges_encountered" placeholder="Type Here... ****"></textarea>
                                                     </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                           <!--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-lg btn-success btn-block"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button> -->

                          <!--   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" align="center">
                              <button type="button" claxss="btn btn-danger btn-block" data-toggle="modal" data-target="#exit"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp Cancel</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                              <button type="submit" class="btn btn-default btn-block" name="submit" value="save_b"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp SAVE & QUIT</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" align="center">
                              <button type="submit" class="btn btn-success btn-block" id="submit" name="submit" value="submit_b"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>&nbsp Submit</button>
                            </div> -->
                           
                    </div>
                </div>
            </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

 <!-- Custom Script -->
    <script src="<?php echo base_url();?>assets/js/global.js"></script>
    <script src="<?php echo base_url();?>assets/js/proposalbradio.js"></script>
    <script src="<?php echo base_url();?>assets/js/form_processing.js"></script>            
        

</body>

</html>