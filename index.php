<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>GreenTeck Convention</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
      <!--Use the container so the intier nav bar does not need the padding on the side plus easier to setup-->
      <div class="container">
          <!--This will be the name of the website-->
          <a href="#" class="navbar-brand fw-bold">Green<span class="text-success">Teck</span></a>

          <!--Ok so now we have a problem when the browser wight get smaller the menu disappear-->
          <!--let fix that by adding a togger button to dropdown the menu-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <i class="fas fa-bars"></i>
          </button>
              
          <!-- For the navigation menu nuse collapse so it responsive to smaller sizes-->
          <div class="collapse navbar-collapse ms-auto" id="navmenu">
               <!--Also let move the menu to the right-->
              <ul class = "navbar-nav ms-auto" >
                  <li class="nav-item">
                      <a href="#summarize" class="nav-link">Mục tiêu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#schedule" class="nav-link">Lịch trình</a>
                    </li>
                    <li class="nav-item">
                        <a href="#learn" class="nav-link">Điểm nhấn</a>
                    </li>
                    <li class="nav-item">
                        <a href="#speakers" class="nav-link">Diễn giả</a>
                    </li>
                  <li class="nav-item">
                      <a href="#questions" class="nav-link">Câu hỏi</a>
                  </li>
                  <li class="nav-item">
                    <a href="#contact" class="nav-link">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a href="login/" class="nav-link">Đăng nhập</a>
                </li>
              </ul>
          </div>
      </div>
    </nav>    


    <!--BANNER-->
    <section class="pt-5">        
          <!-- Jumbotron -->
          <div
            class="bg-image p-5 text-center shadow-1-strong rounded  text-white"
            style="background-image: url('img/8000.jpg');
            height: 50vh;"
          >
          <div class="mask p-5" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="justify-content-center align-items-center h-100">
                <div>
                    <h1 class="my-4 ">Green<span class="text-success">Teck</span></h1>
                    <h2 class="my-4 h3">HỘI THẢO <span class="text-success">CÔNG NGHỆ</span> VÌ MỘT CUỘC SỐNG <span class="text-success">XANH</span></h2>
                </div>
                <p class="m-4 "> 
                  GreenTeck là hội thảo thường niên về chủ đề môi trường và công nghệ. Đối mặt với sự nóng lên toàn cầu, con người 
                  cần có những giải pháp để hạn chế và cải thiện môi trường mà vẫn duy trì được cuộc sống hiện đại. Cùng tham gia và học hỏi qua những bài diễn thuyết về môi trường và công nghệ.
                  </p>
            </div>       
          </div> 
          <!-- Jumbotron -->
    </section>


    <!--TIME AND PLACE-->
    <section class="back1 text-dark p-5">
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="text-center">
            <h4 class="mb-2">29/10/2021 - 31/10/2021</h4>
            <h4 class="mb-2">09:00 - 15:00</h4>
            <h4 class="mb-2">Tầng 2 toà nhà Keangnam, Phạm Hùng, Nam Từ Liêm, Hà Nội</h4>
            <h4 class="mb-2">Miễn phí tham dự</h4>
          </div>
        </div>
        <div class="mt-4 d-flex justify-content-center">
          <button class="btn btn2 btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#enroll">Tham Gia</button>
        </div>
      </div>
    </section>

    <!--Enroll form-->
    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="enrollLabel">Đăng ký tham gia hội thảo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">Điền vào đơn và chúng tôi sẽ liên lạc với bạn</p>
                <form method="post" action="signup.php">
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Họ và tên:</label>
                        <input type="text" class="form-control" name="name_input" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="col-form-label">Tuổi:</label>
                        <input type="number" class="form-control" name="age_input" id="age">
                    </div>
                    <div class="mb-3">
                        <label for="national" class="col-form-label">Quốc tịch:</label>
                        <input type="text" class="form-control" name="national_input" id="national">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="col-form-label">Thành phố:</label>
                        <input type="text" class="form-control" name="city_input" id="city">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email_input" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="col-form-label">Số điện thoại:</label>
                        <input type="text" class="form-control" name="phone_input" id="phone">
                    </div>
                    <div class="py-4">
                        <input type="submit" class="btn btn-outline-primary" name="submit" value="Đăng ký">
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>


    <!--BREFING ABOUT CLIMATE CHANGE AND WHAT THIS CONFERENT AIM TOWARD-->
    <section id="summarize" class="p-5">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="col-md">
                  <img src="img/crop/pollutionair.png" class="img-fluid rounded" alt="some image">
              </div>
              <div class="col-md p-5">
                  <h2>BIẾN ĐỔI KHÍ HẬU</h2>
                  <p class="lead">Một vấn đề nóng đang cần được làm mát</p>
                    <p>
                        Biến đổi khí hậu là sự thay đổi của khí hậu và của những thành phần liên quan 
                        gồm đại dương, đất đai, bề mặt Trái đất, và băng quyển như tăng nhiệt độ, băng tan, và nước biển dâng. 
                    </p>
                    <p>
                        Trước đây biến đổi khí hậu diễn ra trong một khoảng thời gian dài do tác động của các điều kiện tự nhiên, 
                        tuy nhiên thời gian gần đây, biến đổi khí hậu xảy ra do tác động của các hoạt động của con người như 
                        việc sử dụng nhiên liệu hóa thạch trong giao thông vận tải và sản xuất công nghiệp, thải ra môi trường khí nhà kính.
                    </p>                  
              </div>
          </div>
      </div>
    </section>

    <section id="summarize-2" class="p-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>CÙNG TÌM KIẾM GIẢI PHÁP</h2>
                    <p class="lead">Giải pháp tối ưu và hiệu quả nhất đối với vấn đề môi trường chính là giải pháp công nghệ</p>
                    <p>
                        Tại hội thảo, chúng ta sẽ cùng bàn luận về những vấn đề xoay quanh chủ để này và cùng nhau đưa ra giải pháp.
                    </p>
                    <p>
                        Chúng ta sẽ được tìm hiểu về năng lượng sạch, hạn chế lượng khí thải nhà kính bằng cách làm cho xe điện trở nên
                        thông dụng, hay những vấn đề tưởng chừng nhỏ nhưng vô cùng quan trọng đó là tái chế rác thải và rất nhiều kiến thức 
                        mới chỉ dành cho những người tham dự. 
                    </p>                    
                </div>
                <div class="col-md">
                    <img src="img/crop/niceview.png" class="img-fluid rounded" alt="some image">
                </div>
            </div>
        </div>
    </section>


    <!--SHORT SCEDULE-->
    <section id="schedule" class="p-5">
      <div class="container">
          <!--Let add the gap between the card when stack, the g stand for gap-->
          <div class="row text-center g-4"> 
              <!--we want this cards to stack at small screen-->
              <div class="col-md">
                  <div class="card back2 text-light">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img
                          src="img/crop/nottheair.png"
                          class="img-fluid"
                        />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">NGÀY THỨ NHẤT</h5>
                        <p class="card-text">
                            Nói chuyện về vấn đề ô nhiễm môi trường và biến đổi khí hậu, ảnh hưởng của chúng tới đời sống kinh tế,
                             cách thức tái chế rác thải hiệu quả nhất.
                        </p>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#timeline">Chi tiết</button>
                      </div>
                  </div>
              </div>
              <div class="col-md">
                    <div class="card back3 text-light">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img
                          src="img/crop/asianguy.png"
                          class="img-fluid"
                        />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">NGÀY THỨ HAI</h5>
                        <p class="card-text">
                          Nông nghiệp chăn nuôi cùng với động cơ khí đốt là nguồn gốc của khỉ thải nhà kính. Cùng thảo luận và 
                          tìm ra giải pháp vừa sạch vừa tăng năng suất.
                        </p>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#timeline">Chi tiết</button>
                      </div>
                  </div>
              </div>
              <div class="col-md">
                    <div class="card back2 text-light">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img
                          src="img/crop/coldvr.png"
                          class="img-fluid"
                        />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">NGÀY THỨ BA</h5>
                        <p class="card-text">
                          Tìm kiếm những giải pháp công nghệ phù hợp, chế biến nguồn nhiên liệu mới, tận dụng tiềm năng sẵn có của thiên nhiên.
                          Không chỉ sạch mà hiện đại.
                        </p>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#timeline">Chi tiết</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    
    <!--HIDDEN SECTION FOR DETAIL SCEDULE--> 
    <div class="modal fade" id="timeline" aria-hidden="true" aria-labelledby="timelineLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="timelineLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <img class="img-fluid" src="img/crop/timeline.jpg" alt="lich">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Đóng</button>
                  </div>
            </div>
        </div>
    </div>
    </div>


    <!--WHY YOU SHOULD ATTEND-->
    <section id="learn" class="p-5 back1">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="col-md">
                  <img src="img/crop/rave.png" class="img-fluid rounded" alt="some image">
              </div>
              <div class="col-md p-5">
                  <h2>HỌC HỎI KIẾN THỨC</h2>
                  <p class="lead">Tất cả những gì bạn cần biết về khoa học xanh.</p>
                  <p>
                      Bạn sẽ được tham gia các buổi nói chuyện với các chủ đề khác nhau. Thứ nhất là về môi trường, với lê dốc ngày một nhanh của biến đổi khí hậu 
                      xuất phát điểm từ ô nhiễm môi trường, đặc biệt là ô nhiễm không khí. </p>
                     <p> 
                      Từ đó tìm tới giải pháp công nghệ cho phù hợp và ứng dụng vào thực tế.
                  </p>
                  
              </div>
          </div>
      </div>
    </section>

    <section id="learn-2" class="p-5 back2 text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>NÓI CHUYỆN VỚI CHUYÊN GIA</h2>
                    <p class="lead">Những người thầy luôn đồng hành cùng các bạn.</p>
                    <p>
                        Diễn giả của hội thảo luôn là những người giỏi nhất trong lĩnh vực của họ. Bạn sẽ có cơ hội nói chuyện với những chuyên gia để tiếp thu thêm kiến thức từ họ. </p>
                    <p>
                        Mỗi một bài diễn thuyết đề là xuất phát điểm cho một dự án mà họ đang nghiên cứu, với mục tiêu giải quyết các vấn đề môi trường, đem lại cho con người một 
                        cuộc sống hiện đại mà không ô nhiễm. Nếu có cơ hội bạn có thể tham gia vào các dự án này.
                    </p>

                </div>
                <div class="col-md">
                    <img src="img/crop/handsome.png" class="img-fluid rounded" alt="some image">
                </div>
            </div>
        </div>
    </section>    

    <section id="learn-3" class="p-5 back3 text-light">
      <div class="container">
          <div class="row align-items-center justify-content-between">
              <div class="col-md">
                  <img src="img/crop/hallway.png" class="img-fluid rounded" alt="some image">
              </div>
              <div class="col-md p-5">
                  <h2>TRẢI NGHIỆM VÀ CƠ HỘI</h2>
                  <p class="lead">Học tập không chỉ đem lại kiến thức mà có cả niềm vui</p>
                <p>
                    Trong thời gian diễn ra hội thảo, các sảnh và hành lang quanh hội trường sẽ có trưng bày một số sản phẩm công nghệ mới chưa từng ra mắt,
                    người tham gia có thể thử nghiệm và đóng góp ý kiến của mình cho các nhà sáng chế để giúp họ cải thiện sản phẩm của mình. </p> 
                <p>
                    Ngoài ra, qua việc hợp tác với 
                    các nhà tài trợ sẽ mang lại cơ hội có một không hai cho các bạn. Hãy chuẩn bị sẵn tinh thần để trò chuyện với đại diẹn của các nhà tài trợ và biết đâu cơ 
                    hội việc làm sẽ đến với bạn.
                </p>
                </div>
          </div>
      </div>
    </section>



    <!--EVENT ORGANIZER-->
    <section id="oganizers" class="bg-dark p-5">
      <div class="container">
          <h2 class="text-center text-light mb-5">
              BAN TỔ CHỨC
          </h2>

          <!---There are total 12 col, we want the col to take haft the screen when smaller than medium size-->
          <div class="row g-4">
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/37.jpg" class="rounded-circle mb-3" alt="a man">
                          <h3 class="card-title mb-3">Lucas Phạm</h3>
                          <p class="card-text">Chủ tịch hội nghị</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/women/27.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Lê Diễm Nhi</h3>
                          <p class="card-text">Phó chủ tịch</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/women/50.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Nguyễn Ánh Nhi</h3>
                          <p class="card-text">Nhân sự</p>
              
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/92.jpg" class="rounded-circle mb-3" alt="a male">
                          <h3 class="card-title mb-3">Lê Hải Văn</h3>
                          <p class="card-text">Truyền thông</p>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>


    <!--SPEAKER-->
    <section id="speakers" class="p-5 back1">
      <div class="container">
        <h2 class="text-center text-dark">
            DIỄN GIẢ
        </h2>
        <p class="lead text-center text-dark mb-5">
            Bao gồm những gương mặt thuộc các công ty và trường đại học lớn trong nước và quốc tế
        </p>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row g-4">
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3" alt="a man">
                          <h3 class="card-title mb-3">Robert Smith</h3>
                          <h5>36 tuổi</h5>
                          <p class="card-text">Tám năm làm giảng viên tại trường đại học MIT Hoa Kỳ. Có bằng tiến sỹ trong các lĩnh vực khoa học khí tượng và môi trường.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/women/8.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Linda Johnson</h3>
                          <h5>29 tuổi</h5>
                          <p class="card-text">Năm năm làm việc tại tập đoàn ALH Group, một công ty chuyên tái chế tại Malaysia. Trưởng bộ phận nghiên cứ và phát triển.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/women/48.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Trần Thuỳ Linh</h3>
                          <h5>34 tuổi</h5>
                          <p class="card-text">Tiến sỹ, chín năm giảng dạy tại trường Đại học Nông nghiệp Việt Nam. Có nhiều nghiên cứu cải thiện nông nghiệp trong nước.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/20.jpg" class="rounded-circle mb-3" alt="a male">
                          <h3 class="card-title mb-3">William Baker</h3>
                          <h5>38 tuổi</h5>
                          <p class="card-text">Tốt nghiệp Đại học MIT. Có kinh nghiệm sáu năm làm việc tại công ty xe hơi Tesla, bộ phận nghiên cứU và phát triển.</p>                         
                      </div>
                  </div>
              </div>
          </div>
            </div>
            <div class="carousel-item">
              <div class="row g-4">
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/4.jpg" class="rounded-circle mb-3" alt="a man">
                          <h3 class="card-title mb-3">Lê Quang Thái</h3>
                          <h5>37 tuổi</h5>
                          <p class="card-text">Kỹ sư, tốt nghiệp Đại học Bách khoa Hà Nội. Công tác sáu năm tại nhà máy thuỷ điện Hoà Bình, hai năm tại Tập đoàn Điện lực Việt Nam.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/61.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">John Hanna</h3>
                          <H5>42 tuổi</H5>
                          <p class="card-text">Giảng viên mườI hai năm tại đại học MIT, Hoa Kì. Có nhiều công trình nghiên cứu về dầu mỏ, khí đốt và năng lượng hoá thạch.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/68.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Mark Igor</h3>
                          <h5>37 tuổi</h5>
                          <p class="card-text">Cựu sinh viên trường đại học Oxford. Tám năm làm việc tại bộ phận nghiên cứu và phát triển của công ty sản xuất chip máy tính Intel.</p>
                          
                      </div>
                  </div>
              </div>      
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/43.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Jake Nel</h3>
                          <h5>34 tuổi</h5>
                          <p class="card-text">Cựu sinh viên trường đại học Havard. Sáu năm làm việc tại bộ phận nghiên cứu và phát triển của công ty sản xuất chip máy tính AMD.</p>
                          
                      </div>
                  </div>
              </div>      
          </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>


    <!--QUESTION ACCORDION-->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">CÂU HỎI THƯỜNG GẶP</h2>
            <div class="accordion accordion-flush" id="questions">
                <!--Item 1-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-one" aria-expanded="false" aria-controls="questions-one">
                      Hội thảo sẽ diễn ra trong bao lâu?
                    </button>
                  </h2>
                  <div id="questions-one" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                    <div class="accordion-body">
                        Hội thảo của chúng tôi sẽ diễn ra trong ba ngày liên tiếp từ ngày 29/10/2021 tới ngày 31/10/2021.
                    </div>
                  </div>
                </div>
                <!--Item 2-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-two" aria-expanded="false" aria-controls="questions-two">
                      Tham gia hội thảo như thế nào?
                    </button>
                  </h2>
                  <div id="questions-two" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Để tham dự hội thảo bạn hãy nhấn nút "Tham gia" ở ngay trang web này. Điền đầy đủ thông tin vào đơn và chúng tôi sẽ liên lạc với bạn qua email.
                    </div>
                  </div>
                </div>
                <!--Item 3-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-three" aria-expanded="false" aria-controls="questions-three">
                      Những diễn giả trong hội thảo có uy tín không?
                    </button>
                  </h2>
                  <div id="questions-three" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Những diễn giả được mời diễn thuyết lần này đều là những thành viên thuộc các công ty lớn và tầm cỡ không chỉ trong nước mà quốc tế 
                        như tập đoàn Điện lực Việt Nam, Viettel, Intel, AMD, Apple... 
                    </div>
                  </div>
                </div>

                <!--Item 4-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-four" aria-expanded="false" aria-controls="questions-four">
                        Tôi không sống tại Hà Nội thì có cách nào khác để theo dõi hội thảo?
                      </button>
                    </h2>
                    <div id="questions-four" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          Hội thảo được chúng tôi livestream trên Youtube nên mọi người có thể theo dõi tại nhà của mình.
                        </div>
                    </div>
                  </div>

                <!--Item 5-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-five" aria-expanded="false" aria-controls="questions-five">
                        Tham gia hội thảo có cần đeo khẩu trang không?
                      </button>
                    </h2>
                    <div id="questions-five" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Với diễn biến khó lường của dịch bệnh COVID-19, chúng tôi kiến nghị mọi người tham dự phải đeo khẩu trang, sát khuẩn tay, và giữ khoảng cách với người khác.</div>
                    </div>
                </div>
              </div>
        </div>
    </section>


    <!--SOCIAL MEDIA LINK-->
    <section class="p-5">
      <h2 class="text-center mb-5">MẠNG XÃ HỘI</h2>
      <div class="container">
        <!--Let add the gap between the card when stack, the g stand for gap-->
        <div class="row text-center g-4"> 
            <!--we want this cards to stack at small screen-->
            <div class="col-md">
                <div class="card bg-danger text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-youtube"></i>
                        </div>
                        <h3 class="card-title mb-3"> Youtube</h3>
                        <p class="card-text">
                            Theo dõi hội thảo online tại nhà nếu như bạn không thể tham dự.
                        </p>
                        <a href="https://www.youtube.com/" class="btn btn-light text-danger">Truy cập</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-primary text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <h3 class="card-title mb-3"> Facebook</h3>
                        <p class="card-text">
                            Truy cập fanpage để cập nhật những thông tin mới nhất về hội thảo.
                        </p>
                        <a href="https://www.facebook.com/" class="btn btn-light text-primary">Truy cập</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-secondary text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-instagram"></i>
                        </div>
                        <h3 class="card-title mb-3"> Instagram</h3>
                        <p class="card-text">
                            Mọi hình ảnh về hội thảo sẽ được chúng tôi cập nhật thường xuyên.
                        </p>
                        <a href="https://www.instagram.com" class="btn btn-light text-secondary">Truy cập</a>
                    </div>
                </div>
            </div>
        </div>
      </div>      
    </section>


    <!--Copy cai dia chi và chào mời ở bên trên xuống dưới chỗ này-->
    <section class="back1 text-dark p-5">
        <div class="container">
          <div class="d-flex justify-content-center">
            <div class="text-center">
              <h4 class="mb-2">29/10/2021 - 31/10/2021</h4>
              <h4 class="mb-2">09:00 - 15:00</h4>
              <h4 class="mb-2">Tầng 2 toà nhà Keangnam, Phạm Hùng, Nam Từ Liêm, Hà Nội</h4>
              <h4 class="mb-2">Miễn phí tham dự</h4>
            </div>
          </div>
          <div class="mt-4 d-flex justify-content-center">
            <button class="btn btn2 btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#enroll">Tham Gia</button>
          </div>
        </div>
      </section>


    <!--SPONSERS-->
    <section class="p-5 back2">
      <div class="container">
        <h2 class="text-center text-light mb-5">
          Nhà tài trợ
        </h2>
        <div id="sponser-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row g-4">
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/amd.png" class="card-img-top mb-3" alt="logo">
                          <h3 class="card-title mb-3">AMD</h3>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/apple.png" class="card-img-top mb-3" alt="a female">
                          <h3 class="card-title mb-3">Apple</h3>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/evn.png" class="card-img-top mb-3" alt="a female">
                          <h3 class="card-title mb-3">EVN</h3>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/fpt.png" class="card-img-top mb-3" alt="a male">
                          <h3 class="card-title mb-3">FPT</h3>
                      </div>
                  </div>
              </div>
          </div>
            </div>
            <div class="carousel-item">
              <div class="row g-4">
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/intel.png" class="card-img-top mb-3" alt="a man">
                          <h3 class="card-title mb-3">Intel</h3>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/microsoft.png" class="card-img-top mb-3" alt="a female">
                          <h3 class="card-title mb-3">Microsoft</h3>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/nvidia.png" class="card-img-top mb-3" alt="a female">
                          <h3 class="card-title mb-3">NVIDIA</h3>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/samsung.png" class="card-img-top mb-3" alt="a male">
                          <h3 class="card-title mb-3">Samsung</h3>
                      </div>
                  </div>
              </div>
          </div>
            </div>
            <div class="carousel-item">
              <div class="row g-4">
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/tesla.png" class="card-img-top mb-3" alt="a man">
                          <h3 class="card-title mb-3">Tesla</h3>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/viettel.png" class="card-img-top mb-3" alt="a female">
                          <h3 class="card-title mb-3">Viettel</h3>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/vingroup.png" class="card-img-top mb-3" alt="a female">
                          <h3 class="card-title mb-3">Vingroup</h3>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="img/logos/vnpt.png" class="card-img-top mb-3" alt="a male">
                          <h3 class="card-title mb-3">VNPT</h3>
                      </div>
                  </div>
              </div>
          </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#sponser-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#sponser-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!--CONTACT AND MAP-->
    <section id="contact" class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">
                        Liên hệ chúng tôi
                    </h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Địa chỉ:</span> Tầng 2 toà nhà Keangnam, 72 đường Phạm Hùng, Nam Từ Liêm, Hà Nội                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Số điện thoại:</span> 0122 446 1380
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Email:</span> greenteck.convention@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.1992456808757!2d105.78308475794013!3d21.016735600279958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab54e29650c5%3A0x453b5c2a98dc5e98!2zS2VhbmduYW0gSGFub2kgTGFuZG1hcmsgVG93ZXIsIE3hu4UgVHLDrCwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1635549369766!5m2!1svi!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2021 second project Bootstrap by Pham Tien Chuong</p>

            <a href="" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>  
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.5.1/mapbox-gl.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <!--Check the sesston-->
    <script>
        $(document).ready(function(){
        <?php
            if(isset($_SESSION['signup_success']))
            {
                echo 'alert("Hẹn gặp bạn tại GreenTeck!");';
                unset($_SESSION['signup_success']);
            }
            if(isset($_SESSION['signup_fail']))
            {
                echo 'alert("Đăng ký tham gia thất bại!");';
                unset($_SESSION['signup_fail']);
            }
        ?>
        });
    </script>
  

</body>
</html>
