
        <form method="POST" action="{{ route('recipe.store') }}">
                {{ csrf_field() }}
                <p>
                        <label for="titre">Nom recette</label>
                        <input type="text" name="titre" id="titre" value="" required />
                </p>
                <p>
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" value="" required />
                </p>
                <p>
                        <label for="difficulte">Difficulté</label>
                        <input type="text" name="difficulte" id="difficulte" value="" required />
                </p>
                <p>
                        <label for="ingredients">Ingredients </label>
                        <input type="text" name="ingredients" id="ingredients" value="" required />

                </p>
                <p>
                        <label for="ustensils">Ustensils </label>
                        <input type="text" name="ustensils" id="ustensils" value="" required />

                </p>
                <p>
                        <label for="temps_preparation">Temps préparation minutes</label>
                        <input type="text" name="temps_preparation" id="temps_preparation" value="" required />

                </p>
                <p>
                        <label for="image">image URL</label>
                        <input type="text" name="image" id="image" value="" required />

                </p>

                <p>
                <p>plat sucré</p>
                <input type="radio" id="plat_sucre" name="plat_sucre" value="true">
                <label for="plat_sucre">oui</label><br>
                <input type="radio" id="plat_not_sucre" name="plat_sucre" value="false">
                <label for="plat_not_sucre">non</label><br>

                </p>
                <button type="submit">Ajouter la recette</button>
        </form>
