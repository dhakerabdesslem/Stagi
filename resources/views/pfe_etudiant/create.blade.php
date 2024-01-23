<!-- resources/views/pfe_etudiants/create.blade.php -->


    <div class="container">
        <h1>Ajouter un Étudiant à un Projet de Fin d'Études</h1>

        <form method="POST" action="{{ route('pfe_etudiants.store') }}">
            @csrf

            <div class="form-group">
                <label for="PFEID">Sélectionner le Projet de Fin d'Études :</label>
                <select name="PFEID" class="form-control" required>
                    @foreach($pfes as $pfe)
                        <option value="{{ $pfe->PFEID }}">{{ $pfe->Titre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="EtudiantID">Sélectionner l'Étudiant :</label>
                <select name="EtudiantID" class="form-control" required>
                    @foreach($etudiants as $etudiant)
                        <option value="{{ $etudiant->id }}">{{ $etudiant->Nom }} {{ $etudiant->Prenom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Add other form fields as needed -->

            <button type="submit" class="btn btn-primary">Ajouter l'Étudiant au Projet</button>
        </form>

        <a href="{{ route('pfe_etudiants.index') }}">Retour à la liste des Étudiants dans les Projets de Fin d'Études</a>
    </div>
