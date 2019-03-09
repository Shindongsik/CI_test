
<article>
    <form method="post" action="/index.php/topic/modify">
        <input type="hidden" name="id" value="<?=$topic->id?>">
        <p><input type="text" name="title" value="<?=$topic->title?>"></p>
        <p><textarea name="description" cols="40"rows="3"><?=$topic->description?>"></textarea></p>
        <p><input type="submit" value="수정"></p>
    </form>
</article>
