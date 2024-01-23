<!-- resources/views/enseignants/show.blade.php -->

<div class="container">
    <h1>Détails de l'enseignant</h1>

    @if ($enseignant)
        <div>
            <strong>Nom:</strong> {{ $enseignant->Nom }}
        </div>
        <div>
            <strong>Prénom:</strong> {{ $enseignant->Prenom }}
        </div>
    @else
        <p>L'enseignant n'a pas été trouvé.</p>
    @endif
</div>
