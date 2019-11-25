<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

    <title>โรงเรียนวัดศรีสุดาราม - Watsrisudaram Shcool</title>

    <!-- Tab icon -->
    <link rel="icon" href="../img/tab_icon.png">

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
            $('#tbAllNews').DataTable({
            "ordering": false,
            "language": {
                "lengthMenu": "แสดง _MENU_ รายการ ต่อ หน้า",
                "zeroRecords": "ไม่พบข่าวดังกล่าว",
                "info": "แสดง หน้า _PAGE_ ของทั้งหมด _PAGES_",
                "infoEmpty": "ไม่มีข่าว",
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
    <h1 class="mt-4 mb-3">ข่าวทั้งหมด</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="../index.php">หน้าแรก</a>
      </li>
      <li class="breadcrumb-item active">ข่าวทั้งหมด</li>
    </ol>

    <table id="tbAllNews" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th>รายละเอียดข่าว</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="https://www.facebook.com/pg/Watsrisudaram/photos/?tab=album&album_id=1381456485328269&__tn__=-UC-R" target="_blank">วันสุนทรภู่ 26 มิ.ย. 62</a></td>
            </tr>
            <tr>
                <td><a href="https://www.facebook.com/pg/Watsrisudaram/photos/?tab=album&album_id=1376142859192965&__xts__%5B0%5D=68.ARAwEmn5nHfF-Tu-GO6ukx1-fDQ95rSOpXD2grDK-5cJc2IoVhHGiwaQiQTGJfgjOYd1W9qH95g_IhA0xhzpHAskLWqQNhNlWJMFz6yfhEV0c3mi3X0Km8Ku31IkfqGjjwbbrrVWGsddZOpEc1kuXBGNcnVzil0zZEJ8X856Dd84WnirQacQiKSc3HduHIli-zfFkpO2F74a_T308UKGIF4JfHE8dR_uzZJvSkevEhvSdl4WUWzicaC6m94LdpsJk-8WhHYLKIMeJ8PR3uvVE63OC_32AAEjD-D1zucBeA8BkQW-1MW2PHe3N5hhV3UQ-r7EwTHj5mWFGczeaqE8CSz-LSQubCzEtoPHhluhPVrrMuOBMOdnCGjQPp2DaUvVjAWEAy8_Aq5UzUDoXFUyIVy-Fvz_ORDTe80jfjl8BSL_xFNGE6Ri_nKjq8wlp07gHeod-wrlINRluCPXAm0_&__tn__=-UC-R" target="_blank">พิธีไหว้ครู 20 มิ.ย. 62</a></td>
            </tr>
            <tr>
                <td><a href="https://www.facebook.com/pg/Watsrisudaram/photos/?tab=album&album_id=1366836810123570&__xts__%5B0%5D=68.ARA_WmKdIONtInkrl-d932bZ0MdWKiT60_xNUaEJ04Ii-ypufYZxH1MCIcWlMzq2v4_2gGkIxIMYKYjnkYGhCtUj64XiXPebqBT3bx-QzV9CCL1Q3XOsNgq_fIpAtMIYVY6w1nsrph-vOAqkzY1uTYPgNJl-t-g_j7_IbhSGX-oDp8prEK2B-p3NziMl95aCIbhrJvv9re3fLB3fl6WCmWYGYOXaPJDBmtRNgL_4n5vkHxhMKZQQ4RYASnCz3CsuIh5gBniyFebJfVL38Y_sZYh5RxKcnKm2s1FnGMMLtDmAAXIlFnSd_82OLzeVBlUVc7LaaOUkYrgaWi7uzNIBU1t1YwVioxCmSQIXL_8ZE0ymbhECL-Qzuo5kR_r04icquemNkAAjaCOSZsMUPa34L3HUuPBZ5Ufv9eT_XmrTh2-_ufeM2ER4vJeErrPsrLHFQ9d12SJ7Cz8TLBHY3sWF&__tn__=-UC-R" target="_blank">โครงการอบรมเยาวชนสัมพันธ์รุ่นที่380</a></td>
            </tr>
            <tr>
                <td><a href="https://www.facebook.com/pg/Watsrisudaram/photos/?tab=album&album_id=1366857213454863&__tn__=-UC-R" target="_blank">อบรมนายหมู่ลูกเสือสามัญและหัวหน้าหน่วยยุวกาชาด</a></td>
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