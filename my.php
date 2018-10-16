<html>
<body>
<pre>
<?php

class FakePost {
    public $title;
    public $content;
    public $id;
    private $status;

    public function __construct($title, $content, $id) {
        $this->title = $title;
        $this->content = $content;
        $this->id = $id;
        $this->status = "draft";
    }

    public function isPublished() {
        return $this->status === "published";
    }
}

$myPost = new FakePost("my title", "my content", 42);
//$myPost->id = 42;
//$myPost->title = "Super Awesome";
//$myPost->content = "<b>bugger bugger bugger</b>";
//$myPost->status = "published";
//$myPost->illegal = "walking slowly";
print_r($myPost);
if ($myPost->isPublished()) {
    echo 'true';
} else {
    echo 'false';
}
echo "\n\n";
echo $myPost->isPublished();

//echo $myPost->cocaine;

echo "\n\n";

$arr = array(2, 4, 6, 8, 20);

print_r($arr);
echo "\n\n";
$meaningful = array(
    "title" => "This is the title",
    "content" => "<p>The content goes here</p>",
    "id" => 27,
    "published" => true
);

print_r($meaningful);

$arr[] = 77;
$arr[1] = 66;

print_r($arr);

$meaningful["id"] = 42;
$meaningful["rating"] = 3.5;

print_r($meaningful);

echo $meaningful["aliens"];
?>
</pre>
</body>
</html>