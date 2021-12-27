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
                    echo "<li><a href=\"index_login.php?id=$list[$i]\">$list[$i]</a></li>\n";
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
    <title>Document</title>
</head>

<body>

    <h1><a href="index.php" style="text-decoration: none; color:black;">Create, Update 버튼 만들기</a></h1>
      
        <ol>
        <?php
        print_list();
        ?>
    </ol>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
        <?php
        print_description();
        ?>
    </ol>
    <br>
    <p>
    <a href="create.php"><button>Create</button></a>
        <?php if (isset($_GET['id'])) { ?>
            <a href="update.php?id=<?= $_GET['id']; ?>"><button>Update</button></a>
            <!-- update버튼은 목록을 눌렀을때, 나와야 함으로 php코드 안에 추가. -->
        <?php }?>
        <form action="update_process.php" method="post">
            <!-- post방식으로 전송되는 폼을 만듬 -->
            <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>" />
            <!-- 이 폼의 제목은 old title에 저장되고, 값은 현재 아이디로 저장된다. -->
        
            <p><input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>"/></p>
        <p><textarea name="description" placeholder="Description" cols="80" rows="20" value="<?php print_description(); ?>"></textarea></p>
        <p><input type="submit" value="Submit" />
        <a href="index_login.php"><button>Cancel</button></a>
        </p>
        </form>
        </p>
</body>

</html>