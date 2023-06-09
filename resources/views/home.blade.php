@extends('layouts.app')

@section('content')
<div>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                noi dung trang chu
                </div>
            </div>
        </div>
    </div> -->


    <section id="hero">
       
    </section>
    <section id="product1" class="section-p1">
        <h2>Chef Service</h2>
        <p>Select the desired chef</p>
        <div class="pro-container">
            <div class="pro">
                <img src= "{{ Vite::asset('resources/images/IMG/img1.webp') }}" alt="">
                <div class="des">
                    <span>Đầu Bếp 2 sao</span>
                    <h5> Mai Phương</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>   
                                 
                </div>
               <a href="#"><i class="fa-solid fa-bag-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="{{ Vite::asset('resources/images/IMG/img2.jpg') }}" alt="">
                <div class="des">
                    <span>Đầu bếp 4 sao</span>
                    <h5>Jacky Nguyễn</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$200</h4>
                </div>
                <a href="#"><i class="fa-solid fa-bag-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="{{ Vite::asset('resources/images/IMG/img3.jpg') }}" alt="">
                <div class="des">
                    <span>Đầu bếp 1 sao</span>
                    <h5>Odin</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href="#"><i class="fa-solid fa-bag-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="{{ Vite::asset('resources/images/IMG/img4.png') }}" alt="">
                <div class="des">
                    <span>Đầu bếp 5 sao</span>
                    <h5>Tần Nguyễn</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$230</h4>
                </div>
                <a href="#"><i class="fa-solid fa-bag-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="{{ Vite::asset('resources/images/IMG/img5.jpg') }}" alt="">
                <div class="des">
                    <span>Đầu bếp 3 sao</span>
                    <h5>Hương Trần</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$150</h4>
                </div>
                <a href="#"><i class="fa-solid fa-bag-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="{{ Vite::asset('resources/images/IMG/img6.jpg') }}" alt="">
                <div class="des">
                    <span>Đầu bếp 4 sao</span>
                    <h5>Tuấn Hải, Phạm</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
        
                    </div>
                    <h4>$170</h4>
                </div>
                <a href="#"><i class="fa-solid fa-bag-shopping cart"></i></a>
            </div>
            
        </div>
    </section>
    <section id="banner" class="section-m1">
        <h4>Featured News</h4>
       
      
    </section>
    
    <section id="sm-banner" class="section-p1">
       
        <div class="banner-box">
            <button class="white">lear more</button>
        </div>
         <div class="banner-box banner-box2">
  
            <button class="white">lear more</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner-box">       
        </div>
         <div class="banner-box banner-box2">                 
        </div>
         <div class="banner-box banner-box3">     
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1" >
        <div class="newstext">
            <!-- <h3>asdadadas</h3>
            <p>hueanhad <span>asddyay</span></p> -->
        </div>
        <div class="form">
            <input type="text" placeholder="email?">
            <button class="nomal">sign up</button>
        </div>
    </section>
</div>
@endsection
