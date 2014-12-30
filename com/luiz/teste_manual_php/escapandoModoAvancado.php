<?php
if (!$expression) {
    ?>
    <strong>Isto é verdadeiro.</strong>
    <?php
} else {
    ?>
    <strong>Isto é falso.</strong>
    <?php
}
?>

<?php echo '<br>se você quer servir documentos XHTML ou XML, fa�a assim<br>'; ?>

<script language="php">
        echo 'alguns editores (como o FrontPage) 
              gostam de instruções de processamento';
</script>

<?php
    echo 'Isto é um teste';
?><br>

<?php echo 'Isto é um teste' ?>
<br>
<?php echo 'Nós omitimos a última tag de fechamanto';