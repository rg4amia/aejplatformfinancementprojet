@extends('frontend.layout.main')
@section('content')
<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Connectez-vous</h4>
				<p>C'est gratuit et ça le sera toujours.</p>
				<form class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<input type="text" class="validate">
							<label>Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate">
							<label>Mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="submit" class="waves-effect waves-light btn-large full-btn"> </div>
					</div>
				</form>
				<p><a href="forgot-pass.html">mot de passe oublié</a> | Vous êtes un nouvel utilisateur ? <a href="{{ route('user.enregistrer') }}">Enregistrez vous</a>
				</p>
				{{-- <div class="soc-login">
					<h4>Sign in using</h4>
					<ul>
						<li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
						<li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
						<li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
					</ul>
				</div> --}}
			</div>
		</div>
	</section>
@endsection
@section('js')
<script>
    
</script>
@endsection
