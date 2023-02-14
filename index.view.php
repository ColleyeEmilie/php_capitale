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
        <div >
            <label for="countries">Les pays disponibles : </label>
            <select  name="country">
                <?php foreach ($countries as $countryName => $infos): ?>
                    <option value="<?= urlencode($countryName); ?>"
                        <?= $requestedCountry === $countryName ? ' selected' : '' ?>
                    ><?= mb_strtoupper($countryName) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div >
            <button type="submit" >Donne moi sa capitale</button>
        </div>
    </form>
    <?php if (isset($errors['inexistent-country'])): ?>
        <!-- En cas d’erreur -->
        <section class="alert alert-danger" role="alert">
            <h2 class="text-center mb-4">⚠️ Attention&nbsp;! ⚠️</h2>
            <p><?= $errors['inexistent-country']?></p>
            <p>Merci d’en choisir un à l’aide du menu de sélection ci-dessus ☝🏼</p>
        </section>
    <?php endif; ?>
    <?php if (count($countryInfos)): ?>
        <section class="media">
            <img src="images/<?= $countryInfos['flag'] ?>"
                 alt="Drapeau de <?= ucwords($requestedCountry) ?>">
            <div class="media-body">
                <h2><?= ucwords($requestedCountry) ?></h2>
                <p>Sa capitale est <?= ucwords($requestedCountry) ?></p>
            </div>
        </section>
    <?php endif; ?>
</main>
</body>

</body>
</html>