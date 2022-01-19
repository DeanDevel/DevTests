<?php
//=================================
//Build a 2 page Javascript SPA web application
// 
//Page 1 - Create a landing page containing a table showing 10 crypto prices using CoinGekco's free crypto API https://www.coingecko.com/en/api
//         The crypto table showing the latest 10 crypto prices must include the following columns:[Coin Name|Coin Symbol|Price|1h move|Market Cap].
//            a) Consume the following CoingGecko's Free API end point to retrieve the data.
//                https://www.coingecko.com/api/documentations/v3#/coins/get_coins_markets
//            b) Table columns must be sortable.
//           c) Create a Menu link to page 2
// 
//Page 2 - Display a Contact Us page - containing Sharenet address details and contact numbers and location using Google Maps.
//           a) Provide a link back to page 1.
 
//Once completed please upload to WeTransfer https://wetransfer.com/ and provide the link for review.
//=================================
include 'header.php'; //REQUIRED HEADER
?>
<!--//contact details-->
<div class="container" style="width:90%;margin-top:40px;">
<h2> HOW CAN WE HELP? </h2>
<p>sharenet your key to investing</p>
<div style="height: 40px;"></div>

<!--head office-->
<div class="row">
    <div class="col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6625.139306403409!2d18.630837!3d-33.87498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbdd802ca53b92d43!2sSharenet+(Pty)+Ltd!5e0!3m2!1sen!2sza!4v1503321100586" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <div class="col-md-4">
        <h3>HEAD OFFICE</h3>
        <div style="line-height:3px;font-size:13px;">
            <p>301, 3rd Floor</p>
            <p>Imperial Terraces</p>
            <p>Tygervalley Waterfront</p>
            <p>Bellville</p>
            <p>Cape Town, 7530</p>
        </div>
    </div>
</div>
<div style="height: 40px;"></div> 



<!---center content contact details---->
<div class="row">
        <div class="col-md-6">

            <div class="row">
            <div class="col-md-4" style="text-align: right;">
                <img class="img-fluid"  src="https://www.sharenet.co.za/v3/frontend/img/phone-icon.jpg" alt="phone">
            </div>
            <div class="col-md-8">
                <h5>GENERAL ENQUIRIES</h5>
                <div style="line-height:3px;font-size:13px;">
                <p>(021) 700 4800</p>
                <p>087 820 2090</p>
                <p>Fax: (021) 700 4802</p>
                <p>support@sharenet.co.za</p>
                </div>
            </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="row">
            <div class="col-md-4" style="text-align: right;">
                <img class="img-fluid"  src="https://www.sharenet.co.za/v3/frontend/img/support-icon.jpg" alt="phone">
            </div>
            <div class="col-md-8">
                <h5>SUPPORT</h5>
                <div style="line-height:3px;font-size:13px;">
                <p>021) 700 4800 / option 1</p>
                <p>support@sharenet.co.za</p>
                <p>&nbsp;</p>
                <p>Technical support is available from 8am to 5pm.</p>
                </div>
            </div>
            </div>

        </div>
</div>

<div style="height: 40px;"></div> 

<div class="row">
        <div class="col-md-6">

            <div class="row">
            <div class="col-md-4" style="text-align: right;">
                <img class="img-fluid"  src="https://www.sharenet.co.za/v3/frontend/img/sales-icon.jpg" alt="phone">
            </div>
            <div class="col-md-8">
                <h5>SALES</h5>
                <div style="line-height:3px;font-size:13px;">
                <p>(021) 700 4828 / 38</p>
                <p>sales@sharenet.co.za</p>
                </div>
                        <div style="height: 10px;"></div> 
                        <h5>JEROME WYNGAARD</h5>
                        <div style="line-height:3px;font-size:13px;">
                        <p>National Sales Manager</p>
                        <p>jerome@sharenet.co.za</p>
                        </div>
            </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="row">
            <div class="col-md-4" style="text-align: right;">
                <img class="img-fluid"  src="https://www.sharenet.co.za/v3/frontend/img/accounts-icon.jpg" alt="phone">
            </div>
            <div class="col-md-8">
                <h5>ACCOUNTS</h5>
                <div style="line-height:3px;font-size:13px;">
                <p>(021) 700 4800 / option 4</p>
                <p>accounts@sharenet.co.za</p>
                </div>
            </div>
            </div>

        </div>
</div>
<!---center content contact details---->




<!--head office-->
<div style="height: 40px;"></div> 
<div class="row">
    <div class="col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6625.139306403409!2d18.630837!3d-33.87498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbdd802ca53b92d43!2sSharenet+(Pty)+Ltd!5e0!3m2!1sen!2sza!4v1503321100586" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <div class="col-md-4">
        <h3>JOHANNESBURG OFFICE</h3>
        <div style="line-height:3px;font-size:13px;">
            <p>356 Rivonia Boulevard</p>
            <p>Edenburg</p>
            <p>Sandton</p>
            <p>2128</p>
        </div>
        <div style="height: 20px;"></div>  

        <div class="row">
            <div class="col-md-4" style="text-align: right;">
                <img class="img-fluid"  src="https://www.sharenet.co.za/v3/frontend/img/phone-icon.jpg" alt="phone">
            </div>
            <div class="col-md-8">

                <h5>GENERAL ENQUIRIES</h5>
                <div style="line-height:3px;font-size:13px;">
                <p>(010) 900 4975</p>
                <p>applicationsjhb@sharenet.co.za</p>
                </div>

            </div>
      </div>

    </div>
</div>

</div>

<?php
//INCLUDE FOOTER
include 'footer.php';
?>









