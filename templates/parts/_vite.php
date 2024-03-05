<?php $isDev = isset($_ENV['ENVIRONMENT']) && $_ENV['ENVIRONMENT'] === 'dev' && isset($_ENV['VITE_PORT']) ?>

<?php if($isDev) : ?>  
    <script type="module" src="<?php echo $_ENV['VITE_ORIGIN'] ?>:<?php echo $_ENV['VITE_PORT'] ?>/@vite/client"></script>
    <script type="module" src="<?php echo $_ENV['VITE_ORIGIN'] ?>:<?php echo  $_ENV['VITE_PORT'] ?>/resources/js/app.js"></script>
    <script type="module" src="<?php echo $_ENV['VITE_ORIGIN'] ?>:<?php echo  $_ENV['VITE_PORT'] ?>/resources/scss/app.scss"></script>
<?php else: ?>
    <script type="module" src="/resources/js/app.js"></script>
    <link rel="stylesheet" href="/resources/css/app.css">
<?php endif; ?>