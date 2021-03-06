<?php
/*
Template Name: calculator
*/
get_header(); ?>

        <!-- <div class="_1-ekran wf-section">
            <div class="mega-title-wrapper">
                <h1 class="mega-title">Авто з США</h1>
            </div>

            <div class="z">
                <div class="w-layout-grid grid">
                    <div>
                        <p class="heading font-weight">Ми знайдемо <span class="text-span _0">вашу мрію</span> в Америці</p>
                        <div class="items"><span class="bold-text">Прозора система оплати:</span> оплата інвойсу особисто клієнтом (автомобіль відразу після оплати належить покупцю)</div>
                        <div class="items _2"><span class="bold-text">Дилерська тарифна сітка</span> для всіх видів послуг аукціону та доставки по суші та морю</div>
                        <div class="items _3"><span class="bold-text">Відповідальний супровід ремонтом:</span><br /><span class="color">✓</span> Пошук запчастин за оптовими цінами    <br /><span class="color">✓</span> Контроль якості роботи послуг    <br /><span class="color">✓</span> Фото та відеозвіти</div>
                        <div data-w-id="009bdc88-89b0-3bcc-4cc1-c9fe4c9886fa" class="place-button-here _2">
                            <div style="-webkit-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-moz-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);-ms-transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0);transform:translate3d(-50px, -30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(23deg) skew(0, 0)" class="blik-btn"></div><a href="#4" class="button _3 w-button">Замовити підбір</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div id="4" class="section-7 wf-section">
            <div class="z">
                <div class="div-block-426">
                    <p class="heading _35 font-weight"><?php pll_e('Дізнайтесь орієнтовну<span class="text-span">середню ціну авто в Україні</span>') ?></p>
                    <div class="w-layout-grid grid-44">
                        <div class="items _3-copy"><span class="color _6">✓</span>З розмитненням    <br /><span class="color _6">✓</span> Постановкою на облік</div>
                        <div class="items _3-copy"><span class="color _6">✓</span> З оплатою пенсійного фонду<br /><span class="color _6">✓</span> І доставкою до Вашого міста</div>
                    </div>
                    <div class="form-block-3 w-form">
                        <form id="calculator-form" name="calculator-form" onsubmit="return false" class="form-3">

                            <!-- YEAR -->
                            <div>
                                <div class="name-2 _2">Рік випуску автомобіля</div>
                                <div class="div-block-428">
                                    <div class="div-block-427">
                                        <select required name="year" class="i _2-copy w-select js-select-year">
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- VOLUME -->
                            <div>
                                <div class="name-2 _2">Об'єм двигуна</div>
                                <div class="div-block-428">
                                    <div class="div-block-427">
                                        <select required name="volume" class="i _2-copy w-select js-select-volume">
                                            <option value="0.1">0.1</option>
                                            <option value="0.2">0.2</option>
                                            <option value="0.3">0.3</option>
                                            <option value="0.4">0.4</option>
                                            <option value="0.5">0.5</option>
                                            <option value="0.6">0.6</option>
                                            <option value="0.7">0.7</option>
                                            <option value="0.8">0.8</option>
                                            <option value="0.9">0.9</option>
                                            <option value="1.0">1.0</option>
                                            <option value="1.1">1.1</option>
                                            <option value="1.2">1.2</option>
                                            <option value="1.3">1.3</option>
                                            <option value="1.4">1.4</option>
                                            <option value="1.5">1.5</option>
                                            <option value="1.6">1.6</option>
                                            <option value="1.7">1.7</option>
                                            <option value="1.8">1.8</option>
                                            <option value="1.9">1.9</option>
                                            <option value="2.0" selected>2.0</option>
                                            <option value="2.1">2.1</option>
                                            <option value="2.2">2.2</option>
                                            <option value="2.3">2.3</option>
                                            <option value="2.4">2.4</option>
                                            <option value="2.5">2.5</option>
                                            <option value="2.6">2.6</option>
                                            <option value="2.7">2.7</option>
                                            <option value="2.8">2.8</option>
                                            <option value="2.9">2.9</option>
                                            <option value="3.0">3.0</option>
                                            <option value="3.1">3.1</option>
                                            <option value="3.2">3.2</option>
                                            <option value="3.3">3.3</option>
                                            <option value="3.4">3.4</option>
                                            <option value="3.5">3.5</option>
                                            <option value="3.6">3.6</option>
                                            <option value="3.7">3.7</option>
                                            <option value="3.8">3.8</option>
                                            <option value="3.9">3.9</option>
                                            <option value="4.0">4.0</option>
                                            <option value="4.1">4.1</option>
                                            <option value="4.2">4.2</option>
                                            <option value="4.3">4.3</option>
                                            <option value="4.4">4.4</option>
                                            <option value="4.5">4.5</option>
                                            <option value="4.6">4.6</option>
                                            <option value="4.7">4.7</option>
                                            <option value="4.8">4.8</option>
                                            <option value="4.9">4.9</option>
                                            <option value="5.0">5.0</option>
                                            <option value="5.1">5.1</option>
                                            <option value="5.2">5.2</option>
                                            <option value="5.3">5.3</option>
                                            <option value="5.4">5.4</option>
                                            <option value="5.5">5.5</option>
                                            <option value="5.6">5.6</option>
                                            <option value="5.7">5.7</option>
                                            <option value="5.8">5.8</option>
                                            <option value="5.9">5.9</option>
                                            <option value="6.0">6.0</option>
                                            <option value="6.1">6.1</option>
                                            <option value="6.2">6.2</option>
                                            <option value="6.3">6.3</option>
                                            <option value="6.4">6.4</option>
                                            <option value="6.5">6.5</option>
                                            <option value="6.6">6.6</option>
                                            <option value="6.7">6.7</option>
                                            <option value="6.8">6.8</option>
                                            <option value="6.9">6.9</option>
                                            <option value="7.0">7.0</option>
                                            <option value="7.1">7.1</option>
                                            <option value="7.2">7.2</option>
                                            <option value="7.3">7.3</option>
                                            <option value="7.4">7.4</option>
                                            <option value="7.5">7.5</option>
                                            <option value="7.6">7.6</option>
                                            <option value="7.7">7.7</option>
                                            <option value="7.8">7.8</option>
                                            <option value="7.9">7.9</option>
                                            <option value="8.0">8.0</option>
                                            <option value="8.1">8.1</option>
                                            <option value="8.2">8.2</option>
                                            <option value="8.3">8.3</option>
                                            <option value="8.4">8.4</option>
                                            <option value="8.5">8.5</option>
                                            <option value="8.6">8.6</option>
                                            <option value="8.7">8.7</option>
                                            <option value="8.8">8.8</option>
                                            <option value="8.9">8.9</option>
                                            <option value="9.0">9.0</option>
                                            <option value="9.1">9.1</option>
                                            <option value="9.2">9.2</option>
                                            <option value="9.3">9.3</option>
                                            <option value="9.4">9.4</option>
                                            <option value="9.5">9.5</option>
                                            <option value="9.6">9.6</option>
                                            <option value="9.7">9.7</option>
                                            <option value="9.8">9.8</option>
                                            <option value="9.9">9.9</option>
                                            <option value="10.0">10.0</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Fuel type -->
                            <div>
                                <div class="name-2 _2">Тип палива</div>
                                <div class="div-block-428">
                                    <div class="div-block-427">
                                        <select required name="fuel" class="i _2-copy w-select js-select-fuel">
                                            <option value="gas">Бензин</option>
                                            <option value="diesel">Дизель</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- AUCTION -->
                            <div>
                                <div class="name-2 _2">Аукціон</div>
                                <div class="div-block-428">
                                    <div class="div-block-427" style="padding: 0;">
                                        <select required name="auction" placeholder="Выберите город" class="i _2-copy w-select js-select-auction">
                                            <option value="405">AL-ADESA Birmingham (AL)</option>
                                            <option value="2030">AL-ANCHORAGE, AK</option>
                                            <option value="430">AL-Huntsville</option>
                                            <option value="405">AL-BIRMINGHAM</option>
                                            <option value="430">AL-MOBILE</option>
                                            <option value="430">AL-Dothan</option>
                                            <option value="430">AL-Montgomery</option>
                                            <option value="480">AL-AL - DOTHAN</option>
                                            <option value="455">AL-TANNER</option>
                                            <option value="330">AL-BIRMINGHAM AL SUBLOT</option>
                                            <option value="2080">AL-Anchorage</option>
                                            <option value="480">AR-LITTLE ROCK</option>
                                            <option value="505">AR-FAYETTEVILLE</option>
                                            <option value="430">AZ-PHOENIX</option>
                                            <option value="530">AZ-TUCSON</option>
                                            <option value="390">CA-ADELANTO</option>
                                            <option value="280">CA-Anaheim</option>
                                            <option value="585">CA-CA - REDDING</option>
                                            <option value="455">CA-ANTELOPE</option>
                                            <option value="355">CA-BAKERSFIELD</option>
                                            <option value="455">CA-East Bay</option>
                                            <option value="350">CA-BURBANK</option>
                                            <option value="585">CA-ANDERSON</option>
                                            <option value="390">CA-ACE - Carson (CA)</option>
                                            <option value="300">CA-SAN BERNARDINO</option>
                                            <option value="290">CA-Colton</option>
                                            <option value="300">CA-Fontana</option>
                                            <option value="455">CA-Fremont</option>
                                            <option value="430">CA-FRESNO</option>
                                            <option value="565">CA-SACRAMENTO CA SUBLOT</option>
                                            <option value="270">CA-Los Angeles</option>
                                            <option value="480">CA-HAYWARD</option>
                                            <option value="380">CA-High Desert</option>
                                            <option value="430">CA-LANCASTER CA SUBLOT</option>
                                            <option value="280">CA-LOS ANGELES</option>
                                            <option value="270">CA-North Hollywood</option>
                                            <option value="455">CA-MARTINEZ</option>
                                            <option value="340">CA-ACE - Perris</option>
                                            <option value="455">CA-Sacramento</option>
                                            <option value="320">CA-RANCHO CUCAMONGA</option>
                                            <option value="480">CA-SACRAMENTO</option>
                                            <option value="330">CA-SAN DIEGO</option>
                                            <option value="455">CA-San Jose</option>
                                            <option value="390">CA-SANTA PAULA CA SUBLOT</option>
                                            <option value="280">CA-Sun Valley SUBLOT</option>
                                            <option value="455">CA-VALLEJO</option>
                                            <option value="280">CA-VAN NUYS</option>
                                            <option value="280">CA-Long Beach</option>
                                            <option value="270">CA-Los Angeles South</option>
                                            <option value="655">CO-DENVER</option>
                                            <option value="630">CO-COLORADO SPRINGS CO SUBLOT</option>
                                            <option value="630">CO-COLORADO SPRINGS</option>
                                            <option value="655">CO-DENVER EAST</option>
                                            <option value="1080">CO-Western Colorado</option>
                                            <option value="630">CO-Denver Central</option>
                                            <option value="740">CO-FORT LUPTON</option>
                                            <option value="630">CO-CO - DENVER SOUTH</option>
                                            <option value="405">CT-CT - HARTFORD SPRINGFIELD</option>
                                            <option value="330">CT-HARTFORD</option>
                                            <option value="405">CT-BERLIN CT SUBLOT</option>
                                            <option value="330">CT-Hartford-South</option>
                                            <option value="330">DE-New Castle</option>
                                            <option value="405">DE-SEAFORD</option>
                                            <option value="330">FL-ORLANDO NORTH</option>
                                            <option value="300">FL-Clearwater</option>
                                            <option value="370">FL-Fort Myers</option>
                                            <option value="280">FL-FT. PIERCE</option>
                                            <option value="260">FL-MIAMI SOUTH</option>
                                            <option value="355">FL-Tampa North</option>
                                            <option value="330">FL-JACKSONVILLE EAST</option>
                                            <option value="280">FL-JACKSONVILLE</option>
                                            <option value="330">FL-JACKSONVILLE WEST</option>
                                            <option value="260">FL-MIAMI CENTRAL</option>
                                            <option value="220">FL-MIAMI NORTH</option>
                                            <option value="360">FL-TALLAHASSEE</option>
                                            <option value="400">FL-Pensacola</option>
                                            <option value="280">FL-OCALA</option>
                                            <option value="220">FL-Miami</option>
                                            <option value="330">FL-ORLANDO SOUTH</option>
                                            <option value="320">FL-ORLANDO</option>
                                            <option value="320">FL-Tampa</option>
                                            <option value="330">FL-PUNTA GORDA</option>
                                            <option value="355">FL-TAMPA SOUTH</option>
                                            <option value="320">FL-Orlando-North</option>
                                            <option value="230">FL-Miami-North (FL)</option>
                                            <option value="260">FL-WEST PALM BEACH</option>
                                            <option value="330">GA-ATLANTA NORTH</option>
                                            <option value="330">GA-ATLANTA WEST</option>
                                            <option value="330">GA-GA - MACON</option>
                                            <option value="355">GA-CARTERSVILLE</option>
                                            <option value="330">GA-EAST POINT</option>
                                            <option value="330">GA-GA - CRASHEDTOYS ATLANTA</option>
                                            <option value="330">GA-ATLANTA SOUTH</option>
                                            <option value="450">GA-FAIRBURN</option>
                                            <option value="330">GA-ATLANTA EAST</option>
                                            <option value="330">GA-MACON</option>
                                            <option value="230">GA-SAVANNAH</option>
                                            <option value="330">GA-TIFTON</option>
                                            <option value="330">GA-METTER GA SUBLOT</option>
                                            <option value="330">GA-Atlanta East</option>
                                            <option value="1960">HI-HONOLULU</option>
                                            <option value="655">IA-Davenport</option>
                                            <option value="680">IA-Des Moines</option>
                                            <option value="680">IA-DES MOINES</option>
                                            <option value="680">IA-CRASHEDTOYS ELDRIDGE</option>
                                            <option value="680">IA-DAVENPORT</option>
                                            <option value="710">ID-BOISE</option>
                                            <option value="750">ID-Boise</option>
                                            <option value="630">IL-Southern Illinois</option>
                                            <option value="630">IL-ALORTON</option>
                                            <option value="530">IL-CHICAGO WEST</option>
                                            <option value="580">IL-St. Louis</option>
                                            <option value="530">IL-CHICAGO SOUTH</option>
                                            <option value="530">IL-CHICAGO NORTH</option>
                                            <option value="655">IL-LINCOLN</option>
                                            <option value="610">IL-PEORIA</option>
                                            <option value="550">IL-Specialty Division</option>
                                            <option value="680">IL-LOUIS IL SUBLOT</option>
                                            <option value="530">IL-WHEELING</option>
                                            <option value="580">IN-CICERO</option>
                                            <option value="600">IN-DYER</option>
                                            <option value="560">IN-FORT WAYNE</option>
                                            <option value="555">IN-HAMMOND</option>
                                            <option value="605">IN-HARTFORD CITY</option>
                                            <option value="580">IN-INDIANAPOLIS</option>
                                            <option value="630">IN-South Bend</option>
                                            <option value="500">KS-KANSAS CITY</option>
                                            <option value="660">KS-WICHITA</option>
                                            <option value="580">KS-Wichita</option>
                                            <option value="630">KY-Ashland, KY</option>
                                            <option value="780">KY-Bowling Green, KY</option>
                                            <option value="630">KY-LOUISVILLE NORTH</option>
                                            <option value="580">KY-LEXINGTON WEST</option>
                                            <option value="580">KY-LEXINGTON EAST</option>
                                            <option value="630">KY-LOUISVILLE</option>
                                            <option value="700">KY-Paducah, KY</option>
                                            <option value="630">KY-Louisville</option>
                                            <option value="580">KY-WALTON</option>
                                            <option value="460">LA-Baton Rouge (LA)</option>
                                            <option value="455">LA-NEW ORLEANS</option>
                                            <option value="480">LA-TICKFAW LA SUBLOT</option>
                                            <option value="460">LA-BATON ROUGE</option>
                                            <option value="380">LA-Shreveport</option>
                                            <option value="380">LA-Lafayette</option>
                                            <option value="380">LA-NEW ORLEANS EAST</option>
                                            <option value="620">LA-NORTH SCOTT</option>
                                            <option value="355">LA-SHREVEPORT</option>
                                            <option value="380">MA-Taunton</option>
                                            <option value="380">MA-SOUTH BOSTON</option>
                                            <option value="380">MA-NORTH BOSTON</option>
                                            <option value="380">MA-Boston - Shirley</option>
                                            <option value="430">MA-Templeton (MA)</option>
                                            <option value="380">MA-WEST WARREN</option>
                                            <option value="405">MD-BALTIMORE EAST</option>
                                            <option value="355">MD-BALTIMORE</option>
                                            <option value="355">MD-Metro DC</option>
                                            <option value="355">MD-Dundalk</option>
                                            <option value="380">MD-Laurel</option>
                                            <option value="405">MD-BALTIMORE MD SUBLOT</option>
                                            <option value="380">MD-Rosedale</option>
                                            <option value="355">MD-WASHINGTON DC</option>
                                            <option value="405">MD-WHITE MARSH SUBLOT</option>
                                            <option value="380">MD-WHITE PLAINS</option>
                                            <option value="530">ME-Portland - Gorham</option>
                                            <option value="530">ME-GRAY ME SUBLOT</option>
                                            <option value="530">ME-LYMAN</option>
                                            <option value="630">ME-ORONO ME SUBLOT</option>
                                            <option value="780">MI-Great Lakes</option>
                                            <option value="630">MI-DETROIT</option>
                                            <option value="630">MI-Grand Rapids</option>
                                            <option value="630">MI-FLINT</option>
                                            <option value="630">MI-Flint</option>
                                            <option value="1005">MI-KINCHELOE</option>
                                            <option value="630">MI-LANSING</option>
                                            <option value="580">MI-IONIA</option>
                                            <option value="655">MN-ST. CLOUD</option>
                                            <option value="630">MN-MINNEAPOLIS</option>
                                            <option value="630">MN-CRASHEDTOYS MINNEAPOLIS</option>
                                            <option value="710">MN-HAM LAKE MN SUBLOT</option>
                                            <option value="655">MN-CRASHEDTOYS EAST BETHEL</option>
                                            <option value="630">MN-MINNEAPOLIS NORTH</option>
                                            <option value="630">MN-Minneapolis</option>
                                            <option value="630">MO-ST. LOUIS</option>
                                            <option value="630">MO-COLUMBIA</option>
                                            <option value="760">MO-SPRINGFIELD MO SUBLOT</option>
                                            <option value="730">MO-Kansas City East</option>
                                            <option value="630">MO-SPRINGFIELD</option>
                                            <option value="630">MO-SIKESTON</option>
                                            <option value="730">MO-Springfield</option>
                                            <option value="430">MS-BYRAM</option>
                                            <option value="480">MS-JACKSON</option>
                                            <option value="505">MS-Grenada</option>
                                            <option value="450">MS-Jackson</option>
                                            <option value="455">MS-Gulf Coast</option>
                                            <option value="930">MT-BILLINGS</option>
                                            <option value="1030">MT-Helena</option>
                                            <option value="980">MT-Missoula</option>
                                            <option value="355">NC-Wilmington</option>
                                            <option value="330">NC-Charlotte</option>
                                            <option value="330">NC-CHINA GROVE</option>
                                            <option value="355">NC-Raleigh</option>
                                            <option value="460">NC-CONCORD</option>
                                            <option value="380">NC-Concord</option>
                                            <option value="430">NC-LUMBERTON NC SUBLOT</option>
                                            <option value="380">NC-RALEIGH</option>
                                            <option value="390">NC-Asheville</option>
                                            <option value="460">NC-GASTONIA</option>
                                            <option value="380">NC-Greensboro</option>
                                            <option value="475">NC-NC - RALEIGH NORTH</option>
                                            <option value="380">NC-MEBANE</option>
                                            <option value="380">NC-MOCKSVILLE</option>
                                            <option value="980">ND-BISMARCK</option>
                                            <option value="980">ND-FARGO</option>
                                            <option value="755">NE-LINCOLN</option>
                                            <option value="730">NE-Omaha</option>
                                            <option value="480">NH-CANDIA</option>
                                            <option value="430">NH-Manchester</option>
                                            <option value="230">NJ-Avenel New Jersey</option>
                                            <option value="220">NJ-Northern New Jersey</option>
                                            <option value="225">NJ-Englishtown</option>
                                            <option value="305">NJ-GLASSBORO EAST</option>
                                            <option value="240">NJ-SOMERVILLE</option>
                                            <option value="230">NJ-Central New Jersey</option>
                                            <option value="230">NJ-Sayreville</option>
                                            <option value="280">NJ-Southern New Jersey</option>
                                            <option value="240">NJ-TRENTON</option>
                                            <option value="605">NM-ALBUQUERQUE</option>
                                            <option value="null">NV-LAS VEGAS</option>
                                            <option value="null">NV-RENO</option>
                                            <option value="355">NY-ALBANY</option>
                                            <option value="540">NY-BUFFALO</option>
                                            <option value="455">NY-Rochester</option>
                                            <option value="580">NY-BROCTON NY SUBLOT</option>
                                            <option value="330">NY-LONG ISLAND</option>
                                            <option value="530">NY-Buffalo</option>
                                            <option value="380">NY-SYRACUSE</option>
                                            <option value="400">NY-Syracuse</option>
                                            <option value="455">NY-ROCHESTER</option>
                                            <option value="330">NY-NEWBURGH</option>
                                            <option value="330">NY-Long Island</option>
                                            <option value="330">NY-Newburgh</option>
                                            <option value="355">NY-Albany</option>
                                            <option value="555">OH-Cincinnati-South</option>
                                            <option value="530">OH-CLEVELAND WEST</option>
                                            <option value="505">OH-Columbus</option>
                                            <option value="530">OH-COLUMBUS</option>
                                            <option value="530">OH-Dayton</option>
                                            <option value="505">OH-CLEVELAND</option>
                                            <option value="530">OH-DAYTON</option>
                                            <option value="480">OH-Akron-Canton</option>
                                            <option value="530">OH-CLEVELAND EAST</option>
                                            <option value="505">OH-Cincinnati</option>
                                            <option value="510">OK-OKLAHOMA CITY</option>
                                            <option value="500">OK-TULSA</option>
                                            <option value="1030">OR-EUGENE</option>
                                            <option value="480">PA-PITTSBURGH EAST</option>
                                            <option value="480">PA-Pittsburgh</option>
                                            <option value="305">PA-Bridgeport</option>
                                            <option value="300">PA-PHILADELPHIA EAST-SUBLOT</option>
                                            <option value="455">PA-CHAMBERSBURG</option>
                                            <option value="300">PA-Philadelphia</option>
                                            <option value="330">PA-SCRANTON</option>
                                            <option value="480">PA-ALTOONA</option>
                                            <option value="480">PA-PITTSBURGH NORTH</option>
                                            <option value="555">PA-Erie</option>
                                            <option value="405">PA-HARRISBURG</option>
                                            <option value="300">PA-PHILADELPHIA</option>
                                            <option value="300">PA-Philadelphia East (PA)</option>
                                            <option value="330">PA-Scranton</option>
                                            <option value="480">PA-PITTSBURGH SOUTH</option>
                                            <option value="405">PA-YORK HAVEN</option>
                                            <option value="380">PA-York Springs</option>
                                            <option value="405">RI-East Providence</option>
                                            <option value="405">RI-RI - EXETER</option>
                                            <option value="300">SC-COLUMBIA</option>
                                            <option value="330">SC-GREER</option>
                                            <option value="305">SC-SC - NORTH CHARLESTON</option>
                                            <option value="415">SC-Lexington</option>
                                            <option value="300">SC-Gaston, SC SUBLOT</option>
                                            <option value="305">SC-Charleston</option>
                                            <option value="380">SC-Greenville</option>
                                            <option value="355">SC-SPARTANBURG SUBLOT</option>
                                            <option value="920">SD-Sioux Falls</option>
                                            <option value="480">TN-Chattanooga</option>
                                            <option value="430">TN-KNOXVILLE</option>
                                            <option value="430">TN-NASHVILLE</option>
                                            <option value="505">TN-Memphis</option>
                                            <option value="455">TX-ABILENE</option>
                                            <option value="485">TX-Abilene</option>
                                            <option value="455">TX-AMARILLO</option>
                                            <option value="505">TX-ANDREWS</option>
                                            <option value="480">TX-EL PASO</option>
                                            <option value="530">TX-HASLET TX SUBLOT</option>
                                            <option value="355">TX-CORPUS CHRISTI</option>
                                            <option value="455">TX-Austin</option>
                                            <option value="305">TX-CRASHEDTOYS DALLAS</option>
                                            <option value="430">TX-MCALLEN</option>
                                            <option value="330">TX-DALLAS</option>
                                            <option value="330">TX-Dallas/Ft. Worth</option>
                                            <option value="330">TX-FT. WORTH</option>
                                            <option value="280">TX-HOUSTON</option>
                                            <option value="280">TX-Houston-North</option>
                                            <option value="355">TX-Fort Worth North</option>
                                            <option value="380">TX-LONGVIEW</option>
                                            <option value="525">TX-Lubbock</option>
                                            <option value="330">TX-LUFKIN</option>
                                            <option value="355">TX-AUSTIN</option>
                                            <option value="480">TX-Permian Basin</option>
                                            <option value="485">TX-ORMY TX SUBLOT</option>
                                            <option value="300">TX-Houston South (TX)</option>
                                            <option value="380">TX-SAN ANTONIO</option>
                                            <option value="380">TX-WACO</option>
                                            <option value="530">TX-ANTHONY TX SUBLOT</option>
                                            <option value="330">TX-WILMER TX SUBLOT</option>
                                            <option value="330">TX-Dallas</option>
                                            <option value="330">TX-DALLAS SOUTH</option>
                                            <option value="580">UT-OGDEN SUBLOT</option>
                                            <option value="630">UT-UT - SALT LAKE CITY</option>
                                            <option value="630">UT-SALT LAKE CITY</option>
                                            <option value="630">UT-Salt Lake City</option>
                                            <option value="430">VA-RICHMOND</option>
                                            <option value="480">VA-VA - RICHMOND EAST</option>
                                            <option value="530">VA-DANVILLE</option>
                                            <option value="480">VA-Culpeper</option>
                                            <option value="480">VA-VA - FREDERICKSBURG</option>
                                            <option value="380">VA-Fredericksburg</option>
                                            <option value="380">VA-Fredericksburg-South</option>
                                            <option value="380">VA-Northern Virginia</option>
                                            <option value="480">VA-HAMPTON</option>
                                            <option value="480">VA-Roanoke</option>
                                            <option value="530">VA-Pulaski</option>
                                            <option value="505">VA-Suffolk</option>
                                            <option value="420">VA-Tidewater</option>
                                            <option value="580">VT-Burlington</option>
                                            <option value="630">VT-ORLEANS VT SUBLOT</option>
                                            <option value="705">WA-NORTH SEATTLE</option>
                                            <option value="850">WA-Spokane</option>
                                            <option value="800">WA-Seattle South</option>
                                            <option value="750">WA-Seattle</option>
                                            <option value="655">WI-APPLETON</option>
                                            <option value="680">WI-Appleton</option>
                                            <option value="620">WI-MILWAUKEE</option>
                                            <option value="680">WI-MADISON</option>
                                            <option value="620">WI-MILWAUKEE NORTH</option>
                                            <option value="655">WI-Portage</option>
                                            <option value="610">WI-Milwaukee</option>
                                            <option value="680">WI-WAUKESHA WI SUBLOT</option>
                                            <option value="600">WV-Buckhannon</option>
                                            <option value="1500">WV-Casper</option>
                                            <option value="580">WV-CHARLESTON</option>
                                            <option value="605">WV-Shady Spring</option>
                                            <option value="1280">WY-Casper,Â WYÂ</option>
                                            <option value="1500">WY-Casper</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- AUCTION PRICE -->
                            <div>
                                <div class="name-2 _2">Ставка аукціону</div>
                                <div class="div-block-428">
                                    <input type="number" name="auction-sum" class="i _2 w-input" step="1" placeholder="$" id="price" required />
                                </div>
                            </div>

                            </div>
                            <!-- <input type="submit" value="Дізнатись вартість" data-wait="Please wait..." class="button _4-copy w-button" /> -->
                        </form>

                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="total-wrapper">
                            <span class="divider"></span>
                            <p class="total-title">Вартість розмитнення</p>
                            <span class="divider"></span>
                        </div>

                        <br>

                        <div class="amount-of-customs-payments-wrapper">
                            <div class="c-p-w">
                                <div class="customs-payments-wrapper">
                                    <div class="customs-payments-block">
                                        <p class="title">Вартість лоту</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description lot-amount">0</span>
                                        </div>
                                    </div>
                                    <div class="customs-payments-block">
                                        <p class="title">НДС</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description" id="nds">0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="customs-payments-wrapper">
                                    <div class="customs-payments-block">
                                        <p class="title">Акциз</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description" id="excise-tax">0</span>
                                        </div>
                                    </div>
                                    <div class="customs-payments-block">
                                        <p class="title">Мито</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description" id="duty" >0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="amount-of-customs-payments-total-wrapper">
                                <div class="customs-payments-total">
                                    <p class="title">Сума митних платежів</p>
                                    <div>
                                        <span class="total-sum">$</span>
                                        <span class="total-sum amount-of-customs-payments-total">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="total-wrapper">
                            <span class="divider"></span>
                            <p class="total-title">Вартість доставки</p>
                            <span class="divider"></span>
                        </div>

                        <br>

                        <div class="amount-of-customs-payments-wrapper">
                            <div class="c-p-w">
                                <div class="customs-payments-wrapper">
                                    <div class="customs-payments-block">
                                        <p class="title" style="width: 70%;">Доставка по Америці + порт призначення</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description" id="delivery">0</span>
                                        </div>
                                    </div>
                                    <div class="customs-payments-block">
                                        <p class="title">Експедитор + Брокер</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description" id="broker">800</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="amount-of-customs-payments-total-wrapper">
                                <div class="customs-payments-total">
                                    <p class="title">Вартість доставки</p>
                                    <div>
                                        <span class="total-sum">$</span>
                                        <span class="total-sum delivery-total">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="total-wrapper">
                            <span class="divider"></span>
                            <p class="total-title">Підсумкова вартість</p>
                            <span class="divider"></span>
                        </div>

                        <br>

                        <div class="amount-of-customs-payments-wrapper">
                            <div class="c-p-w">
                                <div class="customs-payments-wrapper">
                                    <div class="customs-payments-block">
                                        <p class="title">Вартість лоту</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description lot-amount">0</span>
                                        </div>
                                    </div>
                                    <div class="customs-payments-block">
                                        <p class="title">Експедитор + Брокер</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description" id="">800</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="customs-payments-wrapper">
                                    <div class="customs-payments-block">
                                        <p class="title">Вартість розмитнення</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description amount-of-customs-payments-total">0</span>
                                        </div>
                                    </div>
                                    <div class="customs-payments-block">
                                        <p class="title">Вартість доставки</p>
                                        <div>
                                            <span class="description">$</span>
                                            <span class="description delivery-total">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="amount-of-customs-payments-total-wrapper">
                                <div class="customs-payments-total">
                                    <p class="all-total-title">Підсумкова вартість з усіма платежами</p>
                                    <div>
                                        <span class="total-sum">$</span>
                                        <span class="total-sum" id="total-amount">0</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <button id="gpdf">Generate PDF</button>


                            <div id="PDFcontent" style="display: none;">
                                <h3>First PDF</h3>



                            <p>Content to be written in PDF can be placed in this DIV!</p>

                            </div> -->

                    </div>
                </div>
            </div>
        </div>
        <div id="6" class="section-4 wf-section">
            <div class="z">
                <div class="w-layout-grid grid-28">
                    <div>
                        <p class="heading _2-copy font-weight">Відповіді на<span class="text-span">поширені питання</span></p>
                        <div class="div-block-41">
                            <div class="vopros-znak"> ?</div>
                            <div class="vopros-znak-copy"> ?</div>
                            <div class="_534"> ?</div>
                        </div>
                    </div>
                    <div class="div-block-425">
                        <div data-hover="false" data-delay="0" data-w-id="7d6c7909-2a2d-3645-5b24-d16201d88667" class="dropdown-10 w-dropdown">
                            <div class="dropdown-toggle-14 w-dropdown-toggle">
                                <div class="name-2">Як довго відбувається доставка авто зі США до України?</div>
                                <div class="plus-bg">
                                    <div class="line-first"></div>
                                    <div class="line-vertical"></div>
                                </div>
                            </div>
                            <nav style="height:0px" class="dropdown-list-13 w-dropdown-list">
                                <div class="otvet">Все залежить від морської доставки. На неї впливає як погодні умови, так і сам маршрут та з якого порту була відвантаження. <br>Мінімально 40 днів. Також впливає який у Вас тайтл (техпаспорт), скільки часу піде на підготовку документів.</div>
                            </nav>
                        </div>
                        <div data-hover="false" data-delay="0" data-w-id="e229c504-4ae2-9fa1-edf7-40c35fae1c21" class="dropdown-10 w-dropdown">
                            <div class="dropdown-toggle-14 w-dropdown-toggle">
                                <div class="name-2">Чи всі автомобілі можна купувати у США на аукціоні?</div>
                                <div class="plus-bg">
                                    <div class="line-first"></div>
                                    <div class="line-vertical"></div>
                                </div>
                            </div>
                            <nav style="height:0px" class="dropdown-list-13 w-dropdown-list">
                                <div class="otvet">Можна відповісти, що все можна купити, але багато залежить який у Вас доступ на аукціон, публічний або дилерський, і не з кожним тайтлом можна експортувати автомобіль.</div>
                            </nav>
                        </div>
                        <div data-hover="false" data-delay="0" data-w-id="898a5608-af10-f66c-ee7b-573681be63b2" class="dropdown-10 w-dropdown">
                            <div class="dropdown-toggle-14 w-dropdown-toggle">
                                <div class="name-2">У чому різниця дилерських та публічних облікових записів?</div>
                                <div class="plus-bg">
                                    <div class="line-first"></div>
                                    <div class="line-vertical"></div>
                                </div>
                            </div>
                            <nav style="height:0px" class="dropdown-list-13 w-dropdown-list">
                                <div class="otvet">З дилерського акаунту Ви на 75% бачите більше лотів, що продаються.</div>
                            </nav>
                        </div>
                        <div data-hover="false" data-delay="0" data-w-id="ea48345f-e5fe-faad-83d3-889cac5450b0" class="dropdown-10 w-dropdown">
                            <div class="dropdown-toggle-14 w-dropdown-toggle">
                                <div class="name-2">Навіщо береться завдаток при замовленні автомобіля?</div>
                                <div class="plus-bg">
                                    <div class="line-first"></div>
                                    <div class="line-vertical"></div>
                                </div>
                            </div>
                            <nav style="height:0px" class="dropdown-list-13 w-dropdown-list">
                                <div class="otvet">На аукціонах існує правило: якщо протягом 8 діб, включаючи день продажу, не викупив машину, отримуєш штраф 600$ або 10% від вартості ставки лота.</div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-6 wf-section">
            <div class="z">
                <div class="w-layout-grid footer-grid-02">
                    <div id="w-node-acb0a199-48cc-9a36-90e0-45401bb77779-f26ffbd0" class="footer-column _1"><a href="index.html" aria-current="page" class="brand w-nav-brand w--current"><img src="img/ua2.svg" loading="lazy" alt="" class="image _2" /></a>
                        <div class="text-rights">Copyright © 2021. Plum. <br />Підбір та доставка авто з Америки</div>
                    </div>
                    <div id="w-node-acb0a199-48cc-9a36-90e0-45401bb7777d-f26ffbd0" class="footer-column _1-copy">
                        <a href="index.html" class="footer-link-dark">Головна</a>
                        <a href="#1" class="footer-link-dark">Вигоди</a>
                        <a href="#6" class="footer-link-dark">Питання-Відповідь</a>
                        <a href="#3" class="footer-link-dark">Наші основні можливості</a>
                        <a href="#4" class="footer-link-dark">Індивідуальний підбір автомобіля</a>
                    </div>
                    <div id="w-node-_85a8e188-a111-3e6a-b263-adee7b2e0ce7-f26ffbd0" class="footer-column"><a href="tel:+380997777693" class="phone-mini _2-copy">+38 (099) 777-76-93</a></div>
                    <div id="w-node-_781f6740-28a3-5a42-1517-7f2f1938296a-f26ffbd0" class="footer-column"><a href="tel:+380967870429" class="phone-mini _2-copy">+38 (096) 787-04-29</a><a href="mailto:lsa9art@gmail.com?subject=%D0%91%D0%B5%D1%81%D0%BF%D0%BB%D0%B0%D1%82%D0%BD%D0%B0%D1%8F%20%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8F" class="link-2">lsa9art@gmail.com</a><a href="#" class="button _3 w-button" data-ix="open-lb-and-box-button">Передзвоніть мені</a></div>
                    <div id="w-node-fac3b202-5958-8f64-0597-9b7d17d36aad-f26ffbd0" class="footer-bottom">
                        <div class="footer-wrapper"><a href="privacy.html" target="_blank" class="secondary-link-dark">Політика конфіденційності</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>


<script>
$('.777').mask('+380 (99) 999-99-99');

$.fn.setCursorPosition = function(pos) {
  if ($(this).get(0).setSelectionRange) {
    $(this).get(0).setSelectionRange(pos, pos);
  } else if ($(this).get(0).createTextRange) {
    var range = $(this).get(0).createTextRange();
    range.collapse(true);
    range.moveEnd('character', pos);
    range.moveStart('character', pos);
    range.select();
  }
};

$('input[type="tel"]').click(function(){
    $(this).setCursorPosition(4);  // set position number
  });
</script>

<script type="text/javascript">
    ! function(o, c) { var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);
    </script>

    <script type="text/javascript">
    WebFont.load({ google: { families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"] } });
    </script>

</body>

</html>
