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

    <!-- Fix bottom footer -->
  <style>
    footer 
    {
      position: fixed;
      left: 0 ;
      bottom: 0 ;
      width: 100%;      
    }
  </style>

  <!-- Select 2 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../Extensions/select2/css/select2.min.css" />
  <script type="text/javascript" src="../Extensions/select2/js/select2.min.js"></script>

  <!-- Sweet Alert -->
  <link rel="stylesheet" type="text/css" href="../Extensions/sweetalert/sweetalert.css" />
  <script type="text/javascript" src="../Extensions/sweetalert/sweetalert.min.js"></script>

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
                    <a class="nav-link" href="#" id="logOut">ออกจากระบบ</a>
                </li>
              </ul>
          </div>
      </div>
    </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">ลงเวลา เข้า - ออก</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="../index.php">หน้าแรก</a>
      </li>
      <li class="breadcrumb-item active">ลงเวลา เข้า - ออก</li>
    </ol>

    <form>
        <div class="form-group">
            <label for="exampleFormControlSelect1">บุคลากร</label>
            <select class="form-control" id="selUser">
                <option></option>
                <option value="001">นาย เอกศักดิ์ อินทนะ</option>
                <option value="002">นางสาว ธิดาทิพย์ ทุมวัน</option>
            </select>
            <script type="text/javascript">
                $("#selUser").select2({
                    allowClear: true,
                    placeholder: 'กรุณาเลือกบุคลากร',
                    width: '100%',
                });
            </script>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">ภาระงาน</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
    <button type="button" class="btn btn-primary" style="background-color: #0417CD; width: 100%;" id="saveData">บันทึกข้อมูล</button>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
      <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; โรงเรียนวัดศรีสุดาราม ที่อยู่ 54/8 ซอยวัดศรีสุดาราม แขวงบางขุนนนท์ เขตบางกอกน้อย กรุงเทพมหานคร 10700 โทร.0-2424-0424</p>
      </div>
      <!-- /.container -->
  </footer>
          
  <!-- Bootstrap core JavaScript -->
  <script src="../Extensions/vendor/jquery/jquery.min.js"></script>
  <script src="../Extensions/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
<script type="text/javascript">

    $(document).ready(function() {
        if(sessionStorage.getItem("UserName") == null && sessionStorage.getItem("PassWord") == null){
            window.location = "../index.php";
        }
    });

    $('#logOut').click(function() {
        sessionStorage.clear();
        window.location = "../index.php";
    });

    $('#saveData').click(function() {
        let today = new Date();
        let dd = String(today.getDate()).padStart(2, '0');
        let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        let yyyy = today.getFullYear();

        today = mm+dd+yyyy;

        $.ajax({
            url:'../UserMaintenance/'+today.toString()+'.txt',
            type:'HEAD',
            error: function()
            {
                //file not exists
                CreateFile();
            //    console.log('ok')

            
            },
            success: function()
            {
                //file exists
            }
        });
    });

    function CreateFile(){

        //console.log('ok');
        $.ajax({
            url:"../WebAPI/FileManager.php", //the page containing php script
            type: "post", //request type,
            dataType: 'json',
            data: {
                 ActionName: "CreateFile"
                ,ParamArr: []
            },
            success:function(result){
                console.log(result);
                if (result.status == 'ok'){
                    swal({
                        title: "บันทึกข้อมูลสำเร็จ",
                        type: "success",
                        showConfirmButton: true,
                        confirmButtonText: "ตกลง",
                        confirmButtonColor: "#0417CD"
                    });    
                }
                else{
                    swal({
                        title: "ไม่สามารถบันทึกข้อมูลได้",
                        type: "warning",
                        showConfirmButton: true,
                        confirmButtonText: "ตกลง",
                        confirmButtonColor: "red"
                    });
                }
           }
         });

    }

    function InserData(){
        return null;
    }
</script>

</html>
