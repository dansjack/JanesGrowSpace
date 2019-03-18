<?PHP include '../includes/config.php';?>
<?PHP include '../includes/header.php';?>
    <!-- PAGE ID -->
    <div class="section group page-ID-container">
        <p class="col span_6_of_6 page-ID">Home > Plants > Chinese Money Plant</p>
    </div>
    <div class="section group main-aside-plants">
      <!-- START LEFT COL -->
        <main class="col span_3_of_6 main-plant-col">
            <p>
              <img src="../images/stock/pileaFree.jpg" alt = "Pilea" title="Pilea">
            </p>
        </main>
      <!-- END LEFT COL -->
      <!-- START RIGHT COL -->
        <aside class="col span_3_of_6">
            <h3 class="cname">Chinese Money Plant</h3>
            <h4 class="sname"><em>(Pilea peperomioides)</em></h4>
            <p>Cagtegory: </p>
            <p>Family: Urticaceae</p>
            <p>Origin: China (Yunnan Province)</p>
            <p>
              Description: Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea
              sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut
              soko zucchini.
            </p>
            <p>
              Care instructions: Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi
              amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato
              scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize
              bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea.
            </p>
            <div id='product-component-796c85fd6f4' class="buy-button"></div>
            <script>
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
                                node: document.getElementById('product-component-796c85fd6f4'),
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
                                            "button": {
                                                "background-color": "#ffbf00",
                                                "color": "#2274a5",
                                                "font-family": "Montserrat, sans-serif",
                                                ":hover": {
                                                    "background-color": "#e6ac00",
                                                    "color": "#2274a5"
                                                },
                                                "font-weight": "bold",
                                                ":focus": {
                                                    "background-color": "#e6ac00"
                                                }
                                            },
                                            "variantTitle": {
                                                "font-family": "Montserrat, sans-serif",
                                                "font-weight": "normal"
                                            },
                                            "title": {
                                                "font-size": "26px"
                                            },
                                            "description": {
                                                "font-family": "Montserrat, sans-serif",
                                                "font-weight": "normal"
                                            },
                                            "price": {
                                                "font-family": "Montserrat, sans-serif",
                                                "font-size": "18px",
                                                "font-weight": "normal"
                                            },
                                            "compareAt": {
                                                "font-size": "15px",
                                                "font-family": "Montserrat, sans-serif",
                                                "font-weight": "normal"
                                            }
                                        },
                                        "googleFonts": [
                                            "Montserrat",
                                            "Montserrat",
                                            "Montserrat",
                                            "Montserrat",
                                            "Montserrat"
                                        ]
                                    },
                                    "cart": {
                                        "contents": {
                                            "button": true
                                        },
                                        "text": {
                                            "notice": "Shipping is added at checkout."
                                        },
                                        "styles": {
                                            "button": {
                                                "background-color": "#ffbf00",
                                                "color": "#2274a5",
                                                "font-family": "Montserrat, sans-serif",
                                                ":hover": {
                                                    "background-color": "#e6ac00",
                                                    "color": "#2274a5"
                                                },
                                                "font-weight": "bold",
                                                ":focus": {
                                                    "background-color": "#e6ac00"
                                                }
                                            },
                                            "footer": {
                                                "background-color": "#ffffff"
                                            }
                                        },
                                        "googleFonts": [
                                            "Montserrat"
                                        ]
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
                                            },
                                            "button": {
                                                "background-color": "#ffbf00",
                                                "color": "#2274a5",
                                                "font-family": "Montserrat, sans-serif",
                                                ":hover": {
                                                    "background-color": "#e6ac00",
                                                    "color": "#2274a5"
                                                },
                                                "font-weight": "bold",
                                                ":focus": {
                                                    "background-color": "#e6ac00"
                                                }
                                            },
                                            "variantTitle": {
                                                "font-family": "Montserrat, sans-serif",
                                                "font-weight": "normal"
                                            },
                                            "description": {
                                                "font-family": "Montserrat, sans-serif",
                                                "font-weight": "normal"
                                            },
                                            "price": {
                                                "font-family": "Montserrat, sans-serif",
                                                "font-weight": "normal"
                                            },
                                            "compareAt": {
                                                "font-family": "Montserrat, sans-serif",
                                                "font-weight": "normal"
                                            }
                                        },
                                        "googleFonts": [
                                            "Montserrat",
                                            "Montserrat",
                                            "Montserrat",
                                            "Montserrat",
                                            "Montserrat"
                                        ]
                                    },
                                    "toggle": {
                                        "styles": {
                                            "toggle": {
                                                "font-family": "Montserrat, sans-serif",
                                                "background-color": "#ffbf00",
                                                ":hover": {
                                                    "background-color": "#e6ac00"
                                                },
                                                "font-weight": "bold",
                                                ":focus": {
                                                    "background-color": "#e6ac00"
                                                }
                                            },
                                            "count": {
                                                "color": "#2274a5",
                                                ":hover": {
                                                    "color": "#2274a5"
                                                }
                                            },
                                            "iconPath": {
                                                "fill": "#2274a5"
                                            }
                                        },
                                        "googleFonts": [
                                            "Montserrat"
                                        ]
                                    },
                                    "option": {
                                        "styles": {
                                            "label": {
                                                "font-family": "Montserrat, sans-serif"
                                            },
                                            "select": {
                                                "font-family": "Montserrat, sans-serif"
                                            }
                                        },
                                        "googleFonts": [
                                            "Montserrat",
                                            "Montserrat"
                                        ]
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
        </aside>
    </div>
    <!-- END RIGHT COL -->
    <!--START FOOTER HERE-->
<?PHP include '../includes/footer.php';?>