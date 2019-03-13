<?PHP include '../includes/config.php';?>
<?PHP include '../includes/header.php';?>
    <!-- PAGE ID -->
    <div class="section group page-ID-container">
        <p class="col span_6_of_6 page-ID">Home</p>
    </div>
    <div class="section group main-aside-plants">
        <!-- START RIGHT COL -->
        <main class="col span_3_of_6 main-plant-col">
            <h2>Main</h2>
            <p>Stare at ceiling attack the child or murr i hate humans they are so annoying eat the rubberband.
                Asdflkjaertvlkjasntvkjn (sits on keyboard) soft kitty warm kitty little ball of furr, step on your keyboard
                while you're gaming and then turn in a circle twitch tail in permanent irritation yet poop on floor and
                watch human clean up pushes butt to face somehow manage to catch a bird but have no idea what to do next, so
                play with it until it dies of shock. do not try to mix old food with new one to fool me! meeeeouw hopped up
                on catnip use lap as chair. Roll over and sun my belly attack dog, run away and pretend to be victim or cry
                louder at reflection. Yowling nonstop the whole night pushes butt to face kitty power. Sleep nap crash
                against wall but walk away like nothing happened and paw your face to wake you up in the morning, meow in
                empty rooms yet bird bird bird bird bird bird human why take bird out i could have eaten that but bite the
                neighbor's bratty kid.
            </p>
        </main>
        <!-- END RIGHT COL -->
        <!-- START LEFT COL -->
        <aside class="col span_3_of_6">
            <h3 class="cname">Chinese Money Plant</h3>
            <h4 class="sname"><em>(Pilea peperomioides)</em></h4>
            <div id='product-component-51b70ef1e2f'></div>
            <script type="text/javascript">
                /*<![CDATA[*/

                (function () {
                    var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                    if (window.ShopifyBuy) {
                        if (window.ShopifyBuy.UI) {
                            ShopifyBuyInit();
                        } else {
                            loadScript();
                        }
                    } else {
                        loadScript();
                    }

                    function loadScript() {
                        var script = document.createElement('script');
                        script.async = true;
                        script.src = scriptURL;
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                        script.onload = ShopifyBuyInit;
                    }

                    function ShopifyBuyInit() {
                        var client = ShopifyBuy.buildClient({
                            domain: 'janes-grow-space.myshopify.com',
                            storefrontAccessToken: '0b9cc7ccbef2a3d386d27ed76fdc9e99',
                        });

                        ShopifyBuy.UI.onReady(client).then(function (ui) {
                            ui.createComponent('product', {
                                id: [1759671713843],
                                node: document.getElementById('product-component-51b70ef1e2f'),
                                moneyFormat: '%24%7B%7Bamount%7D%7D',
                                options: {
                                    "product": {
                                        "variantId": "all",
                                        "width": "240px",
                                        "contents": {
                                            "img": false,
                                            "imgWithCarousel": false,
                                            "title": false,
                                            "variantTitle": false,
                                            "price": false,
                                            "description": false,
                                            "buttonWithQuantity": false,
                                            "quantity": false
                                        },
                                        "styles": {
                                            "product": {
                                                "text-align": "left",
                                                "@media (min-width: 601px)": {
                                                    "max-width": "100%",
                                                    "margin-left": "0",
                                                    "margin-bottom": "50px"
                                                }
                                            },
                                            "title": {
                                                "font-size": "26px"
                                            },
                                            "price": {
                                                "font-size": "18px"
                                            },
                                            "compareAt": {
                                                "font-size": "15px"
                                            }
                                        }
                                    },
                                    "cart": {
                                        "contents": {
                                            "button": true
                                        },
                                        "styles": {
                                            "footer": {
                                                "background-color": "#ffffff"
                                            }
                                        }
                                    },
                                    "modalProduct": {
                                        "contents": {
                                            "img": false,
                                            "imgWithCarousel": true,
                                            "variantTitle": false,
                                            "buttonWithQuantity": true,
                                            "button": false,
                                            "quantity": false
                                        },
                                        "styles": {
                                            "product": {
                                                "@media (min-width: 601px)": {
                                                    "max-width": "100%",
                                                    "margin-left": "0px",
                                                    "margin-bottom": "0px"
                                                }
                                            }
                                        }
                                    },
                                    "productSet": {
                                        "styles": {
                                            "products": {
                                                "@media (min-width: 601px)": {
                                                    "margin-left": "-20px"
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                        });
                    }
                })();
                /*]]>*/
            </script>
            <p>Cagtegory: </p>
            <p>Family: </p>
            <p>Type: </p>
            <p>Origin: </p>
            <p>Description: </p>
            <hr>
            <p>Care instructions:</p>
        </aside>
    </div>
    <!-- END LEFT COL -->
    <!--START FOOTER HERE-->
<?PHP include '../includes/footer.php';?>