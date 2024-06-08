<!-- /about.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>About Us Page</h1>
    <?php
    $team = [
        ["name" => "Joao", "role" => "CEO"],
        ["name" => "Thiago", "role" => "CTO"],
        ["name" => "Pedro", "role" => "CFO"],
    ];
    ?>
    <h2>Our Team Members</h2>
    <ul>
        <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>
