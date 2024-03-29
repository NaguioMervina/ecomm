@extends('layouts.layout')

{{--TRANSITIONS--}}
@section('header-feature')
<ul id="adaptive" class="cs-hidden">
    <li class="item-a">
        
<div class="full-slider-box f-slide-1">
    
    <div class="slider-text">
        <div class="f-slider-text">
        <span>Limited Offer</span>
        <strong>40% off <br> with<font> Promo Code</font></strong>
        <a href="" class="f-slider-btn">Shop Now</a>
    </div>
    </div>
</div>
    </li>

    <li class="item-a">
        
        <div class="full-slider-box f-slide-2">
            
            <div class="slider-text">
                <div class="f-slider-text">
                <span>Limited Offer</span>
                <strong>40% off <br> with<font> Promo Code</font></strong>
                <a href="" class="f-slider-btn">Shop Now</a>
            </div>
            </div>
        </div>
            </li>


            <li class="item-a">
        
                <div class="full-slider-box f-slide-3">
                    
                    <div class="slider-text">
                        <div class="f-slider-text">
                        <span>Limited Offer</span>
                        <strong>40% off <br> with<font> Promo Code</font></strong>
                        <a href="" class="f-slider-btn">Shop Now</a>
                    </div>
                    </div>
                </div>
                    </li> 
     </ul>
@endsection




@section('content')
<div class="search-bar">
    <div class="search-input">
        <input type="text" placeholder="Search For Merch..."/>
        <a href="javascript:void(0);" class="search-cancel">
            <i class='bx bxs-x-circle'></i>
        </a>
    </div>
</div>

       
        
             <div class="featured-heading">
                 <h2>Featured Categories</h2>
             </div>

             <ul id="autoWidth" class="cs-hidden">
                <li class="item">
             <div class="feature-box">
                <a href="#">
                    <img src="./images/Poster/1.jpg" />
                </a>
            </div>

                <span>Poster</span>
                </li>

                <li class="item">
                    <div class="feature-box">
                       <a href="#">
                           <img src="./images/jacket/3.jpg" />
                       </a>
                   </div>
   
                       <span>Jacket</span>
                       </li>

                       <li class="item">
                        <div class="feature-box">
                           <a href="#">
                               <img src="./images/sticker/1.jpg" />
                           </a>
                       </div>
       
                           <span>Sticker/Keychain</span>
                           </li>

                           <li class="item">
                            <div class="feature-box">
                               <a href="#">
                                   <img src="./images/tshirt/1.jpg" />
                               </a>
                           </div>
           
                               <span>Tshirt</span>
                               </li>
                        </ul>

                        <section class="new-arrival">
                            <div class="arrival-heading">
                                <strong>New Arrival</strong>
                                <p>We Provide You New Merch Items</p>
                            </div>
                        
                            <div class="product-container">
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/jacket/4.jfif" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">DemonSlayer Hoodie</a>
                                        <span class="p-price">₱560.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/1.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Attack on titan logoShirts Cotton</a>
                                        <span class="p-price">₱159.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/2.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Hunter x Hunter LongSleeve </a>
                                        <span class="p-price">₱480.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/3.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Attack on titan Coprs Hoodie</a>
                                        <span class="p-price">₱560.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/4.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">DarkTshirt </a>
                                        <span class="p-price">₱560.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/5.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Anime Kawaii </a>
                                        <span class="p-price">₱369.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/6.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Survey Corps Cape</a>
                                        <span class="p-price">₱499.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/7.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Haikyuu Tshirt</a>
                                        <span class="p-price">₱368.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/8.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Attack on Titan Necklace</a>
                                        <span class="p-price">₱560.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/9.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Levi Lamp</a>
                                        <span class="p-price">₱650.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival/10.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Naruto Tshirt</a>
                                        <span class="p-price">₱299.00</span>
                                    </div>
                                </div>
                                <div class="product-box">
                                   
                                    <div class="product-img">
                                        <a href="#"class="add-cart">
                                            <i class='bx bxs-cart'></i>
                                        </a>
                                    <img src="./images/newarrival//11.webp" />
                                    </div>
                                    <div class="product-details">
                                        <a href="#" class="p-name">Onepiece logo</a>
                                        <span class="p-price">₱490.00</span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                        
                        </section>

                        <div class="sale">
                            <div class="sale-box">
                                <img src="./images/jacket/5.jpg" />
                                <a href="#">
                                    <div class="sale-text">
                                        <strong>Haikyuu MSBY jacket</strong>
                                        <span>Sale off 20%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="sale-box">
                                <img src="./images/jacket/6.jpg" />
                                <a href="#">
                                    <div class="sale-text">
                                        <strong>Haikyuu Itachiyama</strong>
                                        <span>Sale off 20%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="sale-box">
                                <img src="./images/jacket/7.jfif" />
                                <a href="#">
                                    <div class="sale-text">
                                        <strong>Haikyuu Aoba johsai</strong>
                                        <span>Sale off 20%</span>
                                    </div>
                                </a>
                            </div>
                        </div>




                        <div class="services">
                            <div class="services-box">
                                <i class='bx bxs-truck'></i>
                                <span>Free Shipping</span>
                                <p>Free Shipping every first order</p>
                            </div>
                            <div class="services-box">
                                <i class='bx bxs-phone-call'></i>
                                <span>Support 24/7</span>
                                <p>We support 24hour a day </p>
                            </div>
                            <div class="services-box">
                                <i class='bx bx-sync' ></i>
                                <span>Money back 100%</span>
                                <p>You have 20 days to Return </p>
                            </div>
                        </div>
@endsection