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
                <li class="active">
                    <a href="#">Người tham dự</a>
                </li>
                <li>
                    <a href="../speaker/">Diễn giả</a>
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
                <h2>Danh sách người tham gia hội thảo</h2>
                
                <!--Search bar-->
                <div class="input-group pt-4 pb-3">
                    <input id="live-search" type="text" class="form-control" placeholder="Tìm kiếm theo tên, thành phố, quốc tịch" aria-label="searchbar" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm kiếm</button>
                  </div>

                <!--Data Table-->  
                <table class="table table-striped">
                    <!--Fields name-->
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên đầy đủ</th>
                        <th scope="col">Tuổi</th>
                        <th scope="col">Quốc tịch</th>
                        <th scope="col">Thành phố</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <!--Table rows-->
                    <tbody id="attendance-data">
                      
                    </tbody>
                  </table>
            </section>
            
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            getAllData();
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

    <script>
        //Show data to html
        function showData(data){          
            var html = "";
                    document.getElementById("attendance-data").innerHTML = "";
    
                    for(var a = 0; a < data.length; a++) {
                        var serial = a+1;
    
                        var id = data[a].id;
                        var name = data[a].full_name;
                        var age = data[a].age;
                        var national = data[a].national;
                        var city = data[a].city;
                        var phone = data[a].phone;
                        var email = data[a].email;
                     
                        html += "<tr>";
                            html += "<th scope='row'>" + serial + "</th>";
                            html += "<td>" + name + "</td>";
                            html += "<td>" + age + "</td>";
                            html += "<td>" + national + "</td>";
                            html += "<td>" + city + "</td>";
                            html += "<td>" + phone + "</td>";
                            html += "<td>" + email + "</td>";
                            html += "<td> <a href='#' class='btn btn-outline-danger' onclick='deleteAttendance("+ id +")'> Xoá </a> <td>";
                        html += "</tr>";
                        document.getElementById("attendance-data").innerHTML += html;
                        
                        html="";
                    }
        }
    </script>

    <script>
        function getAllData(){
            //call ajax
            var ajax = new XMLHttpRequest();
            var method = "GET";
            var url = "../controller/attendance-data.php";
    
            ajax.open(method, url, true);
            ajax.send();
    
            ajax.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    var data = JSON.parse(this.responseText);
                    console.log(data);
                    showData(data);
                }
            }
        }
    </script>

        <!--FOR DELETE A HUMAN-->
        <script type="text/javascript">
            function deleteAttendance(id){
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
                            url: "../controller/search-attendance.php",
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