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
                      <a href="#summarize" class="nav-link">M???c ti??u</a>
                    </li>
                    <li class="nav-item">
                        <a href="#schedule" class="nav-link">L???ch tr??nh</a>
                    </li>
                    <li class="nav-item">
                        <a href="#learn" class="nav-link">??i???m nh???n</a>
                    </li>
                    <li class="nav-item">
                        <a href="#speakers" class="nav-link">Di???n gi???</a>
                    </li>
                  <li class="nav-item">
                      <a href="#questions" class="nav-link">C??u h???i</a>
                  </li>
                  <li class="nav-item">
                    <a href="#contact" class="nav-link">Li??n h???</a>
                </li>
                <li class="nav-item">
                    <a href="login/" class="nav-link">????ng nh???p</a>
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
                    <h2 class="my-4 h3">H???I TH???O <span class="text-success">C??NG NGH???</span> V?? M???T CU???C S???NG <span class="text-success">XANH</span></h2>
                </div>
                <p class="m-4 "> 
                  GreenTeck l?? h???i th???o th?????ng ni??n v??? ch??? ????? m??i tr?????ng v?? c??ng ngh???. ?????i m???t v???i s??? n??ng l??n to??n c???u, con ng?????i 
                  c???n c?? nh???ng gi???i ph??p ????? h???n ch??? v?? c???i thi???n m??i tr?????ng m?? v???n duy tr?? ???????c cu???c s???ng hi???n ?????i. C??ng tham gia v?? h???c h???i qua nh???ng b??i di???n thuy???t v??? m??i tr?????ng v?? c??ng ngh???.
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
            <h4 class="mb-2">T???ng 2 to?? nh?? Keangnam, Ph???m H??ng, Nam T??? Li??m, H?? N???i</h4>
            <h4 class="mb-2">Mi???n ph?? tham d???</h4>
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
              <h5 class="modal-title" id="enrollLabel">????ng k?? tham gia h???i th???o</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead">??i???n v??o ????n v?? ch??ng t??i s??? li??n l???c v???i b???n</p>
                <form method="post" action="signup.php">
                    <div class="mb-3">
                        <label for="name" class="col-form-label">H??? v?? t??n:</label>
                        <input type="text" class="form-control" name="name_input" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="col-form-label">Tu???i:</label>
                        <input type="number" class="form-control" name="age_input" id="age">
                    </div>
                    <div class="mb-3">
                        <label for="national" class="col-form-label">Qu???c t???ch:</label>
                        <input type="text" class="form-control" name="national_input" id="national">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="col-form-label">Th??nh ph???:</label>
                        <input type="text" class="form-control" name="city_input" id="city">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email_input" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="col-form-label">S??? ??i???n tho???i:</label>
                        <input type="text" class="form-control" name="phone_input" id="phone">
                    </div>
                    <div class="py-4">
                        <input type="submit" class="btn btn-outline-primary" name="submit" value="????ng k??">
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
                  <h2>BI???N ?????I KH?? H???U</h2>
                  <p class="lead">M???t v???n ????? n??ng ??ang c???n ???????c l??m m??t</p>
                    <p>
                        Bi???n ?????i kh?? h???u l?? s??? thay ?????i c???a kh?? h???u v?? c???a nh???ng th??nh ph???n li??n quan 
                        g???m ?????i d????ng, ?????t ??ai, b??? m???t Tr??i ?????t, v?? b??ng quy???n nh?? t??ng nhi???t ?????, b??ng tan, v?? n?????c bi???n d??ng. 
                    </p>
                    <p>
                        Tr?????c ????y bi???n ?????i kh?? h???u di???n ra trong m???t kho???ng th???i gian d??i do t??c ?????ng c???a c??c ??i???u ki???n t??? nhi??n, 
                        tuy nhi??n th???i gian g???n ????y, bi???n ?????i kh?? h???u x???y ra do t??c ?????ng c???a c??c ho???t ?????ng c???a con ng?????i nh?? 
                        vi???c s??? d???ng nhi??n li???u h??a th???ch trong giao th??ng v???n t???i v?? s???n xu???t c??ng nghi???p, th???i ra m??i tr?????ng kh?? nh?? k??nh.
                    </p>                  
              </div>
          </div>
      </div>
    </section>

    <section id="summarize-2" class="p-5 bg-dark text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>C??NG T??M KI???M GI???I PH??P</h2>
                    <p class="lead">Gi???i ph??p t???i ??u v?? hi???u qu??? nh???t ?????i v???i v???n ????? m??i tr?????ng ch??nh l?? gi???i ph??p c??ng ngh???</p>
                    <p>
                        T???i h???i th???o, ch??ng ta s??? c??ng b??n lu???n v??? nh???ng v???n ????? xoay quanh ch??? ????? n??y v?? c??ng nhau ????a ra gi???i ph??p.
                    </p>
                    <p>
                        Ch??ng ta s??? ???????c t??m hi???u v??? n??ng l?????ng s???ch, h???n ch??? l?????ng kh?? th???i nh?? k??nh b???ng c??ch l??m cho xe ??i???n tr??? n??n
                        th??ng d???ng, hay nh???ng v???n ????? t?????ng ch???ng nh??? nh??ng v?? c??ng quan tr???ng ???? l?? t??i ch??? r??c th???i v?? r???t nhi???u ki???n th???c 
                        m???i ch??? d??nh cho nh???ng ng?????i tham d???. 
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
                        <h5 class="card-title">NG??Y TH??? NH???T</h5>
                        <p class="card-text">
                            N??i chuy???n v??? v???n ????? ?? nhi???m m??i tr?????ng v?? bi???n ?????i kh?? h???u, ???nh h?????ng c???a ch??ng t???i ?????i s???ng kinh t???,
                             c??ch th???c t??i ch??? r??c th???i hi???u qu??? nh???t.
                        </p>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#timeline">Chi ti???t</button>
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
                        <h5 class="card-title">NG??Y TH??? HAI</h5>
                        <p class="card-text">
                          N??ng nghi???p ch??n nu??i c??ng v???i ?????ng c?? kh?? ?????t l?? ngu???n g???c c???a kh??? th???i nh?? k??nh. C??ng th???o lu???n v?? 
                          t??m ra gi???i ph??p v???a s???ch v???a t??ng n??ng su???t.
                        </p>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#timeline">Chi ti???t</button>
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
                        <h5 class="card-title">NG??Y TH??? BA</h5>
                        <p class="card-text">
                          T??m ki???m nh???ng gi???i ph??p c??ng ngh??? ph?? h???p, ch??? bi???n ngu???n nhi??n li???u m???i, t???n d???ng ti???m n??ng s???n c?? c???a thi??n nhi??n.
                          Kh??ng ch??? s???ch m?? hi???n ?????i.
                        </p>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#timeline">Chi ti???t</button>
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
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">????ng</button>
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
                  <h2>H???C H???I KI???N TH???C</h2>
                  <p class="lead">T???t c??? nh???ng g?? b???n c???n bi???t v??? khoa h???c xanh.</p>
                  <p>
                      B???n s??? ???????c tham gia c??c bu???i n??i chuy???n v???i c??c ch??? ????? kh??c nhau. Th??? nh???t l?? v??? m??i tr?????ng, v???i l?? d???c ng??y m???t nhanh c???a bi???n ?????i kh?? h???u 
                      xu???t ph??t ??i???m t??? ?? nhi???m m??i tr?????ng, ?????c bi???t l?? ?? nhi???m kh??ng kh??. </p>
                     <p> 
                      T??? ???? t??m t???i gi???i ph??p c??ng ngh??? cho ph?? h???p v?? ???ng d???ng v??o th???c t???.
                  </p>
                  
              </div>
          </div>
      </div>
    </section>

    <section id="learn-2" class="p-5 back2 text-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>N??I CHUY???N V???I CHUY??N GIA</h2>
                    <p class="lead">Nh???ng ng?????i th???y lu??n ?????ng h??nh c??ng c??c b???n.</p>
                    <p>
                        Di???n gi??? c???a h???i th???o lu??n l?? nh???ng ng?????i gi???i nh???t trong l??nh v???c c???a h???. B???n s??? c?? c?? h???i n??i chuy???n v???i nh???ng chuy??n gia ????? ti???p thu th??m ki???n th???c t??? h???. </p>
                    <p>
                        M???i m???t b??i di???n thuy???t ????? l?? xu???t ph??t ??i???m cho m???t d??? ??n m?? h??? ??ang nghi??n c???u, v???i m???c ti??u gi???i quy???t c??c v???n ????? m??i tr?????ng, ??em l???i cho con ng?????i m???t 
                        cu???c s???ng hi???n ?????i m?? kh??ng ?? nhi???m. N???u c?? c?? h???i b???n c?? th??? tham gia v??o c??c d??? ??n n??y.
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
                  <h2>TR???I NGHI???M V?? C?? H???I</h2>
                  <p class="lead">H???c t???p kh??ng ch??? ??em l???i ki???n th???c m?? c?? c??? ni???m vui</p>
                <p>
                    Trong th???i gian di???n ra h???i th???o, c??c s???nh v?? h??nh lang quanh h???i tr?????ng s??? c?? tr??ng b??y m???t s??? s???n ph???m c??ng ngh??? m???i ch??a t???ng ra m???t,
                    ng?????i tham gia c?? th??? th??? nghi???m v?? ????ng g??p ?? ki???n c???a m??nh cho c??c nh?? s??ng ch??? ????? gi??p h??? c???i thi???n s???n ph???m c???a m??nh. </p> 
                <p>
                    Ngo??i ra, qua vi???c h???p t??c v???i 
                    c??c nh?? t??i tr??? s??? mang l???i c?? h???i c?? m???t kh??ng hai cho c??c b???n. H??y chu???n b??? s???n tinh th???n ????? tr?? chuy???n v???i ?????i di???n c???a c??c nh?? t??i tr??? v?? bi???t ????u c?? 
                    h???i vi???c l??m s??? ?????n v???i b???n.
                </p>
                </div>
          </div>
      </div>
    </section>



    <!--EVENT ORGANIZER-->
    <section id="oganizers" class="bg-dark p-5">
      <div class="container">
          <h2 class="text-center text-light mb-5">
              BAN T??? CH???C
          </h2>

          <!---There are total 12 col, we want the col to take haft the screen when smaller than medium size-->
          <div class="row g-4">
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/37.jpg" class="rounded-circle mb-3" alt="a man">
                          <h3 class="card-title mb-3">Lucas Ph???m</h3>
                          <p class="card-text">Ch??? t???ch h???i ngh???</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/women/27.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">L?? Di???m Nhi</h3>
                          <p class="card-text">Ph?? ch??? t???ch</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/women/50.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Nguy???n ??nh Nhi</h3>
                          <p class="card-text">Nh??n s???</p>
              
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/92.jpg" class="rounded-circle mb-3" alt="a male">
                          <h3 class="card-title mb-3">L?? H???i V??n</h3>
                          <p class="card-text">Truy???n th??ng</p>

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
            DI???N GI???
        </h2>
        <p class="lead text-center text-dark mb-5">
            Bao g???m nh???ng g????ng m???t thu???c c??c c??ng ty v?? tr?????ng ?????i h???c l???n trong n?????c v?? qu???c t???
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
                          <h5>36 tu???i</h5>
                          <p class="card-text">T??m n??m l??m gi???ng vi??n t???i tr?????ng ?????i h???c MIT Hoa K???. C?? b???ng ti???n s??? trong c??c l??nh v???c khoa h???c kh?? t?????ng v?? m??i tr?????ng.</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/women/8.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Linda Johnson</h3>
                          <h5>29 tu???i</h5>
                          <p class="card-text">N??m n??m l??m vi???c t???i t???p ??o??n ALH Group, m???t c??ng ty chuy??n t??i ch??? t???i Malaysia. Tr?????ng b??? ph???n nghi??n c??? v?? ph??t tri???n.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/women/48.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Tr???n Thu??? Linh</h3>
                          <h5>34 tu???i</h5>
                          <p class="card-text">Ti???n s???, ch??n n??m gi???ng d???y t???i tr?????ng ?????i h???c N??ng nghi???p Vi???t Nam. C?? nhi???u nghi??n c???u c???i thi???n n??ng nghi???p trong n?????c.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/20.jpg" class="rounded-circle mb-3" alt="a male">
                          <h3 class="card-title mb-3">William Baker</h3>
                          <h5>38 tu???i</h5>
                          <p class="card-text">T???t nghi???p ?????i h???c MIT. C?? kinh nghi???m s??u n??m l??m vi???c t???i c??ng ty xe h??i Tesla, b??? ph???n nghi??n c???U v?? ph??t tri???n.</p>                         
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
                          <h3 class="card-title mb-3">L?? Quang Th??i</h3>
                          <h5>37 tu???i</h5>
                          <p class="card-text">K??? s??, t???t nghi???p ?????i h???c B??ch khoa H?? N???i. C??ng t??c s??u n??m t???i nh?? m??y thu??? ??i???n Ho?? B??nh, hai n??m t???i T???p ??o??n ??i???n l???c Vi???t Nam.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/61.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">John Hanna</h3>
                          <H5>42 tu???i</H5>
                          <p class="card-text">Gi???ng vi??n m?????I hai n??m t???i ?????i h???c MIT, Hoa K??. C?? nhi???u c??ng tr??nh nghi??n c???u v??? d???u m???, kh?? ?????t v?? n??ng l?????ng ho?? th???ch.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/68.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Mark Igor</h3>
                          <h5>37 tu???i</h5>
                          <p class="card-text">C???u sinh vi??n tr?????ng ?????i h???c Oxford. T??m n??m l??m vi???c t???i b??? ph???n nghi??n c???u v?? ph??t tri???n c???a c??ng ty s???n xu???t chip m??y t??nh Intel.</p>
                          
                      </div>
                  </div>
              </div>      
              <div class="col-md-6 col-lg-3">
                  <div class="card bg-light">
                      <div class="card-body text-center">
                          <img src="https://randomuser.me/api/portraits/men/43.jpg" class="rounded-circle mb-3" alt="a female">
                          <h3 class="card-title mb-3">Jake Nel</h3>
                          <h5>34 tu???i</h5>
                          <p class="card-text">C???u sinh vi??n tr?????ng ?????i h???c Havard. S??u n??m l??m vi???c t???i b??? ph???n nghi??n c???u v?? ph??t tri???n c???a c??ng ty s???n xu???t chip m??y t??nh AMD.</p>
                          
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
            <h2 class="text-center mb-4">C??U H???I TH?????NG G???P</h2>
            <div class="accordion accordion-flush" id="questions">
                <!--Item 1-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-one" aria-expanded="false" aria-controls="questions-one">
                      H???i th???o s??? di???n ra trong bao l??u?
                    </button>
                  </h2>
                  <div id="questions-one" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                    <div class="accordion-body">
                        H???i th???o c???a ch??ng t??i s??? di???n ra trong ba ng??y li??n ti???p t??? ng??y 29/10/2021 t???i ng??y 31/10/2021.
                    </div>
                  </div>
                </div>
                <!--Item 2-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-two" aria-expanded="false" aria-controls="questions-two">
                      Tham gia h???i th???o nh?? th??? n??o?
                    </button>
                  </h2>
                  <div id="questions-two" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        ????? tham d??? h???i th???o b???n h??y nh???n n??t "Tham gia" ??? ngay trang web n??y. ??i???n ?????y ????? th??ng tin v??o ????n v?? ch??ng t??i s??? li??n l???c v???i b???n qua email.
                    </div>
                  </div>
                </div>
                <!--Item 3-->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-three" aria-expanded="false" aria-controls="questions-three">
                      Nh???ng di???n gi??? trong h???i th???o c?? uy t??n kh??ng?
                    </button>
                  </h2>
                  <div id="questions-three" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Nh???ng di???n gi??? ???????c m???i di???n thuy???t l???n n??y ?????u l?? nh???ng th??nh vi??n thu???c c??c c??ng ty l???n v?? t???m c??? kh??ng ch??? trong n?????c m?? qu???c t??? 
                        nh?? t???p ??o??n ??i???n l???c Vi???t Nam, Viettel, Intel, AMD, Apple... 
                    </div>
                  </div>
                </div>

                <!--Item 4-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-four" aria-expanded="false" aria-controls="questions-four">
                        T??i kh??ng s???ng t???i H?? N???i th?? c?? c??ch n??o kh??c ????? theo d??i h???i th???o?
                      </button>
                    </h2>
                    <div id="questions-four" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                          H???i th???o ???????c ch??ng t??i livestream tr??n Youtube n??n m???i ng?????i c?? th??? theo d??i t???i nh?? c???a m??nh.
                        </div>
                    </div>
                  </div>

                <!--Item 5-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#questions-five" aria-expanded="false" aria-controls="questions-five">
                        Tham gia h???i th???o c?? c???n ??eo kh???u trang kh??ng?
                      </button>
                    </h2>
                    <div id="questions-five" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">V???i di???n bi???n kh?? l?????ng c???a d???ch b???nh COVID-19, ch??ng t??i ki???n ngh??? m???i ng?????i tham d??? ph???i ??eo kh???u trang, s??t khu???n tay, v?? gi??? kho???ng c??ch v???i ng?????i kh??c.</div>
                    </div>
                </div>
              </div>
        </div>
    </section>


    <!--SOCIAL MEDIA LINK-->
    <section class="p-5">
      <h2 class="text-center mb-5">M???NG X?? H???I</h2>
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
                            Theo d??i h???i th???o online t???i nh?? n???u nh?? b???n kh??ng th??? tham d???.
                        </p>
                        <a href="https://www.youtube.com/" class="btn btn-light text-danger">Truy c???p</a>
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
                            Truy c???p fanpage ????? c???p nh???t nh???ng th??ng tin m???i nh???t v??? h???i th???o.
                        </p>
                        <a href="https://www.facebook.com/" class="btn btn-light text-primary">Truy c???p</a>
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
                            M???i h??nh ???nh v??? h???i th???o s??? ???????c ch??ng t??i c???p nh???t th?????ng xuy??n.
                        </p>
                        <a href="https://www.instagram.com" class="btn btn-light text-secondary">Truy c???p</a>
                    </div>
                </div>
            </div>
        </div>
      </div>      
    </section>


    <!--Copy cai dia chi v?? ch??o m???i ??? b??n tr??n xu???ng d?????i ch??? n??y-->
    <section class="back1 text-dark p-5">
        <div class="container">
          <div class="d-flex justify-content-center">
            <div class="text-center">
              <h4 class="mb-2">29/10/2021 - 31/10/2021</h4>
              <h4 class="mb-2">09:00 - 15:00</h4>
              <h4 class="mb-2">T???ng 2 to?? nh?? Keangnam, Ph???m H??ng, Nam T??? Li??m, H?? N???i</h4>
              <h4 class="mb-2">Mi???n ph?? tham d???</h4>
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
          Nh?? t??i tr???
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
                        Li??n h??? ch??ng t??i
                    </h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">?????a ch???:</span> T???ng 2 to?? nh?? Keangnam, 72 ???????ng Ph???m H??ng, Nam T??? Li??m, H?? N???i                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">S??? ??i???n tho???i:</span> 0122 446 1380
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
                echo 'alert("H???n g???p b???n t???i GreenTeck!");';
                unset($_SESSION['signup_success']);
            }
            if(isset($_SESSION['signup_fail']))
            {
                echo 'alert("????ng k?? tham gia th???t b???i!");';
                unset($_SESSION['signup_fail']);
            }
        ?>
        });
    </script>
  

</body>
</html>
