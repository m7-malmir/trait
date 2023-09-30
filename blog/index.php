<?php
trait SHarableTrait{
    public function share(){ 
        echo self::class .'share with this id:'.$this->id . PHP_EOL;
    }
}
class Post{
    public $id=1;
    use SHarableTrait;
}
class PHoto{
    public $id=3;
    use SHarableTrait;
}
class Comment{
    public $id=5;
    use SHarableTrait;
}

$post=new Post;
$post->share();

$photo=new PHoto;
$photo->share();

$comment=new Comment;
$comment->share();