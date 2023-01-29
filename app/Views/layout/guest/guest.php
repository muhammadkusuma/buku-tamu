
<?= $this->include('layout/home/header') ?>
<style>
    /* Custom CSS */
    .container {
        margin-top: 50px;
    }

    .card {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f5f5f5;
    }
</style>
</head>

<body>

    <?= $this->renderSection('content') ?>
</body>

</html>