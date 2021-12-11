<?php

    include('../config/constant.php');
    session_start();

    if(!isset($_SESSION['logged_in']))
    {
        header('location:'.SITEURL.'login');
        exit();
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Quản lý hội thảo</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Green<span class="text-success">Teck</span></h3>
            </div>

            <ul class="list-unstyled components">
                <p>Quản lý hội thảo</p>
                <li id="introduction-item" class="active">
                    <a id="introduction-link" href="#" >Giới thiệu</a>
                </li>
                <li id="attendence-item">
                    <a id="attendence-link" href="attendance" >Người tham dự</a>
                </li>
                <li id="speaker-item">
                    <a id="speaker-link" href="speaker" >Diễn giả</a>
                </li>
                <li id="speech-item">
                    <a id="speech-link" href="speech">Bài diễn thuyết</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../" class="landing">Trang chủ</a>
                </li>
                <li>
                    <a href="controller/logout.php" class="logout">Đăng xuất</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div  id="content">
            <!--Colapse side bar toggle-->
            <div class="container-fluid pb-4">
                <button type="button" id="sidebarCollapse" class="btn btn-secondary">
                    <i class="fas fa-align-left"></i>
                </button>
            </div>
        <section>    
            <h2>Hội thảo công nghệ vì một cuộc sống xanh</h2>
            <p>
                GreenTeck là một hội thảo mang chủ đề công nghệ gắn với môi trường. Hiện nay vấn đề về biến đổi khí hậU và ô nhiễm môi trường ngày càng gia tăng.
                Việc tổ chức hội thảo sẽ làm tăng thêm nhận thức của mọi người về vấn đề này.
            </p>
            <p>
                Đây là một hội thảo khoa học, bởi vậy luôn đi kèm với nó là các bài diễn thuyết. Những diễn giả tham gia hội thảo đều là những chuyên gia trong 
                lĩnh vực của họ. Các bài diễn thuyết chính là xuất phát điểm cho dự án mà họ đang nghiên cứu. Việc đem chúng tới hội thảo sẽ giúp những dự án 
                xanh này đạt được sự chú ý của mọi người và thu hút thêm sự đầu tư.
            </p>
            <p>
                Năm 2021, là năm đầu tiên hội thảo GreenTeck được tổ chức, tuy nhiên nếu thành công theo như dự tính, đây sẽ là một sự kiện hằng năm được bạn bè
                giới khoa học trong và ngoài nước mong đợi.
            </p>
        
            <div class="line"></div>
        
            <h2>Mọi người đều có thể tham dự</h2>
            <p>
                GreenTeck chào đón tất cả mọi người cùng tham dự, không noại trừ một ai. Thành phần tham dự sẽ bao gồm những người tham dự và diễn giả. 
                Người tham dự có thể đăng kí tham gia trên website của hội thảo. Đối với những diễn giả sẽ được ban tổ chức liên hệ và sắp xếp lịch trình, xe đưa đón.
            </p>
            <p>
                Ban tổ chức sẽ quản lý thônng tin cung của những người đăng kí tham gia hội thảo, thông tin của các diễn giả và lịch trình của hội thảo.
            </p>
        </section>
            
        </div>
    </div>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {      
            $('#sidebarCollapse').click(function () {
                $('#sidebar').toggleClass('active');
            });
        });
        </script>


</body>

</html>


