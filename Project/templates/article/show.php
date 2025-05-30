<?php require(dirname(__DIR__).'/header.php');?>
<div class="card mt-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getTitle();?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$article->getAuthorId()->getNickname();?></h6>
    <p class="card-text"><?=$article->getText();?></p>
    <a href="<?=dirname($_SERVER['SCRIPT_NAME'])?>/article/<?=$article->getId();?>/edit" class="card-link">Article update</a>
    <a href="<?=dirname($_SERVER['SCRIPT_NAME'])?>/article/<?=$article->getId();?>/delete" class="card-link">Article delete</a>
  </div>
</div>
<?php require(dirname(__DIR__).'/footer.html');?>

<hr>

<div class="new_comment">
  <h3>Написать комментарий</h3>
  
  <form action="<?=dirname($_SERVER['SCRIPT_NAME'])?>/article/<?=$article -> getID()?>/comments" method="post">
    <div>
      <label for="text">Комментарий:</label>
      <input id="text" type="text" name="text" placeholder="Что скажете?">
    </div>
    <button type="submit">Опубликовать комментарий</button>
  </form>
</div>

<hr>

<div class="comments">
  <h3>Комментарии к публикации</h3>

  <?php if (empty($article -> getComments())):?>
    <p>Комментариев нет. Станьте первым!</p>
  <?php else:?>
    <?php foreach ($article -> getComments() as $comment): ?>
      <div id="comment<?=$comment -> getID()?>">
        <h4><?=$comment -> getAuthor() -> getNickname()?>:</h4>
        <p><?=$comment -> getCreatedAt()?></p>
        <p><?=$comment -> getText()?></p>
        <br>
        <a href="<?=dirname($_SERVER['SCRIPT_NAME'])?>/comments/<?=$comment -> getID()?>/edit">Редактировать комментарий</a>
        <a href="<?=dirname($_SERVER['SCRIPT_NAME'])?>/comments/<?=$comment -> getID()?>/delete">Удалить комментарий</a>
      </div>
    <?php endforeach?>
  <?php endif?>
</div>
