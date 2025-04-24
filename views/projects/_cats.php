<li class="list-group-item <?php if($cat == $model -> id) echo 'bg-danger'?>">
  <a class="text-decoration-none" href="/projects/?cat=<?=$model -> id?>">
    <?=$model -> title?>
  </a>
</li>