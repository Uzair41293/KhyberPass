<body class="Main" style="background-color: rgb(6, 68, 68);">
<header  id="site-header" class="fixed-top">
    <div  class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">


            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Homihihge <span class="sr-only">(current)</span></a>
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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="profile" style="margin-top: 50px; padding: 10px 20px; text-align: center; ;">
                <h5 style="color: black;">Profile</h5>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 180px;" class="container">
    <div class="row" >
        <div class="col-md-4" >
            <div class="inputs">
                <label for="">Name</label>
                <input type="text" style="display: inline-block; width: 200px;" class="form-control" name="" id="customerName"><br>
            </div>
            <div class="inputs">
                <label for="">Contact</label>
                <input type="text" style="display: inline-block; width: 200px;" class="form-control" name="" id="contact"><br>

            </div>
            <div class="inputs">
                <label for="">Address</label>
                <input type="text" style="display: inline-block; width: 200px;" class="form-control" name="" id="address"><br>

            </div>
          
        </div>
        <div class="col-md-4">

            <div class="inputs">
                <label style="text-align: left !important;" for="">Rank</label>
                <input type="text" value="KP LOYAL" style="display: inline-block; width: 200px;" class="form-control"
                    name="" id="rank" readonly><br>

            </div>
            <div class="inputs">
                <label style="text-align: left !important;" for="">Coins</label>
                <input type="text" value="150" style="display: inline-block; width: 200px;" class="form-control"
                    name="" id="coins" readonly>
                <a style="color: blue; text-decoration: underline; " href="">Details</a>


            </div>
            <div class="inputs">
                <label for="">Reffered By</label>
                <input type="text" style="display: inline-block; width: 200px;" class="form-control" name="" id="refID"><br>

            </div>
        </div>
        <div  class="col-md-4 text-center">
            <div class="profileImg text-right" style="margin:-30px 0px; ">
                <img class="img-fluid" style="width: 200px; height: 200px; border-radius: 10px;"
                    src="https://scontent.flhe7-1.fna.fbcdn.net/v/t1.0-0/p206x206/70200548_545063982708579_5871539444061831168_o.jpg?_nc_cat=105&ccb=3&_nc_sid=da31f3&_nc_eui2=AeE_MjUK7AzlckHsL2MhUPsk8zBFb5t2DM_zMEVvm3YMz8X_aqbbMzYr8uFgghjeSwLd-MOjBkBnEHXSYLXDRR2k&_nc_ohc=4APyiO7z4HYAX_QG2rw&_nc_ht=scontent.flhe7-1.fna&tp=6&oh=39b170b8fa6ba1971b73334717923306&oe=605A1C78"
                    alt=""><br>

            </div>
            <div class="inputs" style="text-align: center; margin-left: 175px; margin-top: 40px;">
                <a style="color: blue; text-decoration: underline; text-align: center !important;" href="">Upload</a>

            </div>
        </div>
    </div>

    <div  style="margin-top: 100px  ;" class="row">
        <div  style="margin-left: 150px;" class="col-md-10 mainButtons ">
            <button  style="padding: 20px 30px; font-weight: 800; background-color: #0abf53" class="btn btn-register" onclick="addCustomer()">Register</button>
            <button style="padding: 20px 30px; font-weight: 600; background-color: #0abf53"  class="btn btn-refer">Refer New Friend</button>
            <button  style="padding: 20px 30px; font-weight: 800; background-color:#ffc945"class="btn btn-update">Update</button>
            <button  style="padding: 20px 30px; font-weight: 800; background-color: #cc1f1f;"class="btn btn-delete">Delete</button>

        </div>

    </div>
</div>
</body>