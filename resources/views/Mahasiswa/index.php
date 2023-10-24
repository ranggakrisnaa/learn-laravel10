<div id="mahasiswa">
    <h2>Mahasiswa</h2>

    <?php if(!empty($mahasiswa)) :?>
    <ul>
        <?php   foreach($mahasiswa as $individu): ?>
            <li>
                <?php echo $individu?>
            </li>
        <?php endforeach?>
    </ul>
    <?php else :?>
        <p>Tidak ada data mahasiswa</p>
    <?php endif ?>
</div>