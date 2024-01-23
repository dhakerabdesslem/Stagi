
    <div class="container">
        <h2>PFE Etudiants</h2>
        <a href="{{ route('pfe_etudiant.create') }}" class="btn btn-primary">Create New PFE Etudiant</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PFEID</th>
                    <th>EtudiantID</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pfeEtudiants as $pfeEtudiant)
                    <tr>
                        <td>{{ $pfeEtudiant->id }}</td>
                        <td>{{ $pfeEtudiant->PFEID }}</td>
                        <td>{{ $pfeEtudiant->EtudiantID }}</td>
                        <td>{{ $pfeEtudiant->created_at }}</td>
                        <td>{{ $pfeEtudiant->updated_at }}</td>
                        <td>
                            <a href="{{ route('pfe_etudiant.show', $pfeEtudiant->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('pfe_etudiant.edit', $pfeEtudiant->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pfe_etudiant.destroy', $pfeEtudiant->id) }}" method="POST" style="display: inline;">
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
