<script src="<?= BASEURL?>/js/admin/main-script.js"></script>
    <?php if (isset($data['script'])) :?>
        <?php foreach ($data['script'] as $js ):?>
    <script src="<?= BASEURL?>js/<?= $js ?>.js"></script>
        <?php endforeach;?>
    <?php endif;?>

</body>
</html>