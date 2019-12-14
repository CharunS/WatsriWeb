<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>โรงเรียนวัดศรีสุดาราม - Watsrisudaram Shcool</title>

    <!-- Tab icon -->
    <link rel="icon" href="../Img/tab_icon.png">

    <!-- Bootstrap core CSS -->
    <link href="../Extensions/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../Extensions/css/modern-business.css" rel="stylesheet">
    <!-- Custom Css-->
    <link href="../Extensions/vendor/bootstrap/css/CustomCss.css" rel="stylesheet">
    <!-- font Awnsome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- import belowe lib to use datatable necessary -->
    <script type="text/javascript" src="../Extensions/DataTables/jquery-3.4.1.min.js"></script>
    <link href="../Extensions/DataTables/datatables.min.css" rel="stylesheet">
    <script src="../Extensions/DataTables/datatables.min.js"></script>
    <script src="../Extensions/DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>

    <!-- Use jquery same datatable -->
    <!-- <script src="../Extensions/vendor/jquery/jquery.min.js"></script> -->
    <script src="../Extensions/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
   
        $(document).ready(function() {
            $('#tbDoc').DataTable({
            "ordering": false,
            "language": {
                "lengthMenu": "แสดง _MENU_ รายการ ต่อ หน้า",
                "zeroRecords": "ไม่พบเอกสารดังกล่าว",
                "info": "แสดง หน้า _PAGE_ ของทั้งหมด _PAGES_",
                "infoEmpty": "ไม่มีเอกสาร",
                "infoFiltered": "(กรองข้อมูลจากทั้งหมด _MAX_ รายการ)",
                "search":"ค้นหา",
                "paginate": {
                    "previous": "ก่อนหน้า",
                    "next":"ถัดไป"
                }
            }
         });
        });

    </script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <!-- <a class="navbar-brand" href="#">โรงเรียนวัดศรีสุดาราม</a> -->
          <img src="../Img/logo.png" width="5%" height="5%">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="../index.php">หน้าแรก</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  เกี่ยวกับโรงเรียน
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                  <a class="dropdown-item" href="../page/History.php">ประวัติโรงเรียน</a>
                  <a class="dropdown-item" href="../page/ShcoolLogo.php">สัญลักษณ์โรงเรียน</a>
                  <a class="dropdown-item" href="../page/Vision.php">วิสัยทัศน์ / ปรัชญา</a>
                  <a class="dropdown-item" href="../page/Mission.php">พันธกิจ / เป้าหมาย</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  บุคลากร
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                  <a class="dropdown-item" href="../page/Staff.php">คณะผู้บริหารและบุคลากร</a>
                  <a class="dropdown-item" href="../page/LearningAreaofThaiLanguage.php">กลุ่มสาระฯภาษาไทย</a>
                  <a class="dropdown-item" href="../page/LearningAreaofMathematics.php">กลุ่มสาระฯคณิตศาสตร์</a>
                  <a class="dropdown-item" href="../page/LearningAreaofScience.php">กลุ่มสาระฯวิทยาศาสตร์</a>
                  <a class="dropdown-item" href="../page/LearningAreaofSocialStudies.php">กลุ่มสาระฯสังคมศึกษาฯ</a>
                  <a class="dropdown-item" href="../page/LearningAreaofHealthandPhysicalEducation.php">กลุ่มสาระฯสุขศึกษาฯ</a>
                  <a class="dropdown-item" href="../page/LearningAreaofArts.php">กลุ่มสาระฯศิลปะ</a>
                  <a class="dropdown-item" href="../page/LearningAreaofOccupationsandTechnology.php">กลุ่มสาระฯการงานอาชีพฯ</a>
                  <a class="dropdown-item" href="../page/LearningAreaofForeignLanguages.php">กลุ่มสาระฯภาษาต่างประเทศ</a>
                  <a class="dropdown-item" href="../page/KindergartenSection.php">ปฐมวัย</a>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="../page/Calendar.php">ปฏิทินกิจกรรม</a>
              </li>
              </ul>
          </div>
      </div>
    </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">เอกสาร</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="../index.php">หน้าแรก</a>
      </li>
      <li class="breadcrumb-item active">เอกสาร</li>
    </ol>

    <table id="tbDoc" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th style="width:85%">รายการเอกสาร</th>
                <th style="width:15%">ดาวน์โหลดเอกสาร</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>รายงานประจำปีของสถานศึกษา(SAR) ปี 2561</td>
                <td align="center"><a href="../UploadDoc/SAR.pdf" target="_blank"><button type="button" class="btn btn-warning" style="float:none!important;display:inline;">ดาวน์โหลด</button></a></td>
            </tr>
            <tr>
                <td>วารสาร ประจำเดือนพฤษภาคม 2562</td>
                <td align="center"><a href="../UploadDoc/201905.pdf" target="_blank"><button type="button" class="btn btn-warning" style="float:none!important;display:inline;">ดาวน์โหลด</button></a></td>
            </tr>
            <tr>
                <td>วารสาร ประจำเดือนมิถุนายน 2562</td>
                <td align="center"><a href="../UploadDoc/201906.pdf" target="_blank"><button type="button" class="btn btn-warning" style="float:none!important;display:inline;">ดาวน์โหลด</button></a></td>
            </tr>
            <tr>
                <td>วารสาร ประจำเดือนกรกฎาคม 2562</td>
                <td align="center"><a href="../UploadDoc/Jul.pdf" target="_blank"><button type="button" class="btn btn-warning" style="float:none!important;display:inline;">ดาวน์โหลด</button></a></td>
            </tr>
            <tr>
                <td>วารสาร ประจำเดือนสิงหาคม 2562</td>
                <td align="center"><a href="../UploadDoc/Aug.pdf" target="_blank"><button type="button" class="btn btn-warning" style="float:none!important;display:inline;">ดาวน์โหลด</button></a></td>
            </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col-lg-2 col-sm-4 mb-4">
          <img class="img-fluid" src="../Img/blankPic.png" alt="">
        </div>        
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; โรงเรียนวัดศรีสุดาราม ที่อยู่ 54/8 ซอยวัดศรีสุดาราม แขวงบางขุนนนท์ เขตบางกอกน้อย กรุงเทพมหานคร 10700 โทร.0-2424-0424</p>
    </div>
    <!-- /.container -->
  </footer>
          
</body>

</html>