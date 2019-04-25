<!DOCTYPE html>
<html lang="en">



<head>

  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>





    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

<style>
  <style>

.divewi{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.enzel{
  width: 110px;
  height: 36px;
  background: #6a89cc;
  margin: 23px;
  border: none;
  outline: none;
  cursor: pointer;
  color: #fff;
  font-family: "montserrat",sans-serif;
  text-transform: uppercase;
  font-size: 13px;
  transition: 0.4s;
  transform-style: preserve-3d;
  perspective: 800px;
}

.enzel::after{
  content: '';
  position: absolute;
  background: #4a69bd;
  transition: 0.4s;
}

.enzel1:hover{
  transform: rotateX(-20deg);
}
.enzel1:after{
  width: 100%;
  height: 24px;
  top: -24px;
  left: 0;
  transform-origin: 0 100%;
  transform: rotateX(90deg);
}
</style>


<style>
  .contact-form{
  width: 85%;
  max-width: 600px;
  background: #f1f1f1;
  position: absolute;
  top: 53%;
  left: 50%;
  transform: translate(-50%,-50%);
  padding: 30px 40px;
  box-sizing: border-box;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 0 20px #000000b3;
  font-family: "Montserrat",sans-serif;
}

.contact-form h1{
  margin-top: 0;
  font-weight: 5px;
}

.txtb{
  border :1px solid gray;
  margin: 8px 0;
  padding: 12px 18px;
  border-radius: 8px;
}

.txtb label{
  display: block;
  text-align: left;
  color: #333;
  text-transform: uppercase;
  font-size: 14px;
}
.txtb input,.txtb textarea{
  width: 100%;
  border:none;
  background: none;
  outline: none;
  font-size: 13px;
  margin-top: 6px;
}

.btn{
  display: block;
  background-image: -webkit-linear-gradient(0deg, #f45622 0%, #f53e54 100%);
  padding: 14px 0;
  color: white;
  text-transform: uppercase;
  cursor: pointer;
  margin-top: 8px;
  width: 100%;
  border-radius: 10px;
}
</style>
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
     <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/admin.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a  href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Accueil</span>
              </a>
          </li>




          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Evenements</span>
              </a>
            <ul class="sub">
              <li><a href="affichercompetition.php">Competitions</a></li>
              <li><a href="affichersortie.php">Sorties</a></li>
              <li><a href="afficherstage.php">Stages</a></li>
              <li><a href="promo.html">Promotions</a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="afficherabonnement.php">
              <i class="fa fa-desktop"></i>
              <span>Abonnements</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="cours.html">
              <i class="fa fa-desktop"></i>
              <span>Cours</span>
              </a>
          </li>


          <li class="sub-menu">
            <a href="coach.html">
              <i class="fa fa-desktop"></i>
              <span>Coach</span>
              </a>
          </li>


          <li class="sub-menu">
            <a href="produit.html">
              <i class="fa fa-desktop"></i>
              <span>Produit</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="reservation.html">
              <i class="fa fa-desktop"></i>
              <span>Reservation</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="Commandes.html">
              <i class="fa fa-desktop"></i>
              <span>Commandes</span>
              </a>
          </li>



          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">


    <?PHP
include "../core/abonnementC.php";
$abonnement1C=new abonnementC();
$listeabonnements=$abonnement1C->afficherabonnements();

?>

<!DOCTYPE html>
<html lang="en">



<body>

  <!-- Start your project here-->
 
    <div  class="container">

<br>
<br>
<br>
  <button style="margin-left: 0px;" class="enzel enzel1" onclick="window.location.href='abonnement.html'"><i class="fa fa-plus">&nbsp;&nbsp;&nbsp;</i>Ajouter</button>
<br>
<br>
<br>

      <table class="table table-striped  table-bordered table-hover" id="mydata" style="width: 118%;">
        <thead>
          <tr>
            
<th >Reference</th>
<th >Durée</th>
<th >Prix</th>
<th >Description</th>

<th >supprimer</th>
<th >modifier</th>



          </tr>
          

        </thead>

            <tbody>
              
              <?PHP

              foreach($listeabonnements as $row){
                ?>  
  <tr >
  <td><?PHP echo $row['reference']; ?></td>
  <td><?PHP echo $row['duree']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><?PHP echo $row['descr']; ?></td>


                  <td>
                  <form method="POST" action="supprimerabonnement.php">
                   <!-- <input class="enzel1" type="submit" name="supprimer" value="supprimer">-->
                   <button class="enzel enzel1" type="submit" name="supprimer"><i class="fa fa-trash">&nbsp;</i>supprimer</button>
                    <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
                  </form>
                  </td>
  <td style="text-align: center;">
<br>
<br>
    <a href="modifierabonnement.php?reference=<?PHP echo $row['reference']; ?>">
  <i class="fa fa-edit"></i></a></td>
  </tr>
  <?PHP
}
?>
            </tbody>

      </table>
    </div>

  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
  <script >
    


$('#mydata').DataTable();





  </script>
</body>

</html>

       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>



        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->





  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="vendor/select2/select2.min.js"></script>

  <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="lib/jquery/jquery.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });
      
    
  </script>
  <script src="js/main.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

  <script src="js/coach.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
