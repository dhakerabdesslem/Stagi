    <div class="container">
        <h2>Create New Etudiant</h2>
        <form method="POST" action="{{ route('etudiant.store') }}">
            @csrf

            <div class="form-group">
                <label for="Nom">Nom:</label>
                <input type="text" name="Nom" id="Nom" class="form-control" value="{{ old('Nom') }}">
            </div>

            <div class="form-group">
                <label for="Prenom">Prenom:</label>
                <input type="text" name="Prenom" id="Prenom" class="form-control" value="{{ old('Prenom') }}">
            </div>

            <div class="form-group">
                <label for="NumeroTelephone">NumeroTelephone:</label>
                <input type="text" name="NumeroTelephone" id="NumeroTelephone" class="form-control" value="{{ old('NumeroTelephone') }}">
            </div>

            <div class="form-group">
                <label for="Specialite">Specialite:</label>
                <input type="text" name="Specialite" id="Specialite" class="form-control" value="{{ old('Specialite') }}">
            </div>

            <div class="form-group">
                <label for="DateNaissance">DateNaissance:</label>
                <input type="date" name="DateNaissance" id="DateNaissance" class="form-control" value="{{ old('DateNaissance') }}">
            </div>

            <div class="form-group">
                <label for="AdresseEmail">AdresseEmail:</label>
                <input type="email" name="AdresseEmail" id="AdresseEmail" class="form-control" value="{{ old('AdresseEmail') }}">
            </div>

            <div class="form-group">
                <label for="MotDePasse">MotDePasse:</label>
                <input type="password" name="MotDePasse" id="MotDePasse" class="form-control">
            </div>

            <!-- Add other form fields as needed -->

            <button type="submit" class="btn btn-primary">Create Etudiant</button>
        </form>
    </div>
