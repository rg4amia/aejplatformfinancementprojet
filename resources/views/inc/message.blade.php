@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Veuillez vérifier que le formulaire ci-dessous ne contient pas d'erreurs
        {{ implode(' | ', $errors->all(':message')) }}
    </div>
@endif
{{-- @if ($errors->any())

    <div class="alert alert-danger">
        Veuillez vérifier que le formulaire ci-dessous ne contient pas d'erreurs
        <ul>
             @php
                //dd($errors->all())
            @endphp
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 --}}
