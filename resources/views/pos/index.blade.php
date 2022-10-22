<x-app-layout :assets="$assets ?? []">
    <main id="content" role="main" class="main pointer-event">


        <section class="section-content padding-y-sm bg-default mt-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 padding-y-sm mt-2">
                        <div class="card pr-1 pl-1">
                            <div class="card-header pr-0 pl-0">
                                <div class="row w-100">
                                    <div class="col-md-6 col-12 mt-2">
                                        <form class="header-item">

                                            <div class="input-group-overlay input-group-merge input-group-flush w-i3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="tio-search"></i>
                                                    </div>
                                                </div>
                                                <input id="search" autocomplete="off" type="text" name="search" class="form-control search-bar-input" placeholder="Search by code or name" aria-label="Search here">
                                                <div class="card search-card w-i4 d-none">
                                                    <div id="search-box" class="card-body search-result-box style-i2"></div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-md-6 col-12 mt-2">
                                        <div class="input-group header-item w-100">
                                            <select name="category" id="category" class="form-control js-select2-custom mx-1 select2-hidden-accessible" title="select category" onchange="set_category_filter(this.value)" data-select2-id="category" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="2">All categories</option>
                                                <option value="13" data-select2-id="3">Fashion &amp; Lifes...</option>
                                                <option value="12" data-select2-id="4">Sports</option>
                                                <option value="11" data-select2-id="5">Beverages</option>
                                                <option value="10" data-select2-id="6">Breads, Biscuit...</option>
                                                <option value="9" data-select2-id="7">Chocolate &amp; Can...</option>
                                                <option value="8" data-select2-id="8">Cooking Essenti...</option>
                                                <option value="7" data-select2-id="9">Meat &amp; Fish</option>
                                                <option value="6" data-select2-id="10">Fruits &amp; Vegeta...</option>
                                                <option value="3" data-select2-id="11">Food</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection custom-select" role="combobox" aria-haspopup="true" aria-expanded="false" title="select category" tabindex="0" aria-disabled="false" aria-labelledby="select2-category-container"><span class="select2-selection__rendered" id="select2-category-container" role="textbox" aria-readonly="true" title="All categories"><span>All categories</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="items">
                                <div class="row mt-2 mb-3 style-i3">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="39" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="39">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(39)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-6329858e34093.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Marvel School bag</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 69418</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            1600 $
                                                            <strike class="style-three-sp">
                                                                1900 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="38" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="38">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(38)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-632985379c2ba.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Water proof Travel Bag</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 90779</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            4050 $
                                                            <strike class="style-three-sp">
                                                                4500 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="37" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="37">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(37)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-6329841d22d48.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Sky Blue Shirt</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 77761</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            1305 $
                                                            <strike class="style-three-sp">
                                                                1450 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="36" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="36">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(36)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-6329836f04339.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Polo T-Shirts</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 85663</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            855 $
                                                            <strike class="style-three-sp">
                                                                950 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="35" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="35">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(35)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-632982dfc4850.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Star printed girl kid dress</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 30284</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            1190 $
                                                            <strike class="style-three-sp">
                                                                1320 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="34" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="34">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(34)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-6329816d5c3f9.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Palazzo</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 36109</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            250 $
                                                            <strike class="style-three-sp">
                                                                300 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="33" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="33">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(33)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63298059726fb.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Shawl</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 67616</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            1395 $
                                                            <strike class="style-three-sp">
                                                                1550 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="32" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="32">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(32)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63297fd269e53.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Kurti</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 48450</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            3400 $
                                                            <strike class="style-three-sp">
                                                                3500 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="31" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="31">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(31)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63297f2eab69c.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>YONEX pro badminton bat</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 35784</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            2150 $
                                                            <strike class="style-three-sp">
                                                                2250 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="30" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="30">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(30)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63297e79a5458.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Cricket bat</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 40543</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            1092.5 $
                                                            <strike class="style-three-sp">
                                                                1150 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="29" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="29">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(29)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63297da932d5f.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Football</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 18409</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            891 $
                                                            <strike class="style-three-sp">
                                                                990 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="28" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="28">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(28)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63297cd889013.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Captain Bike Trolley</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 11472</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            3200 $
                                                            <strike class="style-three-sp">
                                                                3400 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="27" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="27">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(27)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63297c47e9943.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Premio My Moto Bike</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 91121</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            3150 $
                                                            <strike class="style-three-sp">
                                                                3500 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="26" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="26">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(26)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63297b2e97934.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Speed</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 71125</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            35 $
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="25" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="25">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(25)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63297a6fc9bfd.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Kinle mineral water</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 82155</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            15 $
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="24" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="24">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(24)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-632979d2f1fb6.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Mum Mineral water</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 71206</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            25 $
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="23" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="23">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(23)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-6329789e54136.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Sprite</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 73683</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            35 $
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="22" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="22">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(22)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-63296b2ff1dd9.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>7up</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 36842</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            40 $
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="21" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="21">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(21)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-6329657a2cb34.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Juice</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 81471</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            25 $
                                                            <strike class="style-three-sp">
                                                                35 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <form id="20" class="mb-2">
                                            <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" id="product_id" name="id" value="20">
                                            <input type="hidden" id="product_qty" name="quantity" value="1">
                                            <a onclick="addToCart(20)" class="c-one-sp">
                                                <div class="row style-one-sp">
                                                    <div class="col-2 p-3">
                                                        <img src="https://6pos.6amtech.com/storage/app/public/product/2022-09-20-632964b4cbadc.png" onerror="this.src='https://6pos.6amtech.com/public/assets/admin/img/160x160/img2.jpg'" class="style-two-sp">
                                                    </div>
                                                    <div class="col-8 m-2">
                                                        <div class="w-one-sp">
                                                            <span>Tea</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            <span>Code: 18322</span>
                                                        </div>
                                                        <div class="w-one-sp">
                                                            499.5 $
                                                            <strike class="style-three-sp">
                                                                555 $
                                                            </strike><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                            <span class="page-link" aria-hidden="true">‹</span>
                                        </li>
                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                        <li class="page-item"><a class="page-link" href="https://6pos.6amtech.com/admin/pos?page=2">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="https://6pos.6amtech.com/admin/pos?page=2" rel="next" aria-label="Next »">›</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 padding-y-sm mt-2">
                        <div class="card pr-1 pl-1">
                            <div class="row mt-2">
                                <div class="form-group mt-1 col-12 w-i6">
                                    <select id="customer" name="customer_id" class="form-control js-data-example-ajax select2-hidden-accessible" onchange="customer_change(this.value);" data-select2-id="customer" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="14">--select-customer--</option>
                                        <option value="0" data-select2-id="15">Walking customer</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="13" style="width: 480.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-customer-container"><span class="select2-selection__rendered" id="select2-customer-container" role="textbox" aria-readonly="true" title="--select-customer--">--select-customer--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mt-1 col-12 col-lg-6 mb-0">
                                    <button class="w-i6 d-inline-block btn btn-success rounded" id="add_new_customer" type="button" data-toggle="modal" data-target="#add-customer" title="Add Customer">
                                        <i class="tio-add-circle-outlined"></i> Customer
                                    </button>
                                </div>
                                <div class="form-group mt-1 col-12 col-lg-6 mb-0">
                                    <a class="w-i6 d-inline-block btn btn-warning rounded" href="https://6pos.6amtech.com/admin/pos/new-cart-id">
                                        New order
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-12 mb-0">
                                    <label class="input-label text-capitalize border p-1">Current customer : <span class="style-i4 mb-0 p-1" id="current_customer">Walking Customer</span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mt-1 col-12 col-lg-6 mt-2 mb-0">
                                    <select id="cart_id" name="cart_id" class="form-control js-select2-custom select2-hidden-accessible" onchange="cart_change(this.value);" data-select2-id="cart_id" tabindex="-1" aria-hidden="true">
                                        <option value="wc-714" selected="" data-select2-id="16">wc-714</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="12" style="width: 100%;"><span class="selection"><span class="select2-selection custom-select" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-cart_id-container"><span class="select2-selection__rendered" id="select2-cart_id-container" role="textbox" aria-readonly="true" title="wc-714"><span>wc-714</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group mt-1 col-12 col-lg-6 mt-2 mb-0">
                                    <a class="w-i6 d-inline-block btn btn-danger rounded" href="https://6pos.6amtech.com/admin/pos/clear-cart-ids">
                                        Clear cart
                                    </a>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <center>
                                            <div id="cartloader" class="d-none">
                                                <img width="50" src="https://6pos.6amtech.com/public/assets/admin/img/loader.gif">
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100" id="cart">
                                <link rel="stylesheet" href="https://6pos.6amtech.com/public/assets/admin/css/custom.css">
                                <div class="d-flex flex-row style-one-cart">
                                    <table class="table table-bordered">
                                        <thead class="text-muted">
                                            <tr>
                                                <th scope="col" class="w-25">Item</th>
                                                <th scope="col" class="text-center qty-width">Qty</th>
                                                <th scope="col" class="text-center w-25">Price</th>
                                                <th scope="col" class="text-center w-25">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="box p-3">
                                    <dl class="row text-sm-right">
                                        <dt class="col-6">Sub total :</dt>
                                        <dd class="col-6 text-right">0 $</dd>


                                        <dt class="col-6">Product discount :</dt>
                                        <dd class="col-6 text-right">0 $
                                        </dd>

                                        <dt class="col-6">Extra discount :</dt>
                                        <dd class="col-6 text-right">
                                            <button id="extra_discount" class="btn btn-sm" type="button" data-toggle="modal" data-target="#add-discount"><i class="tio-edit"></i></button>0.00 $
                                        </dd>
                                        <dt class="col-6">Coupon discount :</dt>
                                        <dd class="col-6 text-right">
                                            <button id="coupon_discount" class="btn btn-sm" type="button" data-toggle="modal" data-target="#add-coupon-discount"><i class="tio-edit"></i></button>0 $
                                        </dd>

                                        <dt class="col-6">Tax :</dt>
                                        <dd class="col-6 text-right">0 $</dd>

                                        <dt class="col-6">Total :</dt>
                                        <dd class="col-6 text-right h4 b">
                                            <span id="total_price">0</span>
                                            $
                                        </dd>
                                    </dl>
                                    <div class="row">
                                        <div class="col-6 mt-2">
                                            <a href="#" class="btn btn-danger btn-sm btn-block" onclick="emptyCart()"><i class="fa fa-times-circle "></i> Cancel </a>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <button onclick="submit_order();" type="button" class="btn  btn-primary btn-sm btn-block"><i class="fa fa-shopping-bag"></i>
                                                Order </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="add-customer" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add new customer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="https://6pos.6amtech.com/admin/customer/store" method="post" id="product_form">
                                                    <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH"> <input type="hidden" class="form-control" name="balance" value="0">
                                                    <div class="row pl-2">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="input-label">Customer name <span class="input-label-secondary text-danger">*</span></label>
                                                                <input type="text" name="name" class="form-control" value="" placeholder="Customer name" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="input-label">Mobile no <span class="input-label-secondary text-danger">*</span></label>
                                                                <input type="number" id="mobile" name="mobile" class="form-control" value="" placeholder="Mobile no" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pl-2">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="input-label">Email</label>
                                                                <input type="email" name="email" class="form-control" value="" placeholder="Ex : ex@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="input-label">State</label>
                                                                <input type="text" name="state" class="form-control" value="" placeholder="State">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pl-2">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="input-label">City </label>
                                                                <input type="text" name="city" class="form-control" value="" placeholder="City">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="input-label">Zip code </label>
                                                                <input type="text" name="zip_code" class="form-control" value="" placeholder="Zip code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row pl-2">
                                                        <div class="col-12 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="input-label">Address </label>
                                                                <input type="text" name="address" class="form-control" value="" placeholder="Address">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <hr>
                                                    <button type="submit" id="submit_new_customer" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal fade" id="add-discount" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Extra discount</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Discount</label>
                                                        <input type="number" id="dis_amount" class="form-control" name="discount" step="0.01" min="0">

                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="">Type</label>
                                                        <select name="type" id="type_ext_dis" class="form-control" onchange="limit(this);">
                                                            <option value="amount" selected="">
                                                                Amount
                                                                ($)
                                                            </option>
                                                            <option value="percent">
                                                                Percent
                                                                (%)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <button class="btn btn-sm btn-primary" onclick="extra_discount();" type="submit">Submit</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="add-coupon-discount" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Coupon discount</h5>
                                                <button id="coupon_close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group col-sm-12">
                                                    <label for="">Coupon code</label>
                                                    <input type="text" id="coupon_code" class="form-control" name="coupon_code">

                                                </div>

                                                <div class="form-group col-sm-12">
                                                    <button class="btn btn-sm btn-primary" type="submit" onclick="coupon_discount();">Submit</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="add-tax" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Update tax</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="https://6pos.6amtech.com/admin/pos/tax" method="POST" class="row">
                                                    <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH">
                                                    <div class="form-group col-12">
                                                        <label for="">Tax (%)</label>
                                                        <input type="number" class="form-control" name="tax" min="0">
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="paymentModal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Payment </h5>
                                                <button id="payment_close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <span class="style-three-cart">Total</span>
                                                <h5 class="font-one-cart" id="total_balance"><span class="style-four-cart"> = </span>
                                                    0
                                                    $</h5>
                                            </div>

                                            <div class="modal-body">
                                                <form action="https://6pos.6amtech.com/admin/pos/order" id="order_place" method="post" class="row">
                                                    <input type="hidden" name="_token" value="u67oyElhJDrqILRcD1dipezE1GRcBQSx0sqS6JXH">
                                                    <div class="form-group col-12">
                                                        <label class="input-label" for="">Type</label>
                                                        <select onchange="payment_option(this);" name="type" id="payment_opp" class="form-control select2" required="">
                                                            <option value="1">Cash</option>
                                                            <option value="4">Standard Chartered</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-12 d-none" id="balance">
                                                        <label class="input-label" for="">Customer balance
                                                            ($)</label>
                                                        <input type="number" id="balance_customer" class="form-control" name="customer_balance" disabled="">
                                                    </div>
                                                    <div class="form-group col-12 d-none" id="remaining_balance">
                                                        <label class="input-label" for="">Remaining balance
                                                            ($)</label>
                                                        <input type="number" id="balance_remain" class="form-control" name="remaining_balance" value="" readonly="">
                                                    </div>
                                                    <div class="form-group col-12 d-none" id="transaction_ref">
                                                        <label class="input-label" for="">Transaction reference
                                                            ($)
                                                            -(Optional)</label>
                                                        <input type="text" id="tran_ref" class="form-control" name="transaction_reference">
                                                    </div>
                                                    <div class="form-group col-12" id="collected_cash">
                                                        <label class="input-label" for="">Collected cash
                                                            ($)</label>
                                                        <input type="number" id="cash_amount" onkeyup="price_calculation();" class="form-control" name="collected_cash" step="0.01">
                                                    </div>
                                                    <div class="form-group col-12" id="returned_amount">
                                                        <label class="input-label" for="">Returned amount
                                                            ($)</label>
                                                        <input type="number" id="returned" class="form-control" name="returned_amount" value="" readonly="">
                                                    </div>

                                                    <div class="form-group col-12">
                                                        <button class="btn btn-sm btn-primary" id="order_complete" type="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="short-cut-keys" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Short cut keys</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <span>To click order : alt + O</span><br>
                                                <span>To click payment submit : alt + S</span><br>
                                                <span>To close payment submit : alt + Z</span><br>
                                                <span>To click cancel cart item all : alt + C</span><br>
                                                <span>To click add new customer : alt + A</span> <br>
                                                <span>To submit add new customer form : alt + N</span><br>
                                                <span>To click short cut keys : alt + K</span><br>
                                                <span>To print invoice : alt + P</span> <br>
                                                <span>To cancel invoice : alt + B</span> <br>
                                                <span>To focus search input : alt + Q</span> <br>
                                                <span>To click extra discount : alt + E</span> <br>
                                                <span>To click coupon discount : alt + D</span> <br>
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

        <div class="modal fade" id="quick-view" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content" id="quick-view-modal">
                </div>
            </div>
        </div>
    </main>
</x-app-layout>