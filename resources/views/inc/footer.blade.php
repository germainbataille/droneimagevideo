<footer class="footer-distributed">
			<div class="footer-left">
				<img src="{{ asset("storage/images/logo.png") }}" />
				<p class="footer-links">
					<a style="{{ Request::is('/') ? 'color: #3490dc;' : ''}}" href="/">Accueil</a>
					·
					<a style="{{ Request::is('albums') ? 'color: #3490dc;' : ''}}" href="{{ route('albums') }}">Photos</a>
					·
					<a style="{{ Request::is('albumsvideos') ? 'color: #3490dc;' : ''}}" href="{{ route('albumsvideos') }}">Vidéos</a>
					·
					<a style="{{ Request::is('apropos') ? 'color: #3490dc;' : ''}}" href="{{ route('apropos') }}">À propos</a>
					·
					<a style="{{ Request::is('contact') ? 'color: #3490dc;' : ''}}" href="{{ route('contact') }}">Contact</a>
				</p>
				<p class="footer-company-name">droneimagevideo.com © 2020</p>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>5817 7e avenue</span> Montréal, Québec</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>514-560-3774</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:dronediv@gmail.com">dronediv@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>À propos</span>
					Professionnels de photos et vidéos de drônes.
				</p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/Droneimagevideo-100434834824032/"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
				</div>
			</div>
		</footer>
