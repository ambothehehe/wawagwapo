<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to CES-PPMS!</title>

    <!-- CES Website ico -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/freelancer.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/jquery-form-validator.min.css"
    rel="stylesheet" type="text/css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top" style="color: #FFF">C E S P P M S</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top" style="color: #FFF"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#sign_in" style="color: #FFF">Sign in</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about" style="color: #FFF">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact" style="color: #FFF">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <a href="http://usc.edu.ph"><img class="img-responsive" src="<?php echo base_url();?>assets/img/usc_profile.png" alt="USC Logo" style="width:260px"></a>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/img/ces_profile.png" alt="CES Logo">
                    </div>
                    <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-text">
                        <span class="school"><a href="http://usc.edu.ph"><img class="img-responsive" src="<?php echo base_url();?>assets/img/banner.png" alt="USC" style="height:10%;width:500px"></a></span>
                        <span class="name"><img class="img-responsive" src="<?php echo base_url();?>assets/img/CES.png" alt="USC" style="height:auto;width:1100px"></span>
                        <hr>
                        <span class="skills">Project Proposal Management System</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sign In Grid Section -->
    <section id="sign_in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Let's get started</h2>
                    <hr>
                </div>
            </div>
            <br>
            <div class="row" align="center">
                <div class="col-md-6">
                    <div class="right-content">
                        <strong><p>Sign in to your account</p></strong>
                        <div class="login-errors"></div>
                        <br>
                        <?php echo form_open('Users/login');?>
                          <table width="50%">
                            <tr>
                              <td>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-group input-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <br>
                                <button type="submit" id="login" class="btn btn-primary btn-lg btn-block" name="login" value="login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp Login</button>
                              </td>
                            </tr>
                          </table>
                        <?php echo form_close();?>
                    </div>
                </div>
                <div class="col-md-6">
                    <p><strong>Don't have an account ?</strong></p>
                    <p><small>For Co-curricular and Extra-curricular Student Organization Representatives, Student Organization Adviser and Faculty </small></p>
                    <br><br><br>
                    <div align="center">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <a href="#register" class="portfolio-link" data-toggle="modal">
                                <button type="button" class="btn btn-info btn-lg btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp Register</button>
                            </a>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>What is Community Extension Service?</h2>
                    <hr>
                </div>
            </div>
            <div>
                <p class="lead" style="text-align:justify">
                    Community Extension Service (CES) is one of the three core functions of the University of San Carlos (USC) as a Higher Education Institution along with Teaching-Learning and Research. Hence, Carolinians experience integral development by advancing their academic competencies highly motivated by their active engagements with university partner communities, institutions, and organizations. All Community Extension Service programs, projects, and activities are undertaken by students, faculty, and staff with a three-fold mandate: first, <em>to voluntarily extend one’s professional and academic expertise</em>; second, <em>to engage into prophetic dialogue with the world guided by the Missionary charisma of Societas Verbi Divini (SVD) Spirituality</em>; and third, <em>to empower peoples and communities for social change through a transformatory or liberational approach</em>.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-color">
                        <div class="panel-heading">
                            <h3 class="text-center"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span>&nbsp Goals</h3>
                        </div>
                        <div class="panel-body">
                            <p style="text-align:justify"><em>For USC to contribute to nation building by providing highly specialized curricular programs with extension services that allow students, faculty, and staff to apply the new knowledge they generate by empowering communities, organizations, and institutions through a transformatory approach in addressing specific social development problems.</em></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-color">
                        <div class="panel-heading">
                            <h3 class="text-center"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>&nbsp Objectives</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><p>Extension services are integral to the learning experience and research opportunities of students</p></li>
                                <li><p>Faculty members conduct CES as an enrichment to the teaching-research experience</p></li>
                                <li><p>Alumni take an active role in the conduct of CES programs and projects</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-color">
                        <div class="panel-heading">
                          <h3 class="text-center"><span class="glyphicon glyphicon-education" aria-hidden="true"></span>&nbsp Key Result Area</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><p>Context-responsive CES programs and projects</p></li>
                                <li><p>Specialization-based CES by faculty and students</p></li>
                                <li><p>Collaborative and inclusive conduct of CES by academic as well as administrative units</p></li>
                                <li><p>Sustainable and outcomes-based CES programs and projects</p></li>
                                <li><p>Development of Voluntarism and Missionary Orientation among faculty, students, and staff</p></li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Our Inspiration: SVD Charism and Congregational Directions</h2>
                    <hr>
                </div>
            </div>
            <div>
                <p align="justify">
                    As an SVD-run and managed institution, the University of San Carlos subscribes to the Missionary Charism and Congregational Directions of the SVD General Chapter. This intended to guide the spirituality of the university as it dialogues with its context - a contribution of USC to the shaping of local communities. Shown below are the two general chapters of SVD that serve as a guide of its Congregational Directions, the very same spirituality steering the conduct of community extension services to partner communities, institutions, and organizations.
                </p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img class="img-responsive" src="<?php echo base_url();?>assets\img\svd_gc1.png">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <img class="img-responsive" src="<?php echo base_url();?>assets\img\svd_gc2.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Congregational Directions</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-color">
                            <div class="panel-heading">
                                <h4 class="text-center panel-title">Ad Intra Congregational Directions</h4>
                            </div>
                            <div class="panel-body">
                                <h4><em>Spirituality</em></h4>
                                <ul>
                                    <li>
                                        <p>Trinitarian and incarnational spirituality</p>
                                    </li>
                                    <li>
                                        <p>Sharing in this spirituality across cultural differences that helps promote unity</p>
                                    </li>
                                </ul>
                                <h4><em>Community</em></h4>
                                <ul>
                                    <li>
                                        <p>Inter-cultural communities need to be consciously created intentionally promoted, cared for and nurtured</p>
                                    </li>
                                </ul>
                                <h4><em>Leadership</em></h4>
                                <ul>
                                    <li>
                                        <p>Commitment to serve that requires an attitude of solidarity, respect and love</p>
                                    </li>
                                    <li>
                                        <p>Participative leadership needs to be the hallmark of our community</p>
                                    </li>
                                </ul>
                                <h4><em>Finance</em></h4>
                                <ul>
                                    <li>
                                        <p>Commitment to the vow of poverty and simple lifestyle and sharing of resources</p>
                                    </li>
                                </ul>
                                <h4><em>Formation</em></h4>
                                <ul>
                                    <li>
                                        <p>As Divine Word missionaries, we participate in God's mission through personal growth in the spirit of inter-culturality</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-color">
                        <div class="panel-heading">
                            <h4 class="text-center panel-title">Ad Extra Congregational Directions</h4>
                        </div>
                        <div class="panel-body">
                            <h4><em>Primary and New Evangelization</em></h4>
                            <ul>
                                <li>
                                    <p>Faith seekers</p>
                                </li>
                                <li>
                                    <p>People who are confused in life</p>
                                </li>
                                <li>
                                    <p>Promote transformation of the whole community</p>
                                </li>
                                <li>
                                    <p>Directed who do not know Christ and does not live in the Christian faith</p>
                                </li>
                            </ul>
                            <h4><em>Ecumenical and Interreligious dialogue</em></h4>
                            <ul>
                                <li>
                                    <p>Respect, mutual acceptance through ecumenical and interreligious dialogue</p>
                                </li>
                            </ul>
                            <h4><em>Promotion of Culture and Life</em></h4>
                            <ul>
                                <li>
                                    <p>Promote and defend the sanctity of human life</p>
                                </li>
                                <li>
                                    <p>Promoting the culture of life vs. abortion, euthanasia, capital punishment</p>
                                </li>
                            </ul>
                            <h4><em>Family and Youth</em></h4>
                            <ul>
                                <li>
                                    <p>Promotion of family bonding</p>
                                </li>
                                <li>
                                    <p>Care for the family and youth</p>
                                </li>
                                <li>
                                    <p>Witnessing transformation in family structure</p>
                                </li>
                            </ul>
                            <h4><em>Education and Research</em></h4>
                            <ul>
                                <li>
                                    <p>Promote research that enhances Catholic character of the institution, social justice and interculturality</p>
                                </li>
                            </ul>
                            <h4><em>Indigenous and Ethnic Communities</em></h4>
                            <ul>
                                <li>
                                    <p>Formulate and implement programs on pastoral responses, cultural identity, land rights advocacy, health care, bilingual education, human rights and affirmative action</p>
                                </li>
                            </ul>
                            <h4><em>Migration</em></h4>
                            <ul>
                                <li>
                                    <p>Pastoral care for migrants (internal migration: students from other areas)</p>
                                </li>
                            </ul>
                            <h4><em>Reconciliation and peace-building</em></h4>
                            <ul>
                                <li>
                                    <p>Work for justice and peace and for the progress of people</p>
                                </li>
                                <li>
                                    <p>Eliminate instances of ethnic, religious, political and social conflicts</p>
                                </li>
                            </ul>
                            <h4><em>Social Justice and Poverty Eradication</em></h4>
                            <ul>
                                <li>
                                    <p>Commitment to work for social justice and solidarity with the poor</p>
                                </li>
                            </ul>
                            <h4><em>Integrity of Creation</em></h4>
                            <ul>
                                <li>
                                    <p>Promote and protect the environment as God's creation</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Guiding Principles on the Nature of Community Extension Services</h2>
                    <hr>
                </div>
            </div>
            <div>
                <div>
                    <p class="lead" style="text-align:justify">
                        As an HEI settled in a particular locale and community, USC recognizes that it has an undeniable role to its context. The needs of its context must be considered of primary importance in developing a CES Program and in organizing pertinent activities. Data and information must be gathered using valid and reliable tools to serve as bases for the university, through its units, to offer appropriate and relevant response to community needs. All CES programs, projects, and activities must be <u><em>context-responsive.</em></u>
                    </p>
                </div>
                <div>
                    <p class="lead" style="text-align:justify">
                        In creating a truly appropriate and relevant response, the discipline that can best provide the extension service be tapped and mobilized. This shall essentially provide faculty and students the opportunity to practice their profession in actual and real cases/situations. The competencies are ably executed while at the same time assisting the communities in their needs and problems. Hence, all CES programs, projects, and activities must be <u><em>specialized-based.</em></u>
                    </p>
                </div>
                <div>
                    <p class="lead" style="text-align:justify">
                        Recognizing the multi-faceted character of socio-cultural, economic and political realities academic and administrative units will be tapped to work together in crafting comprehensive extension initiatives, multi and inter-disciplinary approaches will be used. Also, to ensure the responsiveness of all extension works communities, organizations, and institutions are treated not as beneficiaries only but as partners. The latter are believed to have the capacities essential for making CES programs work, there shall be no denying of their contributions to as partners. Hence, all CES programs, projects, and activities must be <u><em>collaborative and inclusive.</em></u>
                    </p>
                </div>
                <div>
                    <p class="lead" style="text-align:justify">
                        Since CES undertakings are intended to be programmatic, outputs and outcomes are both tangible and intangible results that must come out of the program, they are to be mmeasured and gauged. These outputs and outcomes serve as guideposts in determining whether interventions have impact to these lives of both partners. Moreover, it is essential to ensure that interventions don't have limited lifespans but one that can continue to serve the purpose as possible. Hence, all CES programs, projects, and activities must be <u><em>sustainable and outcomes-based.</em></u>
                    </p>
                </div>
                <div>
                    <p class="lead" style="text-align:justify">
                        What is important to underlie all of the above guiding principles of CES is the value of <u><em>voluntarism</u></em>, one that defines the character of extension service.
                    </p>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <img class="img-responsive" src="<?php echo base_url();?>assets\img\gp.png" style="height: 70%, width: 70%;">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Program Areas</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-item active">
                            <a href="#productivity-oriented-initiatives" class="nav-link" data-toggle="tab" role="tab">
                                Productivity-Oriented Initiatives
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#literacy-values-formation" class="nav-link" data-toggle="pill" role="pill">
                                Literacy, Values Formation and Life-long Learning
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#social-welfare-services" class="nav-link" data-toggle="pill" role="pill">
                                Social Welfare Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#health-advocacy" class="nav-link" data-toggle="pill" role="pill">
                                Health Advocacy and Wellness Promotion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#issue-advocacy" class="nav-link" data-toggle="pill" role="pill">
                                Issue Advocacy and Rights Promotion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#environmental-sustainability" class="nav-link" data-toggle="pill" role="pill">
                                Environmental Sustainability
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#building-christian-communities" class="nav-link" data-toggle="pill" role="pill">
                                Building Christian Communities
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#urban-and-rural-development" class="nav-link" data-toggle="pill" role="pill">
                                Urban and Rural Development
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#heritage-conservation" class="nav-link" data-toggle="pill" role="pill">
                                Heritage Conservation
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#information-gathering-and-sharing" class="nav-link" data-toggle="pill" role="pill">
                                Information Gathering and Sharing
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="tab-content">
                        <div align="center" id="productivity-oriented-initiatives" class="tab-pane fade in active">
                            <img class="img-rounded" src="assets/img/pa1.png" alt="Productivity-Oriented">
                            <hr>
                            <p align="justify">
                                <em>Productivity-Oriented projects and activities</em> intend to capacitate the beneficiaries/partners to livelihood and work purposes. It includes increasing the beneficiaries' confidence level to find to work and be gainfully employed. Activities that will lead to the enhancement and financial capacities are reported under this program area.
                            </p>
                        </div>
                        <div align="center" id="literacy-values-formation" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa2.png" alt="Literacy Values">
                            <hr>
                            <p align="justify">
                                <em>Literacy and Education/Value Formation and Life-long Learning</em> include activities where faculty and and students share their expertise in literacy, numeracy and in handling special needs to groups/organizations from both within and outside of USC.
                            </p>
                        </div>
                        <div align="center" id="social-welfare-services" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa3.png" alt="Social Welfare Services">
                            <hr>
                            <p align="justify">
                                <em>Social Welfare Services</em> are provision-oriented initiatives that may share the nature of the following initiatives, among others: charity, relief operations, and donations of goods, aid, assistance, gift giving, contributions, and offerings.
                            </p>
                        </div>
                        <div align="center" id="health-advocacy" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa4.png" alt="Health Advocacy and Wellness Promotion">
                            <hr>
                            <p align="justify">
                                <em>Health Advocacy and Wellness Promotion activities</em> are those intend to promote a healthy and fit lifestyle. The undertakings recorded here include: popularization of healthy lifestyle; IE campaigns; safety first trainings and capacity-building; and health-teachings.
                            </p>
                        </div>
                        <div align="center" id="issue-advocacy" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa5.png" alt="Issue Advocacy">
                            <hr>
                            <p align="justify">
                                <em>Issue Advocacy and Rights Promotion activities</em> are those that underscore the discussion of rights as well as the corresponding obligations of people. The nature of the activities may include: input-driven to a group or an audience; direct legal/para-legal assistance; and advocacy initiatives through various means.
                            </p>
                        </div>
                        <div align="center" id="environmental-sustainability" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa6.png" alt="Environmental Sustainability">
                            <hr>
                            <p align="justify">
                                <em>Environmental Sustainability initiatives</em> are those related to advocacies and efforts towards a sustainable ecology. Any and all activities that are material to the promotion of the environment are recorded in this program area.
                            </p>
                        </div>
                        <div align="center" id="building-christian-communities" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa7.png" alt="Building Christian Communities">
                            <hr>
                            <p align="justify">
                                <em>Activities under the Building Christian Communities Program</em> are those that capitalize the organizing of communities through Basic Ecclesial Communities (BECs) as well as the conduct of continued spiritual journey inspired by the Carolinian and SVD charism.
                            </p>
                        </div>
                        <div align="center" id="urban-and-rural-development" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa8.png" alt="Urban and Rural Development">
                            <hr>
                            <p align="justify">
                                <em>Urban and Rural Development Program</em> include activities that focus on the physical planning of both rural and urban areas intended to create a more sustainable and livable environment.
                            </p>
                        </div>
                        <div align="center" id="heritage-conservation" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa9.png" alt="Heritage Conservation">
                            <hr>
                            <p align="justify">
                                <em>Heritage Conservation Program</em> refers to initiatives related to the conservation and preservation of built and natural heritage, culture and the arts, both the tangible and the intangible.
                            </p>
                        </div>
                        <div align="center" id="information-gathering-and-sharing" class="tab-pane fade">
                            <img class="img-rounded" src="assets/img/pa10.png" alt="Information Gathering and Sharing">
                            <hr>
                            <p align="justify">
                                <em>Information Gathering and Sharing Program</em> include activities where students and faculty members share to partner communities, organizations, and institutions progress and developments within their discipline as well as data gathered through academic activities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Who are in charge of the CES?</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/IwzUs1IMdyQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-md-5">
                    <p style="text-align:justify">
                        The CES office was constituted to fulfill the above mandate. The office takes a major role in networking, organizing, coordinating, and facilitating the various CES initiatives of departments, colleges, support offices, as well as of student organizations. It also conducts monitoring and evaluation of CES programs, projects, and activities with the college-appointed coordinators. Thus, students, faculty, and staff are highly enjoined to make learning more meaningful by volunteering in the various extension initiatives of the university.
                    </p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align:justify">
                        <em>All of these are envisioned to produce Carolinians with developed empathy and enkindled missionary spirit. A Carolinian who is not only equipped with the mastery of his/her profession, but who is a truthful Witness to the Word.</em>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center" id="contact">
        <div class="footer-above">
            <div class="container">
                <div align="center">
                    <h1>Contact Us</h1>
                    <hr>
                    <address>
                        <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp; P. del Rosario Street, Cebu City, Philippines 6000 </p>
                    </address>
                    <br>
                    <div class="row">
                        <div class="footer-col col-lg-4">
                            <h4><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp;&nbsp; Telephone </h4>
                            <p>+63 (32) 253 - 1000 local 196</p>
                            <p>+63 (32) 230 - 0100 local 549</p>
                        </div>
                        <div class="footer-col col-lg-4">
                            <h4><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;&nbsp; Fax Machine </h4>
                            <p>+63 (32) 255 - 4341</p>
                            <p>+63 (32) 253 - 8895</p>
                        </div>
                        <div class="footer-col col-lg-4">
                            <h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;&nbsp; E - mail Address </h4>
                            <address>
                                <p>usc.cesoffice@gmail.com</p>
                                <p>ces@usc.edu.ph</p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; CESPPMS 2018
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </div>

    <!-- Registration Modal -->
    <div class="portfolio-modal modal fade " id="register" tabindex="-1" role="dialog" aria-hidden="true" >
        <div class="modal-content mt-4">
            <div class="container">
            <div class="modal-header">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <h2 class="modal-title">Registration Form</h2>
            </div>
                <?php 
                    $attributes = array('id' => 'registration');
                    echo form_open('Users/process_reg', $attributes);
                ?>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="panel panel-primary">
                          <div class="panel-heading" align="left">
                            <h4><span class="glyphicon glyphicon-education" aria-hidden="true"></span>&nbsp Personal Information</h4>
                          </div>
                          <div class="panel-body">
                            <table width="100%">
                              <tr>
                                <td class="text-left"><label>First Name:</label></td>
                                <td></td>
                                <td><input type="text" class="form-control" name="firstname" placeholder="Type your firstname" data-validation-allowing="-_. "  data-validation="alphanumeric" required="required"><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Last Name:</label></td>
                                <td width="2%"></td>
                                <td><input type="text" class="form-control" name="lastname" placeholder="Type your lastname" data-validation="alphanumeric" data-validation-allowing="-_. " required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>School:</label></td>
                                <td></td>
                                <td>
                                  <select id="school" class="form-control" name="office" required>
                                    <option readonly>-- Select your School --</option>
                                      <option value="School of Architecture, Fine Arts and Design">School of Architecture, Fine Arts and Design</option>
                                      <option value="School of Arts and Sciences">School of Arts and Sciences</option>
                                      <option value="School of Education">School of Education</option>
                                      <option value="School of Health Care Profession">School of Health Care Profession</option>
                                      <option value="School of Law and Governance">School of Law and Governance</option>
                                      <option value="School of Business and Economics">School of Business and Economics</option>
                                      <option value="School of Engineering">School of Engineering</option>
                                  </select><br>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Department:</label></td>
                                <td></td>
                                <td>
                                  <select id="department" class="form-control" name="department" required>
                                      <option data-group="all" readonly>-- Select your Department --</option>
                                      <option disabled>-- School of Architecture, Fine Arts and Design --</option>
                                        <option data-group="School of Architecture, Fine Arts and Design" value="Architecture">Architecture</option>
                                        <option data-group="School of Architecture, Fine Arts and Design" value="Fine Arts">Fine Arts</option>
                                      <option disabled>-- School of Arts and Sciences --</option>
                                        <option data-group="School of Arts and Sciences" value="Languages and Literature">Languages and Literature</option>
                                        <option data-group="School of Arts and Sciences" value="Philosophy and Religious Studies">Philosophy and Religious Studies</option>
                                        <option data-group="School of Arts and Sciences" value="Psychology">Psychology</option>
                                        <option data-group="School of Arts and Sciences" value="Anthropology, Sociology and History">Anthropology, Sociology and History</option>
                                        <option data-group="School of Arts and Sciences" value="Biology">Biology</option>
                                        <option data-group="School of Arts and Sciences" value="Chemistry">Chemistry</option>
                                        <option data-group="School of Arts and Sciences" value="Computer and Information Sciences">Computer and Information Sciences</option>
                                        <option data-group="School of Arts and Sciences" value="Mathematics">Mathematics</option>
                                        <option data-group="School of Arts and Sciences" value="Phsyics">Phsyics</option>
                                      <option disabled>-- School of Education --</option>
                                        <option data-group="School of Education" value="Teacher Education">Teacher Education</option>
                                        <option data-group="School of Education" value="Science and Mathematics">Science and Mathematics</option>
                                        <option data-group="School of Education" value="Physical Education">Physical Education</option>
                                      <option disabled>-- School of Health Care Profession -</option>
                                        <option data-group="School of Health Care Profession" value="Nursing">Nursing</option>
                                        <option data-group="School of Health Care Profession" value="Pharmacy">Pharmacy</option>
                                        <option data-group="School of Health Care Profession" value="Nutrition and Dietics">Nutrition and Dietics</option>
                                      <option disabled>-- School of Law and Governance --</option>
                                        <option data-group="School of Law and Governance" value="Law">Law</option>
                                        <option data-group="School of Law and Governance" value="Political Science">Political Science</option>
                                      <option disabled>-- School of Business and Economics --</option>
                                        <option data-group="School of Business and Economics" value="Accountancy">Accountancy</option>
                                        <option data-group="School of Business and Economics" value="Business Administration">Business Administration</option>
                                        <option data-group="School of Business and Economics" value="Economics">Economics</option>
                                        <option data-group="School of Business and Economics" value="Hospitality Management">Hospitality Management</option>
                                      <option disabled>-- School of Engineering --</option>
                                        <option data-group="School of Engineering" value="Chemical Engineering">Chemical Engineering</option>
                                        <option data-group="School of Engineering" value="Civil Engineering">Civil Engineering</option>
                                        <option data-group="School of Engineering" value="Computer Engineering">Computer Engineering</option>
                                        <option data-group="School of Engineering" value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                        <option data-group="School of Engineering" value="Electrical Engineering">Electrical Engineering</option>
                                        <option data-group="School of Engineering" value="Industrial Engineering">Industrial Engineering</option>
                                        <option data-group="School of Engineering" value="Mechanical Engineering">Mechanical Engineering</option>
                                  </select><br>
                                </td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Designation:</label></td>
                                <td></td>
                                <td>
                                    <select id="designation_registration" class="form-control" name="designation" required>
                                        <option>-- Select your Designation --</option>
                                        <option id="co-curricular" value="7">Co-Curricular Organization</option>
                                        <option id="extra-curricular" value="8">Extra-Curricular Organization</option>
                                        <option value="9">Faculty</option>
                                        <option id="student-orgnization" value="12">Student Organization Adviser</option>
                                    </select><br>
                                </td>
                              </tr>
                              
                                <tr>
                                    <td class="text-left"><div class="organization" style="display:none;"><label>Organization:</label></div></td>
                                    <td></td>
                                    <td><div class="organization" style="display:none;"><input type="text" class="form-control" name="organization" placeholder="Type your organization" data-validation="alphanumeric" data-validation-allowing="-_. " required><br></div></td>
                                </tr>

                              <tr>
                                <td class="text-left"><label>Email Address:</label></td>
                                <td></td>
                                <td><input type="email" class="form-control" name="email" placeholder="Type your email address" data-validation="email" required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Contact Number:</label></td>
                                <td></td>
                                <td><input type="text" class="form-control" name="contact_num" placeholder="Type your cellphone number" data-validation="number" data-validation-allowing="+" data-validation-length="6-12" data-validation-error-msg="Phone number must contain 11 digits" required></td>
                              </tr>
                            </table>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="panel panel-primary">
                          <div class="panel-heading" align="left">
                            <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp Username & Password</h4>
                          </div>
                          <div class="panel-body">
                            <table width="100%">
                              <tr>
                                <td class="text-left" width="30%"><label>Username:</label></td>
                                <td width="2%"></td>
                                <td><input type="text" class="form-control" name="username" placeholder="Type your username" data-validation="length alphanumeric" data-validation-allowing="-_." data-validation-length="6-12" data-validation-error-msg="User name has to be an alphanumeric value (6-12 chars)" required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Password:</label></td>
                                <td></td>
                                <td><input type="password" class="form-control" name="password" placeholder="Type your password" data-validation="strength" data-validation-strength="2" required><br></td>
                              </tr>
                              <tr>
                                <td class="text-left"><label>Confirm Password:</label></td>
                                <td></td>
                                <td><input type="password" class="form-control" name="password_confirmation" placeholder="Retype your password" data-validation="confirmation" required><br></td>
                                <input type="hidden" name="register" value="register"/>
                              </tr>
                              <tr>
                                  <td colspan="3">
                                      <button type="submit" id="register_button" class="btn btn-success btn-block btn-lg" name="register" value="register"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp Register</button>
                                  </td>
                              </tr>
                            </table>
                          </div>
                      </div>
                    </div>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>

    <!-- Loading Screen -->
    <div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-header">
            <h1>Processing...</h1>
        </div>
        <div class="modal-body">
            <div class="progress progress-striped active">
                <div class="bar" style="width: 100%;"></div>
            </div>
        </div>
    </div>

    <?php include('application/views/modals.php'); ?>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Form Validation Javascript -->
    <script src="<?php echo base_url();?>assets/js/jquery.form-validator.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/freelancer.js"></script>

    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
    </script>

    <script type="text/javascript">
        $("#organization").hide();

        $("#designation_registration").change(if_organization);

        function if_organization() {
            
            var designation = $("#designation_registration").val();
            console.log(designation);
            
            if (designation == "7" || designation == "8") {
                $(".organization").show();
            } else {
                $(".organization").hide();
            }
        }

        $("#register_button").click(function(e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: base_url + "index.php/Users/process_reg",
                data: $("#registration").serialize(),
                success: function() {
                    $('#register').modal('hide');
                    $('#register').on('hidden.bs.modal', function () {
                        setTimeout(function(){
                           location.reload(1);
                        }, 5000);
                    });
                    $('#success_modal .modal-header').html('<button type="button" class="close" data-dismiss="modal">&times;</button>\
                          <h4 class="modal-title">ACCOUNT REGISTRATION</h4>');
                    $('#success_modal .modal-body').html('<br><div class="alert alert-success">\
                          <strong>Registered!</strong> You have successfully registered for an account. Please wait for an E-mail regarding the approval of the account.</div>');
                    $('#success_modal .modal-footer').html('<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>');
                    $('#success_modal').modal('show');
                },
                error: function(data) {
                     console.log(data);
                }
            });
        });

    </script>

</body>

</html>
