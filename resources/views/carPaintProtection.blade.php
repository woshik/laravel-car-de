@extends('layouts.app')

@section('title')
    <title>Steinschlagschutzfolie von | Folientechnik Schweiz</title>
@endsection

@section('meta')
    <meta name="keywords" content="steinschlagschutzfolie" />
    <meta name="description" content="Steinschlagschutzfolie der neuen Generation! Schütze Dein Auto vor Steinschlag! ✅ Selbstheilungseffekt! ✅ 100% Steinschlagschutz » | Folientechnik Schweiz"/>
@endsection

@section('style-file')
    <link rel="stylesheet" href="{{ mix('/css/car_paint_protection.css') }}">
@endsection

@section('content')
    <video
        src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/video/techart-gt-street.mp4"
        autoplay muted loop autoplay id="myVideo"></video>

    <header class="header">
        <div class="header-content-box">
            <h1 class="h1 sup-bold-Italic">
                Lackschutzfolie
            </h1>
            <p class="h5 sup-light">
                Wir schützen deine Investition...
            </p>
        </div>
    </header>

    <div class="background-website">
        <div class="box-container">
            <div class="header-container">
                <h1 class="zag text-center">STEINSCHLAGSCHUTZFOLIE</h1>
                <p class="sup-light text-center">unauffällig aber mit grosser Wirkung!</p>
            </div>
            <hr class="underline" />
            <div class="text-center">
                <p class="zag mb-4 heading">Unsichtbarer Retter in der Not: Steinschlagschutzfolie kann Ihr Auto vor erheblichen Schäden schützen.</p>
                <p class="p-reg roboto-regular mb-4">Manchmal passiert es schneller, als man hinschauen kann. Während der Autofahrt wird auf der Strasse Schmutz vom Vordermann aufgewirbelt und kleine Steinchen prallen mit erheblicher Wucht auf Ihr Auto. Beim Aussteigen erwartet Sie folgendes Bild:</p>
               
                <p class="zag mb-4 heading">Auf dem Lack Ihres Wagens zieren nun unschöne Kratzer und Steinschläge!</p>
                <p class="p-reg roboto-regular mb-4">Anderes Szenario, gleiches Ergebnis: Einmal nicht aufgepasst und der Schlüsselbund schlägt beim Einsteigen gegen die Autotür. Die Folge sind optische Mängel und vor allem der Wertverlust Ihres Wagens. Auch Leute, die Kinder haben und diese von A nach B bringen müssen, werden das Problem kennen.</p>
                
                <p class="zag mb-4 heading">Lackschäden können schon in Momenten kleinster Unaufmerksamkeit entstehen.</p>
                <p class="p-reg roboto-regular mb-4">Doch was, wenn es ein probates Mittel gegen diese Problematik gäbe, welches obendrein Ihr Fahrzeug zum Strahlen bringt? Mit einer Steinschlagschutzfolie können Sie die Angst vor Lackschäden getrost zu den Akten legen.</p>
                
                <p class="p-reg roboto-regular">Im Folgenden klären wir Sie über die Wirksamkeit und Beschaffenheit der Steinschlagschutzfolie aus unserem Hause näher auf.</p>
            </div>
            <hr class="underline" />
        </div>
    </div>

    <div class="background-website">
        <div class="box-container">
            <div class="header-container">
                <h2 class="zag text-center">STEINSCHLAGSCHUTZFOLIE - Wissenswerte Details</h2>
            </div>
            <hr class="underline" />
            <div class="text-center">
                <p class="p-reg roboto-regular mb-4">Steinschlagschutzfolie ist eine transparente Folie, die auf bestimmten Fahrzeugteilen oder auf das komplette Fahrzeug angebracht wird,</p>

                <p class="zag mb-4 heading">um sie vor möglichen Schäden zu schützen.</p>
                <p class="p-reg roboto-regular mb-4">Ihr Wirkungsbereich ist dabei vielfältig. Steinschlagschutzfolie schützt, wie ihr Name schon sagt, vor Steinschlägen und Kratzern, aber auch vor Salzablagerungen, die sich vor allem zur Winterzeit häufig in den Lack fressen können.</p>
               
                <p class="zag mb-4 heading">Ihre selbstheilende Oberfläche lässt Waschanlagenkratzer einfach verschwinden.</p>
                <p class="p-reg roboto-regular mb-4">Wir von Folientechnik Schweiz setzen auf Steinschlagschutzfolien aus Polyurethan, einem Material, das wegen seiner hohen Dehnbarkeit bevorzugt benutzt wird. Es bietet die Möglichkeit, die Folie gleichmässig auf der Oberfläche des Fahrzeugs anzubringen, ohne, dass optisch ein Unterschied zu erkennen wäre.</p>
                
                <p class="zag mb-4 heading">Ihr Auto glänzt, als wäre es frisch aus dem Werk, das ein Autoleben lang.</p>
                <p class="p-reg roboto-regular mb-4">Dabei ist es wichtig, darauf zu achten, dass hochwertige Folie verwendet wird, da diese sich nicht durch Sonneneinstrahlung verfärben kann. Wird die Steinschlagschutzfolie beispielsweise auf dem Heck aufgetragen, werden Sie auch nach längerer Zeit keinen Farbunterschied zum Rest des Autos wahrnehmen.</p>
            </div>
            <hr class="underline" />
        </div>
    </div>

    <div class="background-website">
        <div style="margin-bottom: 35px;">
            <h2 class="zag text-center">Steinschlagschutzfolie</h2>
            <p class="sup-light text-center">der neuen Generation!</p>
        </div>
        <div class="wrapper">
            <div class="div-table">
                <div class="row-4 d-flex flex-column align-items-center m-b-32">
                    <span class="name-icon-box">100% Steinschlagschutz</span>
                    <img class="info-icon" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/rocket-icon.svg" alt="rocket" />
                    <span class="name-icon-box">ROCK SOLID TOPCOAT</span>
                    <span class="name-icon-box box-icon-custom">Besonders robuste
                        Oberflache</span>
                </div>
                <div class="row-4 d-flex flex-column align-items-center m-b-32">
                    <span class="name-icon-box">Selbstheilungseffekt</span>
                    <img class="info-icon" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/heart-icon.svg" alt="heart" />
                    <span class="name-icon-box">INSTANT SELF HEALING</span>
                    <span class="name-icon-box box-icon-custom">Selbstheilung bei
                        Raumtemperatur</span>
                </div>
                <div class="row-4 d-flex flex-column align-items-center m-b-32">
                    <span class="name-icon-box">Hydrophope oberfäche</span>
                    <img class="info-icon" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/drop-icon.svg" alt="drop" />
                    <span class="name-icon-box">EXTREM HYDROPHOB</span>
                    <span class="name-icon-box box-icon-custom">Oberflache wie
                        nanoversiegelt</span>
                </div>
                <div class="row-4 d-flex flex-column align-items-center m-b-32">
                    <span class="name-icon-box">Super Flexibel - 3D verlegbar</span>
                    <img class="info-icon" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/icon/web-icon.svg" alt="web" />
                    <span class="name-icon-box">DRIVEN TO DELIGHT</span>
                    <span class="name-icon-box box-icon-custom">Support &amp;
                        Kundenservice</span>
                </div>
            </div>
        </div>
    </div>

    <div class="background-website">
        <div class="box-container">
            <div class="header-container">
                <h2 class="zag text-center">Steinschlagschutzfolie oder Lackschutzfolie - wo liegt der Unterschied?</h2>
            </div>
            <hr class="underline" />
            <div class="text-center">
                <p class="p-reg roboto-regular mb-4">Bei der Folierungstechnik unterscheidet man zwischen Steinschlagschutzfolie und Lackschutzfolie.</p>

                <p class="zag mb-4 heading">Beide schützen effektiv den Lack des Autos,</p>
                <p class="p-reg roboto-regular mb-4">doch die Steinschlagschutzfolie ist im Gegensatz zur Lackschutzfolie um einiges dicker und schützt dementsprechend besser vor Fremdeinwirkungen. Man trägt sie nur auf bestimmten Bereichen des Autos auf, die besonders durch Steinschlag gefährdet sind. Dazu zählt insbesondere das Heck. Deshalb sind Steinschlagschutzfolien immer UV-durchlässig,</p>
               
                <p class="zag mb-4 heading">um einer ungleichmässigen Verfärbung des Lacks durch Sonneneinstrahlung entgegenzuwirken.</p>
                <p class="p-reg roboto-regular mb-4">Bei Lackschutzfolien, die meist auf der gesamten Karosserie aufgetragen werden,existieren hier auch Folienarten mit UV-Schutz. Das Sonnenlicht gelangt nicht bis zum Lack und die Farbe bleibt erhalten.</p>
            </div>
            <hr class="underline" />
        </div>
    </div>

    <div class="background-website">
        <section class="section-main-garant custom-slider-style">
            <div class="slick-slider">
                <div>
                    <a href="https://www.xpel.com/" target="_blank" rel="nofollow">
                        <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/brand/XPEL_White.png" alt="xpel" />
                    </a>
                </div>
                <div>
                    <a href="https://www.hexis-graphics.com/" target="_blank" rel="nofollow">
                        <img src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/brand/bodyfencelong.png" alt="bodyfence" />
                    </a>
                </div>

                <div>
                    <a href="https://www.premiumshield.de/" target="_blank" rel="nofollow">
                        <img class="image-22" src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/brand/LogoPMS.png" alt="premiumshield">
                    </a>
                </div> 
            </div>
        </section>
    </div>

    <div class="background-website">
        <div class="box-container">
            <div class="header-container">
                <h2 class="zag text-center">Auf welchen Bereichen des Autos lohnt sich eine Steinschlagschutzfolie?</h2>
            </div>
            <hr class="underline" />
            <div class="text-center">
                <p class="p-reg roboto-regular mb-4">Bei den Anwendungsbereichen der Steinschlagschutzfolie gilt: Besonders gefährdete Bereiche sollten geschützt werden. Dazu zählen zum Beispiel die</p>

                <p class="zag mb-4 heading">Motorhaube, Stossstange, aber auch Kotflügel</p>
                <p class="p-reg roboto-regular mb-4">die oft einiges mitmachen müssen. Werden Schmutz oder kleine Steine aufgewirbelt, kann es bei hoher Geschwindigkeit auf diesen Autoteilen zu Kratzern und Dellen kommen.</p>
                <p class="p-reg roboto-regular mb-4">Auch die Aussenspiegel werden es Ihnen danken, wenn sie das nächste Mal beim Ausparken an einer Mauer entlangschrammen. Wenn Sie oft schwere Gegenstände beim Transport ein- und ausladen, kann sich eine Steinschlagschutzfolie auch an den Ladekanten, Seitenschwellern oder Türkanten lohnen.</p>
            </div>
            <hr class="underline" />
        </div>
    </div>

    <div class="background-website">
        <h2 class="zag" style="text-align: center;">Lackschutzpakete</h2>
        <section class="section-range-tonirovka">
            <div class="wrapper">
                <div class="box-left-image-right-text">
                    <div class="row box-left-image-right-text__img"
                        style="display: flex;justify-content: center;align-items: center;">
                        <img class="box-left-image-right-text__img tonirovka-fon"
                            src="https://raw.githubusercontent.com/woshik/laravel-car-de/main/public/images/slider/ppf-1.png" />
                    </div>
                    <div class="row display-flex-center">
                        <div class="tonirovka-info-box"
                            style="align-items: flex-start;height: 25rem;justify-content: space-between;box-sizing: border-box;">
                            <div class="tonirovka-name">
                                Im Paket inbegriffen
                            </div>
                            <div class="range-text ppf-info-box">
                                <p class="ppf-info"> - Motorhaube</p>
                                <p class="ppf-info"> - Stossstange vorne</p>
                                <p class="ppf-info"> - Spiegelkappen</p>
                            </div>
                            <a href="javascript:void(0)" onclick="openContactModal()"
                                class="blue-btn-form range-modal-form-btn">
                                Termin zur Beratung
                            </a>
                        </div>
                    </div>
                </div>
                <div id="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%"></span>
                    <div class="name-slider-range-col number-col-slider-1" style="left: 0%">
                        <i>Frontschutz<br />light</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-2" style="left: 33.33333%">
                        <i>Frontschutz<br />Standart</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-3" style="left: 66.666666%">
                        <i>Frontschutz<br />Premium</i>
                    </div>
                    <div class="name-slider-range-col number-col-slider-4" style="left: 99.999999%">
                        <i>Frontschutz<br />Folierung</i>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="background-website">
        <div class="box-container">
            <div class="header-container">
                <h2 class="zag text-center">Alle Vorteile einer Steinschlagschutzfolie für Sie zusammengefasst</h2>
            </div>
            <hr class="underline" />
            <div class="p-reg roboto-regular list-style list-center">
              <ul>
                  <li>Unschlagbarer Schutz fur Ihr Auto vor Lackschaden</li>
                  <li>Keine optische Veranderung, unsichtbar</li>
                  <li>Selbstheilungseffekt - Lotuseffekt</li>
                  <li>Erleichterte Reinigung, es werden weniger Schmutzpartikel angezogen</li>
                  <li>Hohe Elastizitat sorgt für perfekte Montage vom Profi auch an gewolbten Teilen</li>
                  <li>Waschanlagenfest - fahren Sie gewohnt durch die Waschanlage, ohne Kratzer</li>
                  <li>Keine Verfarbung der Folie durch UV-Einstrahlung</li>
                  <li>lange Haltbarkeit - 10 Jahre Garantie bei Folientechnik-Schweiz</li>
              </ul>
            </div>
            <hr class="underline" />
        </div>
    </div>

    <div class="background-website">
        <div class="box-container">
            <div class="header-container">
                <h3 class="zag text-center">Sie sind noch unschlüssig, ob eine Steinschutzfolie das Richtige für Ihr Auto ist?</h3>
            </div>
            <hr class="underline" />
            <div class="p-reg roboto-regular text-center">
              <p>Entscheiden Sie sich noch heute für einen optimalen Schutz von den Folientechnikern aus Zürich! Sie werden den Unterschied zwar nicht
                sehen, aber merken. Angst vor Lackschäden können mit dem fachgerechten Auftrag einer Steinschlagschutzfolie der Vergangenheit an.
                Nehmen Sie gerne Kontakt zu uns auf. Wir von Folientechnik Schweiz beraten Sie gerne bei der Wahl der richtigen Folierung und dem passenden
                Anwendungsgebiet auf Ihrem Auto</p>
            </div>
            <hr class="underline" />
        </div>
    </div>

    @include('partials.contactForm')
@endsection


@section('script-file')
    <script src="{{ mix('/js/car_paint_protection.js') }}"></script>
@endsection
