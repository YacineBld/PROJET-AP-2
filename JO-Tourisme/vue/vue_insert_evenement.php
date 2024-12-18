<?php
// Supposons que vous ayez déjà une session démarrée et que le rôle de l'utilisateur soit stocké dans $_SESSION['role']

// Vérifiez si l'utilisateur est connecté et s'il a le rôle 'clientPro'
if (isset($_SESSION['role']) && $_SESSION['role'] === 'clientPro') {
    // L'utilisateur est un clientPro, donc on affiche le formulaire d'insertion
    ?>
    <h2> Insertion d'un évènement </h2>

    <main>
        <form method="post" action="">
            <table class="table-insert">
                <tr>
                    <td> Type </td>
                    <td><input type="text" name="type" value="<?= ($lEvenement != null) ? $lEvenement['type'] : '' ?>"></td>
                </tr>
                <tr>
                    <td> Date évènement </td>
                    <td><input type="date" name="dateEvent" value="<?= ($lEvenement != null) ? $lEvenement['dateEvent'] : '' ?>"></td>
                </tr>
                <tr>
                    <td> Nom de l'évènement </td>
                    <td><input type="text" name="nomEvenement" value="<?= ($lEvenement != null) ? $lEvenement['nomEvenement'] : '' ?>"></td>
                </tr>
                <tr>
                    <td> Description de l'évènement </td>
                    <td><input type="text" name="description" value="<?= ($lEvenement != null) ? $lEvenement['description'] : '' ?>"></td>
                </tr>
                <tr>
                    <td> Adresse de l'évènement </td>
                    <td><input type="text" name="adresse" value="<?= ($lEvenement != null) ? $lEvenement['adresse'] : '' ?>"></td>
                </tr>
                <tr>
                    <td> Horraire début </td>
                    <td><input type="time" name="horraireD" value="<?= ($lEvenement != null) ? $lEvenement['horraireD'] : '' ?>"></td>
                </tr>
                <tr>
                    <td> Horraire fin </td>
                    <td><input type="time" name="horraireF" value="<?= ($lEvenement != null) ? $lEvenement['horraireF'] : '' ?>"></td>
                </tr>
                <tr>
                    <td> Capacité </td>
                    <td><input type="number" name="capacite" value="<?= ($lEvenement != null) ? $lEvenement['capacite'] : '' ?>"></td>
                </tr>
                <tr>
                    <td> Id Catégorie </td>
                    <td>
                        <select name="idcategorie">
                            <?php
                            foreach ($lesCategories as $uneCategorie) {
                                echo "<option value='" . $uneCategorie['idcategorie'] . "'>" . $uneCategorie['libelle'] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input class="boutonP" type="reset" name="Annuler" value="Annuler"></td>
                    <td><input class="boutonP" type="submit" <?= ($lEvenement != null) ? 'name="Modifier" value = "Modifier"' : 'name="Valider" value="Valider"' ?>>
                        <?= ($lEvenement != null) ? "<input type='hidden' name ='idevenement' value ='" . $lEvenement['idevenement'] . "'>" : "" ?> </td>
                </tr>
            </table>
        </form>
    </main>
    <?php
} else {
    // L'utilisateur n'est pas un clientPro, donc on lui affiche un message d'erreur ou un accès limité
    echo "<p>Vous devez être connecté en tant que clientPro pour insérer un évènement.</p>";
}
?>
