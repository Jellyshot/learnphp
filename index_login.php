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
        <!-- <a href="delete_process.php?id=<?= $_GET['id']; ?>"><button>Delete</button></a> -->
        <!-- delete는 create나 update처럼 form이 필요 없기 때문에, a태그를 바로 process에 연결함. 
        하지만 이런 get방식은 위험요소가 있기 때문에, form을 사용하여 post방식으로 delete를 할수 있도록 만듬 -->
        <form action="delete_process.php" method="post" >
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
            <input type="submit" value="delete" />
        </form>
    <?php }?>
    </p>
</body>

</html>