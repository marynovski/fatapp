<header id="page-header">
    <h2><?php echo $translations[$lang]['team']; ?></h2>
</header>
<main id="team-members">
<?php
    $user = new User();
    $users = $user->getAllUsers();
    foreach ($users as $user) {
        echo    '<article class="member-bio">'
                    .'<picture>'
                        .'<figure>'
                            .'<img src="" alt="foto">'
                            .'<figcaption>Nasz ' . $user['occupation'] . '</figcaption>'
                        .'</figure>'
                    .'</picture>'
                    .'<div class="member-data">'
                        .'<header class="member-preview">'
                            .'<h3>' . $user['name'] . ' ' . $user['surname'] . ', ' . $user['occupation'] . ', 22 lata</h3>'
                        .'</header>'
                        .'<div class="member-description">'
                            . $user['description'] .'<a href="#" title="Pokaż swoją tajemnicę.">Czytaj więcej...</a>'
                        .'</div>'
                    .'</div>'
                .'</article>';
    }
?>
</main>
