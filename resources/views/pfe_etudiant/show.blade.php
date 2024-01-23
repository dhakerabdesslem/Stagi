    <div class="container">
        <h2>PFE Etudiant Details</h2>

        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $pfeEtudiant->id }}</td>
                </tr>
                <tr>
                    <th>PFE</th>
                    <td>{{ $pfeEtudiant->pfe->Titre }}</td>
                </tr>
                <tr>
                    <th>Etudiant</th>
                    <td>{{ $pfeEtudiant->etudiant->Nom }} {{ $pfeEtudiant->etudiant->Prenom }}</td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $pfeEtudiant->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $pfeEtudiant->updated_at }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('pfe_etudiant.index') }}" class="btn btn-primary">Back to PFE Etudiants</a>
    </div>
