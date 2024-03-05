<?php if(isset($_ENV['ENVIRONMENT']) && $_ENV['ENVIRONMENT'] === 'dev') : ?>
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/resources/js/app.js"></script>
    <script type="module" src="http://localhost:5173/resources/scss/app.scss"></script>
<?php else: ?>
    <script type="module" src="/resources/js/app.js"></script>
    <link rel="stylesheet" href="/resources/css/app.css">
<?php endif; ?>