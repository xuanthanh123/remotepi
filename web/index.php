<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Remote PI - GPIO</title>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <h3>Remote PI</h3>
    <div id="gpio_pins">
        <ul>
            <li>
                <div class="pins" id="pin01">
                    <div id="durum-pasif"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-red" id="pin02">
                    <div id="durum2-pasif"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-blue" id="pin03">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-red" id="pin04">
                    <div id="durum2-pasif"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-blue" id="pin05">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-black" id="pin06">
                    <div id="durum2-pasif"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin07">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-orange" id="pin08">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-black" id="pin09">
                    <div id="durum-pasif"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-orange" id="pin10">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin11">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-green" id="pin12">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin13">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-black" id="pin14">
                    <div id="durum2-pasif"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin15">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-green" id="pin16">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-darkred" id="pin17">
                    <div id="durum-pasif"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-green" id="pin18">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-purple" id="pin19">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-black" id="pin20">
                    <div id="durum2-pasif"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-purple" id="pin21">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-green" id="pin22">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-purple" id="pin23">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-purple" id="pin24">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-black" id="pin25">
                    <div id="durum-pasif"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-purple" id="pin26">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-yellow" id="pin27">
                    <div id="durum-pasif"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-yellow" id="pin28">
                    <div id="durum2-pasif"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin29">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-black" id="pin30">
                    <div id="durum2-pasif"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin31">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-green" id="pin32">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin33">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-black" id="pin34">
                    <div id="durum2-pasif"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin35">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-green" id="pin36">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-green" id="pin37">
                    <div id="durum"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-green" id="pin38">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
            <li>
                <div class="pins pin-black" id="pin39">
                    <div id="durum-pasif"></div>
                    <span id="o"></span>
                </div>
                <div class="pins pin-green" id="pin40">
                    <div id="durum2"></div>
                    <span id="o"></span>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>