<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>3TDL Store</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

    </head>
	<body>
		<!-- HEADER -->
		<header>

			<!-- MAIN HEADER -->
			<div id="header">
				<div class="container">			
					<div class="row">		
                        	
						<div class="col-md-2">
							<div class="header-logo">
								<a href="#" class="logo">
                                    <img src="{{asset('images/logo.png')}}" alt="">
									
								</a>
							</div>
						</div>
					
	
						<div class="col-md-5">

                             <div class="header-ctn">
                                
                               <div class="bg-nav">
								    <a href="#">
									<i class="fa-solid fa-bars"></i>
									<span>Danh mục</span>								
								    </a>
						       </div>	  
                          
                                <div >
                                   					
                                   	 <div class="header-search">
								<form>	
									 <input class="input"  type="text" id="search" name="search" placeholder="Tìm kiếm...">		 
									<button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
								</form>
							   </div>
                                </div>

                               
												
						    </div>
                        </div>	
					
						<div class="col-5 ">
							<div class="header-ctn">
								
								<div class="bg-nav-hover">
                                    <a href="#">
										<i class="fa-solid fa-truck-fast"></i>
										<span>Tra cứu mua hàng</span>
									
									</a>
								
                               </div>

                                <div class="bg-nav-hover">
									<a href="#">
                                         <i class="fa fa-shopping-cart"></i>
										
										<span>Giỏ hàng của tôi</span>
										<div class="qty">2</div>
									</a>
								</div>

								<div class="bg-nav-hover">
									<a href="#">
                                  <i class="fa-solid fa-heart"></i>
										<span>Sản phẩm yêu thích</span>
									</a>
								</div>

                                <div class="bg-nav ">
									<a href="#">
                                   <i class="fa-solid fa-circle-user"></i>
										<span>Đăng nhập</span>
										
									</a>
								</div>
								
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
							
							</div>
						</div>
					
					</div>
					
				</div>
				
			</div>
			
		</header>
		
        <script src="https://kit.fontawesome.com/51a2bee5af.js" crossorigin="anonymous"></script>
=======
<!-- HEADER -->
@php
    use App\Constants\UserType;
@endphp
<header>


    <!-- MAIN HEADER -->
    <div id="header">
        <div class="container">
            <div class="row">

                <div class="col-md-2">
                    <div class="header-logo">
                        <a href="{{ route('3TDL Store') }}" class="logo">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>


                <div class="col-md-5">

                    <div class="header-ctn">

                        <div class="bg-nav-hover">
                            <a href="{{ route('allOrder') }}">
                                <i class="fa-regular fa-chart-bar"></i>
                                <span>Đơn hàng của tôi</span>
                            </a>
                        </div>



                        <div>
                            <div class="header-search">
                                <form action="{{ route('search') }}" method="GET">
                                    <input class="input" type="text" id="search-input" name="keyword"
                                        placeholder="Tìm kiếm...">
                                    <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="col-5 ">
                    <div class="header-ctn">

                        <div class="bg-nav-hover">
                            <a href="{{ route('orderLookup') }}">
                                <i class="fa-solid fa-truck-fast"></i>
                                <span>Tra cứu mua hàng</span>

                            </a>

                        </div>

                        <div class="bg-nav-hover">
                            <a href="{{ route('productCart') }}">
                                <i class="fa fa-shopping-cart"></i>

                                <span>Giỏ hàng của tôi</span>
                                <div class="qty">2</div>
                            </a>
                        </div>

                        <div class="bg-nav-hover">
                            <a href="{{ route('productFavorite') }}">
                                <i class="fa-solid fa-heart"></i>
                                <span>Sản phẩm yêu thích</span>
                            </a>
                        </div>

                        @if (auth()->check() )
                            <div class="bg-nav ">
                                <a href="{{ route('signout') }}">
                                    <i class="fa-solid fa-user"></i>
                                    <span>{{ auth()->user()->fullName }}</span>
                                </a>
                            </div>
        
                        @else
                            <div class="bg-nav ">
                                <a href="{{ route('loginUser') }}">
                                    <i class="fa-solid fa-user"></i>
                                    <span>Đăng nhập</span>
                                </a>
                            </div>
                        @endif


                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</header>
>>>>>>> nguyenPhuongTri
