    <div class="container">
        <h2>Etudiants</h2>
        <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Create New Etudiant</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>NumeroTelephone</th>
                    <th>Specialite</th>
                    <th>DateNaissance</th>
                    <th>AdresseEmail</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <td>{{ $etudiant->id }}</td>
                        <td>{{ $etudiant->Nom }}</td>
                        <td>{{ $etudiant->Prenom }}</td>
                        <td>{{ $etudiant->NumeroTelephone }}</td>
                        <td>{{ $etudiant->Specialite }}</td>
                        <td>{{ $etudiant->DateNaissance }}</td>
                        <td>{{ $etudiant->AdresseEmail }}</td>
                        <td>{{ $etudiant->created_at }}</td>
                        <td>{{ $etudiant->updated_at }}</td>
                        <td>
                            <a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('etudiant.destroy', $etudiant->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
