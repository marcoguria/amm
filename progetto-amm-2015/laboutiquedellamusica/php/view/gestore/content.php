<?php
switch ($vd->getSottoPagina()) {
    case 'anagrafica':
        include_once 'anagrafica.php';
        break;

    case 'elencoBrani':
        include_once 'elencoBrani.php';
        break;
    
    case 'crea_dvd':
        include_once 'crea_dvd.php';
        break;

        ?>


<?php default: ?>
<h2>Pannello di Controllo</h2>
<p id="benv">
Benvenuto, <?= $user->getNome() ?>
</p>
<p>
Scegli una fra le seguenti sezioni:
</p>
<ul class="panel" id="panel"> 
<li><a id="anagraficaa" href="gestore/anagrafica">Anagrafica</a></li>
<li><a id="branii" href="gestore/brani">Brani</a></li>
</ul>
<?php
        break;
}
?>
