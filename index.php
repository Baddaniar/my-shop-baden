<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <aside>
        <div class="profile ml42 mb45">
            <img class="profile_icon" src="./image/Avatar.png" alt="" width="98px" height="98px">
            <p class="mtext">Hello, Daniar</p>
        </div>   
        <div class="menu ml42 mb45">
                <p class="menu_name">Menu</p>
                <div class="menu_grid">
                    <div class="row">
                        <img class="menu_icon" src="./icon/Bombilla.png" alt="">
                        <p class="row_name">New guns</p>
                    </div>
                    <div class="row">
                        <img class="menu_icon" src="./icon/Bombilla-1.png" alt="">
                        <p class="row_name">Best</p>
                    </div>
                    <div class="row">
                        <img class="menu_icon" src="./icon/Manzana.png" alt="">
                        <p class="row_name">Other</p>
                    </div>
                </div>
        </div>
        <div class="menu ml42 mb45">
                <p class="menu_name">Shop</p>
                <div class="menu_grid">
                    <div class="row">
                        <img class="menu_icon" src="./icon/Carrito.png" alt="">
                        <p class="row_name">Shop-cart</p>
                    </div>
                    <div class="row">
                        <img class="menu_icon" src="./icon/Cupón.png" alt="">
                        <p class="row_name">Cupons</p>
                    </div>
                </div>
        </div>
        <div class="banner ml42 mb45">
            <img src="./icon/offer.png" alt="">
            <p class="row_name active large">Special offer.</p>
            <p class="row_name active small">The best offer on holliday</p>
            <input class="offer  row_name active" type="button" value="Offers">
        </div>
    </aside>
    <main>
        <img class="search_icon" src="./icon/search.png" alt="">
        <input class="search" type="text" placeholder="Search">
        <img class="bell" src="./icon/bell.png" alt="">
        <p class="mtext">Guns</p>
        <div class="filter_block">
            <div class="filter">
                <input class="text_filter row_name active small" type="text" value="Filter by price">
                <input class="text_filter row_name  small" type="text" value="Filter by price">
                <input class="text_filter row_name  small" type="text" value="Filter by price">
            </div>
            <div class="other">
                <p class="row_name active large underline">Other</p>
                <img src="./icon/other.png" alt="" width="7px" height="13px">
            </div>
        </div> 
        <div class="main_grid">
            <div class="card">
                <div class="card_image">
                    <img src="./image/1.png" alt="" >
                </div>
                <p class="mtext ml25 card_name">Walther P22Q Semi-Auto Rimfire Pistol - .22</p>
                <div class="rate ml25">
                    <img src="./image/Stars.png" alt="">
                    <p class="row_name small amount">(49)</p>
                </div>
                <div class="price_button ml25">
                    <p class="mtext bigger">$329</p>
                    <input class="offer row_name active card_button" type="button" value="Add to Shopcart">
                    <img class="plus" src="./icon/plus.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="card_image">
                    <img src="./image/2.png" alt="" >
                </div>
                <p class="mtext ml25 card_name">Walther P22 Target California DA/SA</p>
                <div class="rate ml25">
                    <img src="./image/Stars.png" alt="">
                    <p class="row_name small amount">(49)</p>
                </div>
                <div class="price_button ml25">
                    <p class="mtext bigger">$417</p>
                    <input class="offer row_name active card_button" type="button" value="Add to Shopcart">
                    <img class="plus" src="./icon/plus.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="card_image">
                    <img src="./image/3.png" alt="" >
                </div>
                <p class="mtext ml25 card_name">Ruger Wrangler Single-Action Rimfire Revolver</p>
                <div class="rate ml25">
                    <img src="./image/Stars.png" alt="">
                    <p class="row_name small amount">(49)</p>
                </div>
                <div class="price_button ml25">
                    <p class="mtext bigger">$209</p>
                    <input class="offer row_name active card_button" type="button" value="Add to Shopcart">
                    <img class="plus" src="./icon/plus.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="card_image">
                    <img src="./image/4.png" alt="" >
                </div>
                <p class="mtext ml25 card_name">Browning Buck Mark Camper UFX Semi-Auto Rimfire Pistol</p>
                <div class="rate ml25">
                    <img src="./image/Stars.png" alt="">
                    <p class="row_name small amount">(49)</p>
                </div>
                <div class="price_button ml25">
                    <p class="mtext bigger">$399</p>
                    <input class="offer row_name active card_button" type="button" value="Add to Shopcart">
                    <img class="plus" src="./icon/plus.png" alt="">
                </div>
            </div>

        </div>   
    </main>
    <section>
        <p class="mtext">Gun's Information</p>
        <div class="full_card">
            <div class="full_card_image">
                <img src="./image/1big.jpg" alt="" height="180px" width="320px">
            </div>
            <p class="mtext ml25 card_name full">Walther P22 Target California DA/SA Semi-Auto Pistol - Black</p>
            <p class="row_name smal full_card_text ml25 mb45">Pistol is the California compliant version of the Walther P22.</p>
            <div class="rate ml25">
                <img src="./image/Stars.png" alt="">
                <p class="row_name small amount">(67)   <span class="underline">Ver todas las opiniones</span> </p>
            </div>
            <div class="price_button ml25 collumn mb45">
                <p class="mtext bigger">$14.81</p>
                <input class="offer row_name active card_button" type="button" value="Add to Shopcart">
                <img class="plus_full plus" src="./icon/plus.png" alt="">
            </div>
            <p class="mtext ml25 card_name ">Customer comments.</p>
            <div class="comments_box ml25">
                <div class="comment ">
                    <img src="./image/Avatar-1.png" alt="">
                    <div class="comment_info">
                        <p class="row_name active com"> Anton N</p>
                        <p class="row_name small com">A very good pistol</p>
                    </div>
                </div>
                <div class="comment">
                    <img src="./image/Avatar-2.png" alt="">
                    <div class="comment_info">
                        <p class="row_name active com"> Aslan A</p>
                        <p class="row_name small com">Slightly uncomfortable grip</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
</html>
