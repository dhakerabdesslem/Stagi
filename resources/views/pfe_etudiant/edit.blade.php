    <div class="container">
        <h2>Edit PFE Etudiant</h2>
        <form method="POST" action="{{ route('pfe_etudiant.update', $pfeEtudiant->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="PFEID">Select PFE:</label>
                <select name="PFEID" id="PFEID" class="form-control">
                    @foreach($pfes as $pfe)
                        <option value="{{ $pfe->PFEID }}" @if($pfe->PFEID == $pfeEtudiant->PFEID) selected @endif>{{ $pfe->Titre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="EtudiantID">Select Etudiant:</label>
                <select name="EtudiantID" id="EtudiantID" class="form-control">
                    @foreach($etudiants as $etudiant)
                        <option value="{{ $etudiant->id }}" @if($etudiant->id == $pfeEtudiant->EtudiantID) selected @endif>{{ $etudiant->Nom }} {{ $etudiant->Prenom }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Add other form fields as needed -->

            <button type="submit" class="btn btn-primary">Update PFE Etudiant</button>
        </form>
    </div>
