
        <P>토픽 페이지 입니다.</p>
            <form method="post" action="/index.php/topic/add">
                <p><label>제목</label> <input type="text" name="title"></p>
                <input type="submit" value="입력" >
            </form>
            <ul>
<?php
foreach($topics as $entry){
    ?>
<li>
    <a href="/index.php/topic/get/<?=$entry->id?>"><?=$entry->title?></a>
    <form method="post" action="/index.php/topic/remove">
        <input type="hidden" name="id" value="<?=$entry->id?>">
        <input type="submit" value="삭제">
    </form>

</li>
    <?php
}
?>
</ul>
