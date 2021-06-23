<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Luna Helper</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  <style>
      html {
        scroll-behavior: smooth;
      }
  </style>


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-dark text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Luna Helper</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-info text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        เมนู
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#fishing">ตกปลา</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#findItem">หาไอเท็มเสริมออฟชั่น</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!--ส่วนแสดงการคำนวณตกปลา -->
  <section class="page-section bg-primary portfolio" id="fishing">
    <div class="container">

      <!-- ส่วนหัว ตกปลา -->
      <h2 class="page-section-heading text-center text-uppercase text-light mb-0" style="margin-top: 8%;">คำนวณเวลา และเหยื่อตกปลา</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star "></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- จัดตารางตกปลา -->
      <div class="row">

        <div class="col-md-9 col-lg-6">
            <img class="img-fluid" src="img/fishing.png" style="width: 70%;" alt="">
          
        </div>

        <!-- คำนวณ -->
        <div class="col-md-6 col-lg-4 align-middle">
        <div class="control-group">
              <div class="mb-0 pb-2">
                <br>
                <h3 class="text-light">ชั่วโมง : </h3><input class="form-control" id="hour" type="number" default="0">
                <h3 class="text-light">นาที : </h3><input class="form-control" id="min" type="number" default="0">
                <br>
                <br>
                <h3 class="text-light">จำนวนเหยื่อตกปลา : </h3><input class="form-control" id="food" type="number" default="0">
              </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>

 

  <!-- ส่วนหาไอเท็ม -->
  <section class="page-section" id="findItem">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">หาไอเท็มเสริมออฟชั่น</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
      <table id="itemTable" class="display text-secondary " style="width:100%" >
        <thead>
            <tr>
                <th>รูปภาพ</th>
                <th>ชื่อไอเท็ม</th>
                <th>เสริมพลัง</th>
                <th>ประเภท</th>
                <th>จำนวนที่ใช้สูงสุด</th>
                <th>ดูมอนส์เตอร์ที่ดรอป</th>
            </tr>
        </thead>
        <tbody>
            <?php
              include("DBtable.php");
            ?>
        </tbody>
    </table>
  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>จัดทำโดย<br>61004762	นางสาวพิมรดา เพ็งสุข<br>61017254	นางสาวจอมีล่า มะหะมุด<br>61708048	นางสาวภัทราวดี สุศิละ<br>61017545	นางสาวสุชญา จำปาดิษฐ์</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"> 
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Find Item Modals -->

  <div class="portfolio-modal modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">ข้อมูลมอนสเตอร์</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>

                <!-- เรียก ajax แสดงผลเป็นแบบ html อ้างอิงโดย id -->
               <div id="result">
               </div>
                
              </div>
            </div>
            
            <button class="btn btn-primary" style="margin-top: 40px;font-size: large;" href="#" data-dismiss="modal">
              <i class="fas fa-times fa-fw"></i>
              ปิดหน้าต่าง
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->

  <script>
      $(document).ready(function(){
          $("#hour").keyup(function(){
              convertTtoF();
          });
          $("#min").keyup(function(){
              convertTtoF();
          });
          $("#min").keyup(function(){
              checkMin();
          });
          $("#food").keyup(function(){
              convertFtoT();
          });
      });
      function convertTtoF(){
          var hr = $("#hour").val();
          var min = $("#min").val();
          var result;
          result = hr*60*60+min*60;
          result = result/13;
          $("#food").val(Math.round(result));
      }
      function checkMin(){
          var hr = $("#hour").val();
          var min = $("#min").val();
          while(min>=60){
                  hr++;
                  min = min-60;
              }
          $("#min").val(min);
          $("#hour").val(hr);
      }
      function convertFtoT(){
          var food = $("#food").val();
          var result;
          $("#hour").val("0");
          result = Math.round(food*13/60);
          $("#min").val(result);
          checkMin();
      }
  </script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

  <script>

    $(document).ready(function() {
    $('#itemTable').DataTable({
      columnDefs: [
        {
            targets: "_all",
            className: 'dt-body-center'
        }
    ]
    });
    //แสดงรายละเอียดมอนส์เตอร์
    
    } );

    function showMonster(iID){
        //รับค่าiID
        readMonster(iID);
        //แสดงผล

    }

      function readMonster(iID){
        console.log("ได้"+iID);
      $.ajax({
        url:"read.php",
        method:"POST",
        data:{iID:iID},
        success: function(data){
          var obj = jQuery.parseJSON(data);
          console.log("data :  "+obj[1].mIMG+" lenght : "+obj.length);
          //ล้างค่าเก่า
          $('#m').html("");
          //ประกาศค่า HTML ใหม่
            var html = "";
          //แสดงผลข้อมูลทีละตัวใน html  
          for(var i = 0;i<obj.length;i++){
            html += "<div class='row'>";
              html += "<div class='col-md-6'>";
                  html+="<img class='img-fluid rounded mb-2' src='/Luna_Project/img/monster/"+obj[i].mIMG+"' style='height: 120px;'>"
              html += "</div>";
              html += "<div class='col-md-6'>";
              html += "<h5 class='col-md-12 text-md-left text-info' >ชื่อ :  "+obj[i].mName+ "</h5>" ;
              html += "<h5 class='col-md-12 text-md-left text-secondary' >เลเวล :  "+obj[i].mLv+"</h5>" ;
              html += "<h5 class='col-md-12 text-md-left text-secondary' >HP :  "+obj[i].mHP+"</h5> ";
              html += "<h5 class='col-md-12 text-md-left text-danger'>สถานที่เกิด :  "+obj[i].mpName+"</h5>";
              html += "<br><br>";
              html += "</div>";
            html += "</div>";
          }
          //ใส่ค่า html ใหม่
          $('#result').html(html);
          $('#itemModal').modal('show');

        }
        
      });
    }
  </script>


</body>

</html>


