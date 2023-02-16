<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Capitale</title>
</head>
<body>
<body>
<main>
    <h1><?= $title?></h1>
    <form action="index.php">
        <div>
            <label for="countries">Les pays disponibles : </label>
            <select  name="country">
                <?php foreach ($countries as $countryName => $infos): ?>
                    <option value="<?= urlencode($countryName); ?>"
                        <?= $requestedCountry === $countryName ? ' selected' : '' ?>
                    ><?= mb_strtoupper($countryName) ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" >Quelle est sa capitale? </button>
        </div>
    </form>
    <!-- En cas d’erreur -->
    <?php if (isset($errors['inexistent-country'])): ?>
        <section role="alert">
            <p><?= $errors['inexistent-country']?></p>
            <p>Merci de choisir un pays à l’aide du menu de sélection ci-dessus</p>
        </section>
    <?php endif; ?>
    <!-- aucune erreur -->
    <?php if (count($countryInfos)): ?>
        <section class="media">
            <img src="images/<?= $countryInfos['flag'] ?>"
                 alt="Drapeau de <?= ucwords($requestedCountry) ?>">
            <div>
                <h2><?= ucwords($requestedCountry) ?></h2>
                <p>Sa capitale est <?= ucwords($countryInfos['capital-name']) ?></p>
            </div>
        </section>
    <?php endif; ?>
</main>
</body>

</body>
</html>