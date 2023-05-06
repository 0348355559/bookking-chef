@extends('layouts.app')

@section('content')
<div>
    <section id="page-header">
        <h2>StayHome</h2>
        <p>Save more with coupons & up to <span>30% off!</span></p>
        
    </section>
    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.html'">
                <img src="{{ Vite::asset('resources/images/IMG/img1.webp') }}" alt="">
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
        </div>
    </section>
    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
    </section>
    <section id="newsletter" class="section-p1 section-m1" >
        <div class="newstext">
            <h3>asdadadas</h3>
            <p>hueanhad <span>asddyay</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="email?">
            <button class="nomal">sign up</button>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img  class="logo" width="100px" src="{{ Vite::asset('resources/images/IMG/Bập Bùng Bếp (1).png"') }}" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 23 Điện Biên Phủ, Thành Phố Đà Nẵng</p>
            <p><strong>Phone:</strong>+84 0917408249</p>
            <p><strong>Hours:</strong> 8:00 - 20:00, All Day</p>
            <div class="follow">
                <h4>follow us</h4>
                <div class="icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-tiktok"></i>
                        <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">About us</a>
            <a href="#">About us</a>
           
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">About us</a>
            <a href="#">About us</a>
            <a href="#">About us</a>
           
        </div>
        <div class="col">
            <h4>Payment</h4>
            <div class="pay">
                <img width="60px" src="{{ Vite::asset('resources/images/IMG/pament1.jpg') }}" alt="">
                <img width="60px" src="{{ Vite::asset('resources/images/IMG/bayment2.jpg') }}" alt="">
                <img width="60px" src="{{ Vite::asset('resources/images/IMG/zalopay.jpg') }}" alt="">
            </div>
            
        </div>
        <div class="copy">
            <p>@2023, HTML CSS Ecommerce Template</p>
            
        </div>
    </footer>
@endsection