<?php
session_start();
ob_start();
if (!isset($_SESSION['useruname'])) 
{
     header("location:../index.php?mes=<h2>Please Login Here!</h2> ");
}
include ('db.php');
$uname = $_SESSION['useruname'];
 ?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EMS Dashboard</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../user/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../user/css/util.css">
    <link rel="stylesheet" type="text/css" href="../user/css/main.css">
<!--===============================================================================================-->
<style type="text/css">
*{
  margin:0;
  padding:0;
}
.bodi {
font-family:arial,sans-serif;
  font-size:100%;
  margin:1em;
  
  color:#fff;
}

h2,p{
  font-size:140%;
  font-weight:normal;
}
.ull,.lii{
  list-style:none;
}
.ull{
  overflow:hidden;
  padding:3em;
}
.ull .lii a{
  text-decoration:none;
  color:#000;
  background:#ffc;
  display:block;
  height:15em;
  width:15em;
  padding:1em;
  -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
  -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  -moz-transition:-moz-transform .15s linear;
  -o-transition:-o-transform .15s linear;
  -webkit-transition:-webkit-transform .15s linear;
}
.ull .lii{
  margin:1em;
  float:left;
  border: 25px solid white;
}
.ull .lii h2{
  font-size:140%;
  font-weight:bold;
  padding-bottom:10px;
}
.ull .lii p{
  font-family:"Reenie Beanie",arial,sans-serif;
  font-size:120%;
}
.ull .lii a{
  -webkit-transform: rotate(-6deg);
  -o-transform: rotate(-6deg);
  -moz-transform:rotate(-6deg);
}
.ull .lii:nth-child(even) a{
  -o-transform:rotate(4deg);
  -webkit-transform:rotate(4deg);
  -moz-transform:rotate(4deg);
  position:relative;
  top:5px;
  background:#cfc;
}
.ull .li:inth-child(3n) a{
  -o-transform:rotate(-3deg);
  -webkit-transform:rotate(-3deg);
  -moz-transform:rotate(-3deg);
  position:relative;
  top:-5px;
  background:#ccf;
}
.ull .lii:inth-child(5n) a{
  -o-transform:rotate(5deg);
  -webkit-transform:rotate(5deg);
  -moz-transform:rotate(5deg);
  position:relative;
  top:-10px;
}
.ull .lii a:hover,.ull .lii a:focus{
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  -o-transform: scale(1.25);
  position:relative;
  z-index:5;
}
ol{text-align:center;}
ol li{display:inline;padding-right:1em;}
ol li a{color:#fff;}

</style>

 
   
</head>
<body>
    <div id="wrapper">
       <?php include 'navbar.php'; 

       



       $query = "SELECT * FROM login WHERE UNAME = '$uname'";
       $sql=mysqli_query($db,$query);
        $res=mysqli_fetch_array($sql);
                
        ?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/logo.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $res['DISTRICT']; ?> 
                            <br />
                                <small>Welcome <?php echo $res['NAME']; ?></small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href="index.php" class="active-menu-top"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="Sehedule_02.php"  ><i class="fa fa-desktop "></i>Schedule 02 </a>
                         
                    </li>
                    <li>
                        <a href="edit.php"  ><i class="fa fa-desktop "></i>View Entry </a>
                         
                    </li>
                    <li>
                        <a href="remaining_provision_reports.php" ><i class="fa fa-calculator"></i>Remaining Provision Reports</a>
                    </li>
                     <li>
                        <a href="profile.php"><i class="fa fa-user-circle "></i>Profile </a>
                        
                    </li>
                
                    <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Logout</a>
                    </li>
                

            </div>
            <div align="=center">
<canvas id="canvas" width="200" height="200"
style="background-color:#202020">
</canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
</div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Expenditure Management System MEMO</h1>
                        <h1 class="page-subhead-line">Dashboard  memo holder  </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <?php
                         if(isset($_GET["mess"]))
      {
        echo $_GET["mess"];
      } ?>
                        <div class="bodi">
                      <ul class="ull">

                         <?php

     
        $mes = "SELECT * FROM note";
       $mas=mysqli_query($db,$mes);

          while ($rekod=mysqli_fetch_array($mas)){
        ?>

        
    <li class="lii">
      <a href="#">
        
        <h2><?php echo $rekod['TITLE']; ?></h2>
        <p><?php echo $rekod['MESSAGE']; ?></p>
      </a>
    </li>

<?php } ?>
    
  </ul>
              </div>     

            
  
        </div>


                
                    
                    
            
           
                        </div>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
              

        
        </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec" align="center">
       Copyright  &copy;  2019 Election Commission of Sri Lanka, Developed By : M.Arulkumaran, in association with ElectionsIT </a>
    </div>
    <?php ob_end_flush(); ?>
        <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

        <script src="assets/js/jquery.min.js"></script>


            <script src="../user/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/bootstrap/js/popper.js"></script>
    <script src="../user/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function(){
                $(this).on('select2:close', function (e){
                    if($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    }

                    
                    else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="../user/vendor/daterangepicker/moment.min.js"></script>
    <script src="../user/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../user/vendor/noui/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    
    <script>

        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 1500, 3900 ],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="js/jquery.min.js"></script>
<script>
    $("input[data-type='currency']").on({
  keyup: function() {
    formatCurrency($(this));
  },
  blur: function() {
    formatCurrency($(this), "blur");
  }
});

function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.

  // get input value
  var input_val = input.val();

  // don't validate empty input
  if (input_val === "") {
    return;
  }

  // original length
  var original_len = input_val.length;

  // initial caret position
  var caret_pos = input.prop("selectionStart");

  // check for decimal
  if (input_val.indexOf(".") >= 0) {
    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);

    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }

    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "Rs " + left_side + "." + right_side;
  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "Rs " + input_val;

    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }

  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}

</script>

    


</body>
</html>
