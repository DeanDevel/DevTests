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
<!--//sortable table-->
<div class="container" style="width:50%;margin-top:40px;">
<h2> Coin Gecko Sortable Table </h2>
<p>crypto prices using CoinGekco's free crypto API</p>
<div style="height: 40px;"></div>
<table class="table table-striped table-bordered" id="sortTable">
<thead>
<tr>
    <th>Coin Name</th>
    <th>Coin Symbol</th>
    <th>Price ZAR</th>
    <th>1H Move</th>
    <th>Market Cap</th>
</tr>
</thead>
<tbody>

<?php
    ///GET DATA 
    $url = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=zar&order=market_cap_desc&per_page=10&page=1&sparkline=false&price_change_percentage=1h';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL,$url);
    $result=curl_exec($ch);
    curl_close($ch);

    //JUST CHECKING 
    //var_dump(json_decode($result, true));
    $coinarray = json_decode($result); //object

    //MAKE A LOOP
    foreach($coinarray as $show){
        //REQUIRED: [Coin Name|Coin Symbol|Price|1h move|Market Cap].
        echo '<tr>
            <td>'.$show->name.'</td>
            <td>'.$show->symbol.'</td>
            <td>R '.$show->current_price.'</td>
            <td>'.$show->price_change_percentage_1h_in_currency.'</td>
            <td>'.$show->market_cap.'</td>
        </tr>'; //show me objects
    }
?>
</tbody>
</table>
</div>

<?php
//INCLUDE FOOTER
include 'footer.php';
?>








