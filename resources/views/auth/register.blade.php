@extends('frontend.layout.main')
@section('content')
<!--DASHBOARD-->
	<section>
		<div class="tr-register">
			<div class="tr-regi-form">
				<h4>Création de compte</h4>
				<p>C'est gratuit et ça le sera toujours.</p>
				<form class="col s12" action="{{ route('user.storeDemandeur') }}" method="POST" >
                        @csrf()
                    <div id="after-check">

                        <div class="input-field col m6 s12">
							<input type="text" class="validate" id="matriculeaej">
							<label>Numéro AEJ:</label>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button id="verif_aej" type="button" class="btn btn-rounded btn-success">
                                    Verifier Numero AEJ
                                </button>
                                {{-- <input type="button" id="verif_aej" value="Verifier AEJ" class="waves-effect waves-light btn-large full-btn"> --}}
                            </div>
					    </div>
                        <div id="bottomloader" style="display: none;">
                        </div>
                    </div>

					<div id="check-aej-matricule" style="display: none">
                    <div class="row">
                        <input type="hidden" name="matricule_aej" id="matricule_aej">
                        <input type="hidden" name="sexe" id="sexe">
						<div class="input-field col m6 s12">
							<input type="text" name="prenom" id="prenom">
							<label>Prénom</label>
						</div>
						<div class="input-field col m6 s12">
							<input type="text" name="nom" id="nom">
							<label>Nom de famille</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="number" name="telephone" id="telephone">
							<label>Téléphone mobile</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="email" name="email" id="email">
							<label>Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" name="password" id="password">
							<label>Mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input type="password" name="password_confirm" id="password_confirm">
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
				<p>
                    Vous êtes déjà membre ?<a href="{{ route('user.index') }}"> Se connecter</a>
				</p>
			</div>
		</div>
	</section>
	<!--END DASHBOARD-->
@endsection
@section('js')
<script>
    $(function() {

         $('[name="password"], [name="password_confirm"]').on('keyup change', function () {
            if ($('[name="password"]').val() !== $('[name="password_confirm"]').val()) {
                $('#error-message').fadeOut().remove();
                $('<span id="error-message">Les mots de passe ne correspondent pas.</span>').css('color', 'red').insertAfter($('[name="password_confirm"]'));
                $('form').find('button[type="submit"]').attr('disabled', true);
            } else {
                $('#error-message').fadeOut();
                $('form').find('button[type="submit"]').attr('disabled', false);
            }
        });

        $('#verif_aej').click(function () {

                var checkaejmatricule   = $('#check-aej-matricule');
                var aftercheck          = $('#after-check');
                let matricule           = $('#matriculeaej').val();
                var prenom              = $('#prenom');
                var nom                 = $('#nom');
                var telephone           = $('#telephone');
                var email               = $('#email');
                var bottomloader        = $('#bottomloader');
                var verifaej            = $('#verif_aej');

                bottomloader.fadeIn();
                verifaej.fadeOut();

               $.ajax({
                    url:"{{ route('user.api') }}",
                    type: 'get',
                    dataType: "json",
                    data: {
                        _token: "{{ csrf_token() }}",
                        matricule_aej: matricule
                    },success: function( array ) {
                        bottomloader.fadeOut();
                        checkaejmatricule.fadeIn();
                        aftercheck.fadeOut();
                        if(array[0].value > 0){
                            prenom.val(array[0].prenom);
                            nom.val(array[0].nom);
                            telephone.val(array[0].telephone);
                            email.val(array[0].email);
                            $('#matricule_aej').val(array[0].label);
                            $('#sexe').val(array[0].sexe);
                        } else {

                        }
                    }
                });
        });
    });
</script>
@endsection
