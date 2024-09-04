<?php
    echo "Salut, Eu invat PHP";
    echo "<p>Eticheta din PHP</p>"
?>
<style>
    p{
        color: red;
    }
</style>
<p>Text extern</p>
<script>
    const p = document.querySelector('p');
    p.addEventListener('click', ()=>alert('Click'));
</script>