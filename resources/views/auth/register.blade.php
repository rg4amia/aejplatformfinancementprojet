@extends('frontend.layout.main')
@section('content')
<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Création d'un compte</h4>
				<p>C'est gratuit et ça le sera toujours.</p>
				<form class="col s12">
                    <div id="after-check">

                        <div class="input-field col m6 s12">
							<input type="text" class="validate" id="matriculeaej">
							<label>Numéro AEJ:</label>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button id="verif_aej" type="button" class="btn btn-rounded btn-success">
                                    Verifier AEJ
                                </button>
                                {{-- <input type="button" id="verif_aej" value="Verifier AEJ" class="waves-effect waves-light btn-large full-btn"> --}}
                            </div>
					    </div>
                    </div>



					<div id="check-aej-matricule" style="display: none">
                        <div class="row">
						<div class="input-field col m6 s12">
							<input type="text" class="validate" name="prenom" id="prenom">
							<label>Prénom</label>
						</div>
						<div class="input-field col m6 s12">
							<input type="text" class="validate" name="nom" id="nom">
							<label>Nom de famille</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="number" class="validate" name="telephone" id="telephone">
							<label>Téléphone mobile</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="email" class="validate" name="email" id="email">
							<label>Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate" name="password" id="password">
							<label>Mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" class="validate" name="confirmpassword" id="confirmpassword">
							<label>Confirmer le mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="submit" value="Valider" class="waves-effect waves-light btn-large full-btn">
                        </div>
					</div>
                    </div>
				</form>
				<p>Vous êtes déjà membre ?<a href="{{ route('user.index') }}"> Cliquez pour vous connecter</a>
				</p>
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
@endsection
@section('js')
<script>
    $(function() {
       // console.log(11111);
       // console.log("11111rrrr");
        $('#verif_aej').click(function () {

                var checkaejmatricule   = $('#check-aej-matricule');
                var aftercheck          = $('#after-check');
                let matricule           = $('#matriculeaej').val();
                var prenom              = $('#prenom');
                var nom                 = $('#nom');
                var telephone           = $('#telephone');
                var email               = $('#email');

                console.log(matricule);

               $.ajax({
                    url:"{{ route('user.api') }}",
                    type: 'get',
                    dataType: "json",
                    data: {
                        _token: "{{ csrf_token() }}",
                        matricule_aej: matricule
                    },success: function( array ) {
                        if(array[0].value > 0){
                            checkaejmatricule.fadeIn();
                            aftercheck.fadeOut();
                            prenom.val(array[0].prenom);
                            nom.val(array[0].nom);
                            telephone.val(array[0].telephone);
                            email.val();
                        } else {

                        }
                        //console.log(array[0]);
                    }
                });
        });
    });
</script>
@endsection
