    <div class="container">
        <h2>Edit Etudiant</h2>
        <form method="POST" action="{{ route('etudiant.update', $etudiant->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Nom">Nom:</label>
                <input type="text" name="Nom" id="Nom" class="form-control" value="{{ $etudiant->Nom }}">
            </div>

            <div class="form-group">
                <label for="Prenom">Prenom:</label>
                <input type="text" name="Prenom" id="Prenom" class="form-control" value="{{ $etudiant->Prenom }}">
            </div>

            <div class="form-group">
                <label for="NumeroTelephone">NumeroTelephone:</label>
                <input type="text" name="NumeroTelephone" id="NumeroTelephone" class="form-control" value="{{ $etudiant->NumeroTelephone }}">
            </div>

            <div class="form-group">
                <label for="Specialite">Specialite:</label>
                <input type="text" name="Specialite" id="Specialite" class="form-control" value="{{ $etudiant->Specialite }}">
            </div>

            <div class="form-group">
                <label for="DateNaissance">DateNaissance:</label>
                <input type="date" name="DateNaissance" id="DateNaissance" class="form-control" value="{{ $etudiant->DateNaissance }}">
            </div>

            <div class="form-group">
                <label for="AdresseEmail">AdresseEmail:</label>
                <input type="email" name="AdresseEmail" id="AdresseEmail" class="form-control" value="{{ $etudiant->AdresseEmail }}">
            </div>

            <!-- Add other form fields as needed -->

            <button type="submit" class="btn btn-primary">Update Etudiant</button>
        </form>
    </div>
