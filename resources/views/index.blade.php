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
							<div class="nav_item active_home"><a href="/">{{$menu[1]['word_' . app() -> getLocale()]}}</a></div>
							<div class="nav_item"><a href="/services">{{$menu[3]['word_' . app() -> getLocale()]}}</a></div>
							<div class="nav_item"><a href="/work">{{$menu[2]['word_' . app() -> getLocale()]}}</a></div>
							<div class="nav_item"><a href="/contacts">{{$menu[0]['word_' . app() -> getLocale()]}}</a></div>
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

			<div class="header_content">

				<div class="container">

					<div class="header_text">

						<h2>{{$welcome[0]['word_' . app() -> getLocale()]}}</h2>

                        <h1>{{$welcome[1]['word_' . app() -> getLocale()]}}</h1>

						<span>{{$welcome[2]['word_' . app() -> getLocale()]}}</span>

					</div>

				</div>

			</div>

		</div>

		<div class="work">

			<div class="container">

				<div class="work_text">{{$about[0]['word_' . app() -> getLocale()]}}</div>

				<div class="work_text_adap">{{$about[0]['word_' . app() -> getLocale()]}}</div>


				<div class="work_items">

					<div class="work_item">
						<img src="{{asset('img/work-item-1.png')}}">
						<h1>{{$about[1]['word_' . app() -> getLocale()]}}</h1>
                        <h2>{{$about[2]['word_' .app() -> getLocale()]}}</h2>
					</div>
					<div class="work_item">
						<img src="{{asset('img/work-item-2.png')}}">
						<h1>{{$about[3]['word_' . app() -> getLocale()]}}</h1>
                        <h2>{{$about[4]['word_' . app() -> getLocale()]}}</h2>
					</div>
					<div class="work_item">
						<img src="{{asset('img/work-item-3.png')}}">
						<h1>{{$about[5]['word_' . app() -> getLocale()]}}</h1>
                        <h2>{{$about[6]['word_' .app() -> getLocale()]}}</h2>
					</div>

				</div>

			</div>

		</div>

		<div class="team">

			<div class="team_inner">

				<img class="team_img" src="{{asset('img/team.jpg')}}">

				<div class="container">

					<div class="team_text">
						<h2>{{$services[0]['title1_' .app() -> getLocale()]}}</h2>
						<h1>{{$services[0]['title2_' . app() -> getLocale()]}}</h1>
                        <span>{{$services[0]['desc_' . app() -> getLocale()]}}</span>
					</div>

					<div class="team_btn"><a class="t_btn" href="{{$services[0]['link_' .app() -> getLocale()]}}">{{$details[1]['word_' . app() -> getLocale()]}}</a></div>

				</div>

			</div>

			<div class="team_inner">

				<div class="container">


                    <div class="team_text">
                        <h2>{{$services[1]['title1_' . app() -> getLocale()]}}</h2>
                        <h1>{{$services[1]['title2_' .app() -> getLocale()]}}</h1>
                        <span>{{$services[1]['desc_' . app() -> getLocale()]}}</span>
                    </div>

                    <div class="team_btn"><a class="t_btn" href="{{$services[1]['link_' . app() -> getLocale()]}}">{{$details[1]['word_' . app() -> getLocale()]}}</a></div>

                </div>

				<img class="team_img" src="{{asset('img/building.jpg')}}">

			</div>

		</div>

		<div class="container">

			<div class="how_work">

				<div class="section_1">

					<h1>{{$work[0]['word_' .app() -> getLocale()]}}</h1>

						<div class="how_work_text">
							<div class="top">{{$work[1]['word_' .app() -> getLocale()]}}</div>

							<div class="bottom">{{$work[2]['word_' . app() -> getLocale()]}}</div>

						</div>

					<img src="{{asset('img/how-work-img.jpg')}}">

				</div>
				<div class="section_2">

					<div class="hw-items">

						<div class="hw-item">

							<div class="numeration">
								<div class="round"></div>
								<h1>1</h1>
							</div>

							<h2>{{$work[3]['word_' . app() -> getLocale()]}}</h2>
						</div>
						<div class="hw-item">
							<div class="numeration">
								<div class="round"></div>
								<h1>2</h1>
							</div>
							<h2>{{$work[4]['word_' . app() -> getLocale()]}}</h2>
						</div>
						<div class="hw-item">
							<div class="numeration">
								<div class="round"></div>
								<h1>3</h1>
							</div>
							<h2>{{$work[5]['word_' . app() -> getLocale()]}}</h2>
						</div>
						<div class="hw-item">
							<div class="numeration">
								<div class="round"></div>
								<h1>4</h1>
							</div>
							<h2>{{$work[6]['word_' . app() -> getLocale()]}}</h2>
						</div>

					</div>

				</div>

				<div class="mobile_hw">

					<div class="hw-items">

						<div class="hw-item">

							<div class="numeration">
								<div class="round"></div>
								<h1>1</h1>
							</div>

							<h2>{{$work[3]['word_' . app() -> getLocale()]}}</h2>
						</div>
						<div class="hw-item">
							<div class="numeration">
								<div class="round"></div>
								<h1>2</h1>
							</div>
							<h2>{{$work[4]['word_' . app() -> getLocale()]}}</h2>
						</div>
						<div class="hw-item">
							<div class="numeration">
								<div class="round"></div>
								<h1>3</h1>
							</div>
							<h2>{{$work[5]['word_' . app() -> getLocale()]}}</h2>
						</div>
					</div>

					<img src="{{asset('img/how-work-img.jpg')}}">

				</div>

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
