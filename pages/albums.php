<h1>Album</h1>

<div class="row">
    <?php
        for ($i = 1; $i <= 10; $i ++):
    ?>
    <div class="col-3 album">
        <a href="">
            <img src="/albums/iza.jpeg" alt="<?=$i?>" class="img-album">
            <h4>Album <?=$i?></h4>
        </a>
    </div>
    <?php
        endfor;
    ?>
</div>
