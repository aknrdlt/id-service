<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/adaptive.css')}}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
	<title>IG Service</title>
</head>
<body>

	<div class="page">

		<div class="header">

			<div class="header_inner">

				<div class="container">

					<div class="header_use">

						<div class="logo">
							<img src="{{asset('img/logo.png')}}">
						</div>

						<div class="header_burger">

							<span></span>

						</div>

						<div class="header_nav">
                            <div class="nav_item"><a href="/">{{$menu[1]['word_' . app() -> getLocale()]}}</a></div>
                            <div class="nav_item"><a href="/services">{{$menu[3]['word_' . app() -> getLocale()]}}</a></div>
                            <div class="nav_item"><a href="/work">{{$menu[2]['word_' . app() -> getLocale()]}}</a></div>
                            <div class="nav_item active_home"><a href="/contacts">{{$menu[0]['word_' . app() -> getLocale()]}}</a></div>
						</div>

						<div class="language">
                            <h1 style="text-transform: uppercase">{{ Config::get('app.locale') }}</h1>
							<div class="triangle"></div>

							<div class="language_switch">

                                <div class="ru"><a href="locale/ru">ru</a></div>

								<div class="en"><a href="locale/en">en</a></div>

								<div class="ch"><a href="locale/ch">ch</a></div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="header_contacts">

				<div class="container">

					<div class="contacts_text">

						<h1>{{$contactPage[0]['word_' . app() -> getLocale()]}}</h1>

						<span>{{$contactPage[1]['word_' . app() -> getLocale()]}}</span>

					</div>

				</div>

			</div>

		</div>

		<div class="container">

				<div class="section_contacts">

					<div class="phone">
						<h1><strong>{{$details[9]['word_' . app() -> getLocale()]}}</strong></h1>
						<span>{{$contacts -> phone_1}}</span>
						<span>{{$contacts -> phone_2}}</span>
					</div>

					<div class="contacts_mail">

						<h1><strong>E-mail</strong></h1>

						<span>{{$contacts -> website}}</span>

					</div>

					<div class="address">

						<h1><strong>{{$details[8]['word_' . app() -> getLocale()]}}</strong></h1>

						<span>{{$contacts -> address}}</span>

					</div>

				</div>

			</div>

			<div class="contacts_map">

				<div class="container">

					<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.032803592252!2d76.87156941544565!3d43.22977187913813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836907390bda6b%3A0x2d57254ab8db6cbf!2z0YPQu9C40YbQsCDQm9Cw0LfQsNGA0LXQstCwLCDQkNC70LzQsNGC0YsgMDUwMDAw!5e0!3m2!1sru!2skz!4v1626769841070!5m2!1sru!2skz" width="1109px" height="589px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

				</div>

			</div>

        <div class="container">

            <div class="form">

                <div class="form_table">

                    <div class="form_input">
                        <div class="form_text">{{$details[7]['word_' . app() -> getLocale()]}}</div>

                        <div class="form_input_items">

                            <input class="form_input_item" type="text" placeholder="{{$details[5]['word_' . app() -> getLocale()]}}">
                            <input class="form_input_item" type="text" placeholder="{{$details[6]['word_' . app() -> getLocale()]}}">
                            <input class="form_input_item" type="text" placeholder="E-mail">
                            <div class="form_btn"><a class="btn" href="#">{{$details[0]['word_' . app() -> getLocale()]}}</a></div>

                        </div>
                    </div>
                    </div>

                </div>

            </div>

        </div>

        <footer>

            <div class="container">
                <div class="footer_inner">
                    <div class="footer_info">
                        <img class="footer_logo" src="{{asset('img/logo.png')}}">
                        <div class="f_text">{{$details[3]['word_' . app() -> getLocale()]}}</div>
                        <div class="social">
                            <div class="social_item"><a href="{{$contacts -> facebook}}"><img src="{{asset('img/face.png')}}"></a></div>
                            <div class="social_item"><a href="{{$contacts -> instagram}}"><img src="{{asset('img/inst.png')}}"></a></div>
                            <div class="social_item"><a href="{{$contacts -> youtube}}"><img src="{{asset('img/yt.png')}}"></a></div>
                        </div>
                    </div>

                    <div class="footer_navigation">
                        <h1 class="footer_nav_text">{{$details[2]['word_' . app() -> getLocale()]}}</h1>

                        <div class="footer_nav">

                            <div class="nav_block">
                                <a href="/">{{$menu[1]['word_' . app() -> getLocale()]}}</a>
                                <a href="/services">{{$menu[3]['word_' . app() -> getLocale()]}}</a>
                            </div>

                            <div class="nav_block">
                                <a href="/work">{{$menu[2]['word_' . app() -> getLocale()]}}</a>
                                <a href="/contacts">{{$menu[0]['word_' . app() -> getLocale()]}}</a>
                            </div>

                        </div>

                    </div>

                    <div class="footer_contacts">
                        <h1 class="footer_contacts_head">{{$menu[0]['word_' . app() -> getLocale()]}}</h1>
                        <div class="numbers">
                            <a href="#">{{$contacts -> phone_1}}</a>
                            <a href="#">{{$contacts -> phone_2}}</a>
                        </div>
                        <div class="mail"><a href="{{$contacts -> website}}">{{$contacts -> website}}</a></div>
                    </div>

                </div>

                <hr class="footer_line">

                <div class="rights">{{$details[4 ]['word_' . app() -> getLocale()]}}</div>

            </div>

        </footer>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
