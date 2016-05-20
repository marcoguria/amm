<h3>Elenco Brani</h3>
<table>
    <tr>
        <th>Casa Discografica</th>
        <th>Categoria </th>
        <th>Titolo</th>
        <th>Anno Produzione</th>
        <th>Cancella</th>
    </tr>
    <?   
    foreach ($dvdi as $dvd) {
        ?>
        <tr>
            <td><?= $dvd->getCategoria()->getCasaDiscografica()->getNome() ?></td>
            <td><?= $dvd->getCategoria()->getNome() ?></td>
            <td><?= $dvd->getTitolo() ?></td>
            <td><?= $dvd->getAnno() ?></td>
            <td><a href="gestore/brani?cmd=cancella_dvd&dvd=<?= $dvd->getId()?>" title="Elimina il brano">
<img src="../images/cancella.png" alt="Elimina"></a>
        </tr>
    <? } ?>
</table>

<div class="input-form">

    <form method="post" action="gestore/brani">
        <button type="submit" name="cmd" value="new_dvd">Crea Brano</button>
    </form>

</div>
