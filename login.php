<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else {
            echo "welcome";
        }
    }
    function print_description(){
        if(isset($_GET['id'])){
            echo file_get_contents('data/'.$_GET['id']);
        }else {
            echo "Hellow PHP";
        }
    }
    function print_list(){
        $list = scandir('data');
        $i = 0;
        while ($i < count($list)) {
            if ($list[$i] != '.' ){
                if ($list[$i] != '..') {
                    echo "<li><a href=\"login.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
                
            } $i += 1;
        }
    }
        ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php print_title(); ?>  
    </title>
</head>
<body>
    <?php 
    if (isset($_POST['uid'])) { ?>
    <h1><a href="function.php">Redirection tab</a></h1>
    <?php echo $_POST['uid'] .'님' .date('Y-m-d H:i:s') .'에 로그인 되었습니다.'; ?>
    <ol>
        <?php
        print_list();
        ?>
    </ol>
        <a href="create.php"><button>Create</button></a>
        <?php if (isset($_GET['id'])) { ?>
            <a href="update.php"><button>Update</button></a>
            <!-- update버튼은 목록을 눌렀을때, 나와야 함으로 php코드 안에 추가. -->
        <?php }?>
        
        
    <h2>
        <?php
        print_title();
        ?>
    </h2>
        <?php
        print_description();
        ?>
    <?php 
    } else { ?>
    <a href="form.html">되돌아가기</a>
<?php } ?>

</body>
</html>