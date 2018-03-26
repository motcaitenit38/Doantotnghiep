@extends('master_layout.home')
@section('noidung')
<body>
    <div class="wrapper">
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav" style="position: fixed;">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                <div class="navbar-header"> <a class="navbar-brand" href="/"><img src="asset/img/logo.png" class="logo logo-display" alt=""><img src="asset/img/logo-white.png" class="logo logo-scrolled" alt=""></a> </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        
                        
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#signup" ><i class="fa fa-sign-in"></i>Đăng ký/Đăng nhập</a></li>

                        <li class="left-br"><a href="#" class="signin">Nhà tuyển dụng</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="clearfix"></div>
        <div class="banner">
            <div class="container">
                <div class="banner-caption">
                    <div class="col-md-12 col-sm-12 banner-text">
                        <h1>7,000+ công việc đang chờ bạn</h1>
                        <form class="form-horizontal">
                            <div class="col-md-4 no-padd">
                                <div class="input-group">
                                    <input type="text" class="form-control right-bor" placeholder="Tên công việc"> </div>
                            </div>
                            <div class="col-md-3 no-padd">
                                <div class="input-group">
                                    <input type="text" class="form-control right-bor" placeholder="Lĩnh vực.."> </div>
                            </div>
                            <div class="col-md-3 no-padd">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option>Địa điểm</option>
                                        <option>Hà Nội</option>
                                        <option>Hà Tĩnh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 no-padd">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="company-brand">
                <div class="container">
                    <div id="company-brands" class="owl-carousel">
                        <div class="brand-img"><img src="asset/img/microsoft-home.png" class="img-responsive" alt="" /></div>
                        <div class="brand-img"><img src="asset/img/img-home.png" class="img-responsive" alt="" /></div>
                        <div class="brand-img"><img src="asset/img/mothercare-home.png" class="img-responsive" alt="" /></div>
                        <div class="brand-img"><img src="asset/img/paypal-home.png" class="img-responsive" alt="" /></div>
                        <div class="brand-img"><img src="asset/img/serv-home.png" class="img-responsive" alt="" /></div>
                        <div class="brand-img"><img src="asset/img/xerox-home.png" class="img-responsive" alt="" /></div>
                        <div class="brand-img"><img src="asset/img/yahoo-home.png" class="img-responsive" alt="" /></div>
                        <div class="brand-img"><img src="asset/img/mothercare-home.png" class="img-responsive" alt="" /></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
    </div>
@endsection