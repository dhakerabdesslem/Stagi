    <div class="container">
        <h2>Etudiant Details</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $etudiant->id }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ $etudiant->Nom }}</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>{{ $etudiant->Prenom }}</td>
                </tr>
                <tr>
                    <th>NumeroTelephone</th>
                    <td>{{ $etudiant->NumeroTelephone }}</td>
                </tr>
                <tr>
                    <th>Specialite</th>
                    <td>{{ $etudiant->Specialite }}</td>
                </tr>
                <tr>
                    <th>DateNaissance</th>
                    <td>{{ $etudiant->DateNaissance }}</td>
                </tr>
                <tr>
                    <th>AdresseEmail</th>
                    <td>{{ $etudiant->AdresseEmail }}</td>
                </tr>
                <!-- Add other fields as needed -->
            </tbody>
        </table>
        <a href="{{ route('etudiant.index') }}" class="btn btn-primary">Back to Etudiants</a>
    </div>
