<h2>Elenco Brani</h2>
<table>
    <tr>
        <th>Casa Discografica</th>
        <th>Categoria </th>
        <th>Titolo</th>
        <th>Anno Produzione</th>
    </tr>
    <?
    foreach ($dvdi as $dvd) {
        ?>
<tr>
            <td><?= $dvd->getCategoria()->getCasaDiscografica()->getNome() ?></td>
            <td><?= $dvd->getCategoria()->getNome() ?></td>
            <td><?= $dvd->getTitolo() ?></td>
            <td><?= $dvd->getAnno() ?></td>
</tr>
<? } ?>
</table>
