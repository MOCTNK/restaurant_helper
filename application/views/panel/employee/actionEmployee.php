<?= $panel?>
<div class="panel_container">
    <link href="/application/modules/<?= $moduleName?>/styles/main.css" rel="stylesheet">
    <link href="/application/modules/<?= $moduleName?>/styles/employee/<?= $actionName?>.css" rel="stylesheet">
    <div class="container-large"><?= $view?></div>
    <script type="text/javascript">
        const URL_ACTION = '/panel/employee/action/<?= $idAction?>';
    </script>
    <script type="text/javascript" src="/application/modules/<?= $moduleName?>/scripts/main.js"></script>
    <script type="text/javascript" src="/application/modules/<?= $moduleName?>/scripts/employee/<?= $actionName?>.js"></script>
</div>