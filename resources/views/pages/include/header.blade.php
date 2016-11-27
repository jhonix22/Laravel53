@if (Route::has('login'))
                <div class="row">
               		 <div class="links">
               		 	<nav class="nav">
               		 		<ul>
               		 			<li> <a href="{{ url('/login') }}">Login</a></li>
               		 			<li><a href="{{ url('/register') }}">Register</a></li>
               		 		</ul>
               		 	</nav>
               		 </div>
                   
                </div>
@endif
