<?php

    include('../../config/constant.php');
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
                <li>
                    <a href="../">Giới thiệu</a>
                </li>
                <li >
                    <a href="../attendance/">Người tham dự</a>
                </li>
                <li>
                    <a href="../speaker/">Diễn giả</a>
                </li>
                <li class="active">
                    <a href="#">Bài diễn thuyết</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../../" class="landing">Trang chủ</a>
                </li>
                <li>
                    <a href="../controller/logout.php" class="logout">Đăng xuất</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

                <div class="container-fluid pb-5">
                    <button type="button" id="sidebarCollapse" class="btn btn-secondary">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>      

            <section>

                <!--Title-->
                <h2>Danh sách bài diễn thuyết
                    <span >
                        <button id="add-speech-btn" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add-speech">Thêm</button>
                    </span>
                </h2>
                
                <!--Search bar-->
                <div class="input-group pt-4 pb-3">
                  <input id="live-search" type="text" class="form-control" placeholder="Tìm kiếm theo tiêu đề, diễn giả, ngày" aria-label="searchbar" aria-describedby="button-addon2">
                  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm kiếm</button>
                </div>
          
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Diễn giả</th>
                        <th scope="col">Ngày</th>
                        <th scope="col">Thời gian bắt đầu</th>
                        <th scope="col">Thời gian kết thúc</th>
                      </tr>
                    </thead>
                    <tbody id="speech-data">
                      
                    </tbody>
                  </table>
            </section>
        </div>
    </div>


    <!--ADD NEW SPEECH-->
    <div class="modal fade" id="add-speech" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enrollLabel">Thêm bài diễn thuyết mới</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="ajax" action="../controller/add-speech.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tiêu đề</span>
                        <input type="text" class="form-control" placeholder="Năng lượng xanh" aria-label="speechname" name="title">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Diễn giả</span>
                        <input type="text" class="form-control" placeholder="John Doe" aria-label="speakername" name="speaker_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Ngày</span>
                        <input type="date" class="form-control" placeholder="22/10/2021" aria-label="date" name="date">
                    </div> 
                    <div class="input-group mb-3">   
                        <span class="input-group-text">Thời gian bắt đầu</span>
                        <input type="time" class="form-control" placeholder="12:00" aria-label="timestart" name="time_start">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Thời gian kết thúc</span>
                        <input type="time" class="form-control" placeholder="14:00" aria-label="timeend" name="time_end">
                    </div>                   
                    <div class="modal-footer">
                      <input type="submit" name="add_speech" class="btn btn-outline-primary" value="Thêm">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>

    <!--UPDATE SPEECH-->
    <div class="modal fade" id="update-speech" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enrollLabel">Chỉnh sửa bài diễn thuyết</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="ajax" action="../controller/update-speech.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">ID</span>
                        <input id="id-in" type="number" class="form-control"  aria-label="speechid" name="id">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tiêu đề</span>
                        <input id="title-in" type="text" class="form-control" placeholder="Năng lượng xanh" aria-label="speechname" name="title">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Diễn giả</span>
                        <input id="speaker-in" type="text" class="form-control" placeholder="John Doe" aria-label="speakername" name="speaker_name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Ngày</span>
                        <input id="date-in" type="date" class="form-control" placeholder="22/10/2021" aria-label="date" name="date">
                    </div> 
                    <div class="input-group mb-3">   
                        <span class="input-group-text">Thời gian bắt đầu</span>
                        <input id="timestart-in" type="time" class="form-control" placeholder="12:00" aria-label="timestart" name="time_start">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Thời gian kết thúc</span>
                        <input id="timeend-in" type="time" class="form-control" placeholder="14:00" aria-label="timeend" name="time_end">
                    </div>                   
                    <div class="modal-footer">
                      <input type="submit" name="update_speech" class="btn btn-outline-primary" value="Cập nhật">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </form>
          </div>
        </div>
    </div>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


<script>
    $(document).ready(function(){
        getAllData();
    });
</script>


<script>
    function showData(data){
        
        var html = "";
                document.getElementById("speech-data").innerHTML = "";
    
                for(var a = 0; a < data.length; a++) {
                    
                    var serial = a+1;
    
                    var id = data[a].id;
                    var title = data[a].title;
                    var speakername= data[a].speaker;
                    var date_show = data[a].date_show;
                    var time_start = data[a].time_start;
                    var time_end = data[a].time_end;
                    
                 
                    html += "<tr>";
                        html += "<th scope='row'>" + serial + "</th>";
                        html += "<td>" + title + "</td>";
                        html += "<td>" + speakername+ "</td>";
                        html += "<td>" + date_show + "</td>";
                        html += "<td>" + time_start + "</td>";
                        html += "<td>" + time_end + "</td>";
                        html += '<td> <button type="button" class="btn btn-outline-success" onclick="updateSpeech('+ id +')" data-bs-toggle="modal" data-bs-target="#update-speech">Chỉnh sửa</button> </td>'
                        html += "<td> <button type='button' class='btn btn-outline-danger' onclick='deleteSpeech("+ id +")'> Xoá </a> <td>";
                    html += "</tr>";
                    document.getElementById("speech-data").innerHTML += html;
                    
                    html="";
                }
    }

    var data;
    function getAllData(){
        //call ajax
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "../controller/speech-data.php";
    
        ajax.open(method, url, true);
        ajax.send();
    
        ajax.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                data = JSON.parse(this.responseText);
                //console.log(data);
                showData(data);
            }
        }

    }
</script>


    <!--AJAX POST for the form-->
    <script>
        $('form.ajax').on('submit', function(){
            
            var that = $(this),
                url = that.attr('action'),
                type = that.attr('method'),
                data = {};
            
            //find the element with name attr 
            that.find('[name]').each(function(index, value){
                var that = $(this),
                    name = that.attr('name'),
                    value = that.val();
                
                //apend value to the data {}
                data[name] = value;
            });

            //send the data to php
            $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                    console.log(response);
                    if(response == 'success'){
                        alert("Thao tác thành công!");
                        getAllData();
                    }
                    else if(response == 'fail'){
                        alert("Thao tác thất bại!");
                    }
                }
            });
            
            return false;
        });
    </script>

    <!--FOR DELETE A SPEECH-->
    <script>
        function deleteSpeech(id){
            $.ajax({
                type: 'post',
                url: '../controller/delete-speech.php',
                data: {delete_id: id},
                success: function(response) {
                    if(response == 'success'){
                        alert("Xoá thành công!");
                        getAllData();
                    } 
                    else if(response == 'fail'){
                        alert("Xoá thất bại");
                    }
                }
            });
        }
    </script>

    <!--FOR UPDATE THE SPEECH-->
    <script>
        function updateSpeech(id){
            //alert(id);
            for(a = 0; a < data.length; a++){
                if(id == data[a].id){
                    setupFormUpdate(a);
                    break;
                }
            }
        }

        function setupFormUpdate(serial){
            $('#id-in').val(data[serial].id);
            $('#title-in').val(data[serial].title);
            $('#speaker-in').val(data[serial].speaker);
            $('#date-in').val(data[serial].date_show);
            $('#timestart-in').val(data[serial].time_start);
            $('#timeend-in').val(data[serial].time_end);
        }
    </script>

    <!--FOR LIVE SEARCH-->
    <script type="text/javascript">
        $(document).ready(function(){

            $('#live-search').keyup(function(){
                var input = $(this).val();
                
                if(input != ""){
                    $.ajax({
                        url: "../controller/search-speech.php",
                        method: 'POST',
                        data: {input: input},

                        success:function(searchResult){
                            searchData = JSON.parse(searchResult);
                            console.log(searchData);
                            showData(searchData);
                            //console.log(searchResult);
                        }
                    });
                }
                else{
                    getAllData();
                }
            });
        });
    </script>

</body>

</html>