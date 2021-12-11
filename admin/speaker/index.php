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
                <li class="active">
                    <a href="#">Diễn giả</a>
                </li>
                <li>
                    <a href="../speech/">Bài diễn thuyết</a>
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
                <h2>Danh sách diễn giả<span>
                    <button id="add-speaker-btn" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add-speaker">Thêm</button>
                </span></h2>
                
                <!--Search bar-->
                <div class="input-group pt-4 pb-3">
                    <input id="live-search" type="text" class="form-control" placeholder="Tìm kiếm theo tên, thành phố, quốc tịch, bài diễn thuyết" aria-label="searchbar" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm kiếm</button>
                  </div>

                <!--Data Table-->  
                <table class="table table-striped">
                    <!--Fields name-->
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên đầy đủ</th>
                        <th scope="col">Bài diễn thuyết</th>
                        <th scope="col">Tuổi</th>
                        <th scope="col">Quốc tịch</th>
                        <th scope="col">Thành phố</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <!--Table rows-->
                    <tbody id="speaker-data">
                      
                    </tbody>
                  </table>
            </section>


    <!-- Modal -->

    <!--ADD NEW SPEAKER-->
    <div class="modal fade" id="add-speaker" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enrollLabel">Thêm diễn giả mới</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../controller/add-speaker.php" method="post" class="ajax">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tên đầy đủ</span>
                        <input type="text" class="form-control" placeholder="Nguyễn Văn A" aria-label="fullname" name="name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tuổi</span>
                        <input type="number" class="form-control" placeholder="30" aria-label="age" name="age">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Quốc tịch</span>
                        <input type="text" class="form-control" placeholder="Viet Nam" aria-label="national" name="national">
                    </div> 
                    <div class="input-group mb-3">   
                        <span class="input-group-text">Thành phố</span>
                        <input type="text" class="form-control" placeholder="Hanoi" aria-label="city" name="city">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Số điện thoại</span>
                        <input type="text" class="form-control" placeholder="123456789" aria-label="phone" name="phone">
                    </div>
                    <div class="input-group mb-3">    
                        <span class="input-group-text">Email</span>
                        <input type="email" class="form-control" placeholder="example@email.com" aria-label="email" name="email">
                    </div>
                                      
                    <div class="modal-footer">
                      <input type="submit" name="add_speaker" class="btn btn-outline-primary" value="Thêm">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
         
          </div>
        </div>
      </div>

    <!--UPDATE SPEAKER INFo-->
    <div class="modal fade" id="update-speaker" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enrollLabel">Chỉnh sửa thông tin diễn giả</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../controller/update-speaker.php" method="post" class="ajax">
                    <div class="input-group mb-3">
                        <span class="input-group-text">ID</span>
                        <input id="id-in" type="number" class="form-control"  aria-label="id" name="id">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tên đầy đủ</span>
                        <input id="fullname-in" type="text" class="form-control" placeholder="Nguyễn Văn A" aria-label="fullname" name="name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tuổi</span>
                        <input id="age-in" type="number" class="form-control" placeholder="30" aria-label="age" name="age">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Quốc tịch</span>
                        <input id="national-in" type="text" class="form-control" placeholder="Viet Nam" aria-label="national" name="national">
                    </div> 
                    <div class="input-group mb-3">   
                        <span class="input-group-text">Thành phố</span>
                        <input id="city-in" type="text" class="form-control" placeholder="Hanoi" aria-label="city" name="city">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Số điện thoại</span>
                        <input id="phone-in" type="text" class="form-control" placeholder="123456789" aria-label="phone" name="phone">
                    </div>
                    <div class="input-group mb-3">    
                        <span class="input-group-text">Email</span>
                        <input id="email-in" type="email" class="form-control" placeholder="example@email.com" aria-label="email" name="email">
                    </div>
                                      
                    <div class="modal-footer">
                      <input type="submit" name="update_speaker" class="btn btn-outline-primary" value="Cập nhật">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>

                </form>
            </div>
          </div>
        </div>
      </div>



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--Toggle the sidebar-->
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
        document.getElementById("speaker-data").innerHTML = "";
    
        for(var a = 0; a < data.length; a++) {
            
            var serial = a+1;
    
            var id = data[a].id;
            var title = data[a].title;
            var full_name= data[a].full_name;
            var age = data[a].age;
            var national = data[a].national;
            var city = data[a].city;
            var phone = data[a].phone;
            var email = data[a].email
            
         
            html += "<tr>";
                html += "<th scope='row'>" + serial + "</th>";
                html += "<td>" + full_name + "</td>";
                html += "<td>" + title+ "</td>";
                html += "<td>" + age + "</td>";
                html += "<td>" + national + "</td>";
                html += "<td>" + city + "</td>";
                html += "<td>" + phone + "</td>";
                html += "<td>" + email + "</td>";
                html += '<td> <button type="button" class="btn btn-outline-success" onclick="updateSpeaker('+ id +')" data-bs-toggle="modal" data-bs-target="#update-speaker">Chỉnh sửa</button> </td>'
                html += "<td> <button type='button' class='btn btn-outline-danger' onclick='deleteSpeaker("+ id +")'> Xoá </a> <td>";
            html += "</tr>";
            document.getElementById("speaker-data").innerHTML += html;
            
            html="";
        }
    }

    var data;
    function getAllData(){
        //call ajax
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "../controller/speaker-data.php";
    
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
                    if(response == 'success'){
                        alert("Thao tác thành công!");
                        getAllData()
                    }
                    else if(response == 'fail'){
                        alert("Thao tác thất bại!");
                    }
                }
            });
            
            return false;
        });
    </script>

    <!--Update speaker-->
<script>
    function updateSpeaker(id){
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
        $('#fullname-in').val(data[serial].full_name);
        $('#age-in').val(data[serial].age);
        $('#national-in').val(data[serial].national);
        $('#city-in').val(data[serial].city);
        $("#phone-in").val(data[serial].phone);
        $('#email-in').val(data[serial].email);
    }
</script>


    <!--FOR DELETE A HUMAN-->
    <script>
        function deleteSpeaker(id){
            $.ajax({
                type: 'post',
                url: '../controller/delete-people.php',
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

    <!--FOR LIVE SEARCH-->
    <script type="text/javascript">
        $(document).ready(function(){

            $('#live-search').keyup(function(){
                var input = $(this).val();
                
                if(input != ""){
                    $.ajax({
                        url: "../controller/search-speaker.php",
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