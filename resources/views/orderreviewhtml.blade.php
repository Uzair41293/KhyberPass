   <!--header-->
   <header style="            background-color: #fec73f !important;
   " id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <h1>
                <a class="navbar-brand" href="index.html">
                    KHYBER PASS
                </a>
            </h1>

            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="newmenu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ContactUs&me">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sign">Login</a>
                    </li>
                </ul>
            </div>
            <div class="search-right">
                <a href="./r" title="search">Refer A Friend</a>


            </div>

         
        </nav>
    </div>
</header>
   <br class="myBr"><br>
   <section id="home">
       <div class="container">

           <div class="row mt-5">
               <div class="col-md-8">
                   <section class="courseSection">
                       <div class="container">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="ownCardsClass" id="OrderContainer">

                                   </div>
                               </div>

                               <div class="col-md-4">

                                   <div class="coupon mb-1 d-none">

                                       <!-- <input type="text" autocomplete="OFF" name="text" id="cusname">here i am<br> -->


                                   </div>


                               </div>
                           </div>
                       </div>



                   </section>

               </div>
               <div class="col-md-4">
                   <div class="card" id="sticky" style="width: 100%; padding: 0px !important; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);">

                       <div class="card-body">
                        <div class="mainDiv">
                            <div class="left">
                                <p><span id="customerName">Waqas Ali</span>(ID:
                                    <span id="CustomerID">40</span>)
                            </div>
                            <div class="right">
                                <p>Coins <span id="CoinsAvailable">280</span></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <hr style="margin: 2px !important;">
                           <h5 class="card-title" >ORDER SUMMARY</h5>
                           <div class="mainDiv">
                               <div class="left">
                                   <p>Total</p>
                               </div>
                               <div class="right">
                                   <p>$<total id="billTotal">25.00</total></p>
                               </div>
                               <div class="clear"></div>
                           </div>
                           <div class="mainDiv">
                               
                               <div class="clear"></div>
                           </div>
                           <div class="mainDiv">
                               <div class="left">
                                <input type="text" class="form-control" id="CoinsToBeUsed">

                               </div>
                               <div class="right">
                                   <button
                                   style="padding: 7px 8px; outline-color: #fec73f;  background-color: #fec73f; color: #fff; 
                                    border: none;" onclick="UseCoins()">Use Coins</button>
                               </div>
                               <div class="clear"></div>
                           </div>
                           <div class="mainDiv">
                            <div class="left">
                                <p>Discount After Coins</p>
                            </div>
                            <div class="right">
                                <p>$<afterCoins id="coinsDiscounts">0.74</afterCoins></p>
                            </div>
                            <div class="clear"></div>
                        </div>
                           <div class="mainDiv">
                               <div class="left">
                                   <p>Net Total</p>
                               </div>
                               <div class="right">
                                   <p>$<span id="netTotal">0.74</span></p>
                               </div>
                               <div class="clear"></div>
                           </div>
                           <div class="mainDiv">
                               <form>
                                   <div class="left">
                                       <input type="radio" id="male" name="gender" value="male">
                                       <label for="male">Pay Card</label><br>
                                   </div>
                                   <div class="right">
                                       <input type="radio" id="male" name="gender" value="male">
                                       <label style="margin-right: 11px;" for="male">Pay Cash</label><br>
                                   </div>
                               </form>
                               <div class="clear"></div>
                           </div>
                           <div class="mainDiv">
                               <form>
                                   <div class="left">
                                       <input type="radio" id="male" name="gender" value="male">
                                       <label for="male">Delivery</label><br>
                                   </div>
                                   <div class="right">
                                       <input type="radio" id="male" name="gender" value="male">
                                       <label for="male">Take Away</label><br>
                                   </div>
                               </form>
                               <div class="clear"></div>
                           </div>
                           <div class="mainDiv-1" style="margin: 4px 0px;">

                               <div class="left-1">
                                   <input type="text" style="width: 97%;" class="form-control" placeholder="Name"
                                       name="" id="deleverToName">
                               </div>
                               <div class="right-1">
                                   <input type="text" style="width: 97%;" class="form-control" placeholder="Contact"
                                       name="" id="cuscontact">

                               </div>

                               <div class="clear"></div>
                           </div>
                           <div class="mainDiv">

                               <div class="left" style="width: 100%;">
                                   <textarea name="" placeholder="Address" style="resize: none;"
                                       class="form-control" id="cusadd"></textarea>
                               </div>


                               <div class="clear"></div>
                           </div>


                           <br>
                           <div style="text-align: center;">
                           <button data-toggle="modal" data-target="#exampleModal" class="btn"
                                   style="background-color: #fec73f; color: #fff; padding: 10px 20px; font-size: 17px; font-weight: 600;width: 40%; ">Pay
                                   <span>$25</span> </button>
                                   <button class="btn" onclick="placeOrder()" style="background-color: #fec73f; color: #fff; padding: 10px 20px; font-size: 17px; font-weight: 600;width: 40%; ">Place Order
   </button>

                           </div>
                       </div>
                   </div>
                   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                           <div class="modal-content" style="background: none !important; border: none !important;">

                               <div class="modal-body">

                                   <div class="card"
                                       style="width: 100%; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);">

                                       <div class="card-body">
                                           <h5 class="card-title" style="font-weight: 600;">PAYMENT METHOD</h5>
                                           <div class="globalContent">
                                               <main>

                                                   <section class="container-lg">

                                                       <div class="cell example example2" id="example-2">
                                                           <form>
                                                               <div data-locale-reversible>
                                                                   <div class="row">
                                                                       <div class="field">
                                                                           <input id="example2-address"
                                                                               data-tid="elements_examples.form.address_placeholder"
                                                                               class="input empty" type="text"
                                                                               placeholder="" required=""
                                                                               autocomplete="OFF">
                                                                           <label for="example2-address"
                                                                               data-tid="elements_examples.form.address_label">Name
                                                                               On Card</label>
                                                                           <div class="baseline"></div>
                                                                       </div>
                                                                   </div>

                                                               </div>
                                                               <div class="row">
                                                                   <div class="field">
                                                                       <div id="example2-card-number"
                                                                           class="input empty"></div>
                                                                       <label for="example2-card-number"
                                                                           data-tid="elements_examples.form.card_number_label">Card
                                                                           number</label>
                                                                       <div class="baseline"></div>
                                                                   </div>
                                                               </div>
                                                               <div class="row">
                                                                   <div class="field half-width">
                                                                       <div id="example2-card-expiry"
                                                                           class="input empty"></div>
                                                                       <label for="example2-card-expiry"
                                                                           data-tid="elements_examples.form.card_expiry_label">Expiration</label>
                                                                       <div class="baseline"></div>
                                                                   </div>
                                                                   <div class="field half-width">
                                                                       <div id="example2-card-cvc" class="input empty">
                                                                       </div>
                                                                       <label for="example2-card-cvc"
                                                                           data-tid="elements_examples.form.card_cvc_label">CVC</label>
                                                                       <div class="baseline"></div>
                                                                   </div>
                                                               </div>
                                                               <button type="submit"
                                                                   data-tid="elements_examples.form.pay_button">Pay
                                                                   $25</button>
                                                                   
                                                               <div class="error" role="alert"><svg
                                                                       xmlns="http://www.w3.org/2000/svg" width="17"
                                                                       height="17" viewBox="0 0 17 17">
                                                                       <path class="base" style="display:none;"
                                                                           fill="#000"
                                                                           d="M8.5,17 C3.80557963,17 0,13.1944204 0,8.5 C0,3.80557963 3.80557963,0 8.5,0 C13.1944204,0 17,3.80557963 17,8.5 C17,13.1944204 13.1944204,17 8.5,17 Z">
                                                                       </path>
                                                                       <path class="glyph" fill="#FFF"
                                                                           d="M8.5,7.29791847 L6.12604076,4.92395924 C5.79409512,4.59201359 5.25590488,4.59201359 4.92395924,4.92395924 C4.59201359,5.25590488 4.59201359,5.79409512 4.92395924,6.12604076 L7.29791847,8.5 L4.92395924,10.8739592 C4.59201359,11.2059049 4.59201359,11.7440951 4.92395924,12.0760408 C5.25590488,12.4079864 5.79409512,12.4079864 6.12604076,12.0760408 L8.5,9.70208153 L10.8739592,12.0760408 C11.2059049,12.4079864 11.7440951,12.4079864 12.0760408,12.0760408 C12.4079864,11.7440951 12.4079864,11.2059049 12.0760408,10.8739592 L9.70208153,8.5 L12.0760408,6.12604076 C12.4079864,5.79409512 12.4079864,5.25590488 12.0760408,4.92395924 C11.7440951,4.59201359 11.2059049,4.59201359 10.8739592,4.92395924 L8.5,7.29791847 L8.5,7.29791847 Z">
                                                                       </path>
                                                                   </svg>
                                                                   <span class="message"></span></div>
                                                           </form>

                                                       </div>
                                                   </section>
                                               </main>
                                           </div>

                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>




               </div>
           </div>
       </div>
   </section>


   <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Khyber Pass</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   Do You Want To View Your Order ?
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">No,Thanks</button>
                   <button type="button" class="btn btn-primary" id="SaveMe">Okay</button>
               </div>
           </div>
       </div>
   </div>
