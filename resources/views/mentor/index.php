<?php
    
    //ページネイション
    $page = $id;//ページ番号を/resource/action/idのidとして取得
    if($page === '') {
        $page = 1;//$pageが空の場合は$pageに1を代入
    }
    $page = max($page, 1);//ページ数が0以下にならないように、0以下の場合は1にできるようにする（1と0を比較して大きい方を代入する）

    $no_event = ''; //eventが一つもなかった場合に$no_eventにメッセージを格納

    //最終ページの番号を取得する
    if (!empty($_GET['category']) && !empty($_GET['word'])) {
        $sql = sprintf('SELECT COUNT(*) AS cnt FROM events WHERE event_category_id=%d AND title LIKE "%%%s%%"',
            $_GET['category'],
            $_GET['word']
            );
    }
    else if (!empty($_GET['category'])) {
        $sql = sprintf('SELECT COUNT(*) AS cnt FROM events WHERE event_category_id=%d',
            $_GET['category']
            );
    }
    else if (!empty($_GET['word'])) {
        $sql = sprintf('SELECT COUNT(*) AS cnt FROM events WHERE title LIKE "%%%s%%"',
            $_GET['word']
            );
    }
    else {
        $sql = sprintf('SELECT COUNT(*) AS cnt FROM events');
    }


    $records = mysqli_query($db, $sql) or die(mysqli_error($db));
    $table = mysqli_fetch_assoc($records);
    if ($table['cnt'] === '0') {
        $no_event = "You couldn't find any events. How about creating a new event by yourself?";
    }
    $maxPage = ceil((int)$table['cnt'] / 6);//必要なページ数を計算する(ceil関数で切り上げて整数値を返す)
    $page = min($page, $maxPage);//$maxPageが1より小さい場合（不正なページ数）は補正

    $start = ($page - 1) * 6;

    $start=max(0,$start);


    //一覧化するイベントのデータを取得（LIMIT句は1ページで表示する数を決める）
    //あいまい検索+カテゴリ検索
    if(!empty($_GET['category']) && !empty($_GET['word'])) {
        $sql = sprintf("SELECT * FROM events WHERE event_category_id=%d AND title LIKE '%%%s%%' ORDER BY date DESC LIMIT %d, 6",
            mysqli_real_escape_string($db, $_GET['category']),
            mysqli_real_escape_string($db, $_GET['word']),
            $start
            );
    }
    //カテゴリ検索のみ
    else if (!empty($_GET['category'])) {
            $sql = sprintf('SELECT * FROM events WHERE event_category_id=%d ORDER BY date DESC LIMIT %d, 6',
            mysqli_real_escape_string($db, $_GET['category']),
            $start
            );
    }
    //あいまい検索のみ
    else if(!empty($_GET['word'])) {
            $sql = sprintf("SELECT * FROM events WHERE title LIKE '%%%s%%' ORDER BY date DESC LIMIT %d, 6",
            mysqli_real_escape_string($db, $_GET['word']),
            $start
            );
    }
    else {
        //イベント一覧を全取得
        $sql = sprintf("SELECT * FROM events ORDER BY date DESC LIMIT %d, 6",
            mysqli_real_escape_string($db, $start)
            );
    }


    $records = mysqli_query($db, $sql) or die(mysqli_error($db));
    $rtn = array();
    while($result = mysqli_fetch_assoc($records)) {
      $rtn[] = $result;
     }


    //保存されているいいねで一番小さいevent_idを取得する
    $sql = 'SELECT MIN(event_id) AS min FROM likes WHERE 1';

    $records = mysqli_query($db, $sql) or die(mysqli_error($db));
    $min = mysqli_fetch_assoc($records);


    //保存されているいいねで一番大きいevent_idを取得する
    $sql = 'SELECT MAX(event_id) AS max FROM likes WHERE 1';

    $records = mysqli_query($db, $sql) or die(mysqli_error($db));
    $max = mysqli_fetch_assoc($records);


    //event_idの小さい数字から大きい数字までいいねのユーザーの数をevent_id毎にカウントする
    $cnt_likes=array();

    for ($i=(int)$min['min']; $i <((int)$max['max']+1) ; $i++) { //maxの値に+1をいれることでmaxの値までカウントする
        $sql = "SELECT COUNT(user_id) AS cnt FROM likes WHERE event_id=".$i;
        echo $sql;
        $records = mysqli_query($db, $sql) or die(mysqli_error($db));
        $cnt_likes[$i]=mysqli_fetch_assoc($records);
    }

    //保存されている参加者で一番小さいevent_idを取得する
    $sql = 'SELECT MIN(event_id) AS min FROM participants WHERE 1';

    $records = mysqli_query($db, $sql) or die(mysqli_error($db));
    $min = mysqli_fetch_assoc($records);


    //保存されている参加者で一番大きいevent_idを取得する
    $sql = 'SELECT MAX(event_id) AS max FROM participants WHERE 1';

    $records = mysqli_query($db, $sql) or die(mysqli_error($db));
    $max = mysqli_fetch_assoc($records);


    //event_idの小さい数字から大きい数字まで参加者のユーザーの数をevent_id毎にカウントする
    $cnt_likes = array();

    for ($i=$min['min']; $i <($max['max']+1) ; $i++) { //maxの値に+1をいれることでmaxの値までカウントする
        $sql = sprintf('SELECT COUNT(user_id) AS cnt FROM participants WHERE event_id='.$i);
        $records = mysqli_query($db, $sql) or die(mysqli_error($db));
        $cnt_participants[$i] = mysqli_fetch_assoc($records);
    }


    //当日の日付を取得する
     $today = substr(date("c"),5,5);

 ?>


            <div class="col-sm-10 col-md-10">
                <div class="col-sm-12 col-md-12 events-pad">
                    <h1><?=($no_event)?></h1>
                    <button class="btn btn-cebroad pull-right " onclick="location.href='/portfolio/cebroad/events/add'">Create a new event</button><br><br>
                </div>

                <!-- イベントID毎に表示 -->
                <?php foreach ($rtn as $event): ?>
                    <?php if (strlen($event['title']) > 15) {
                        $event['title'] = substr($event['title'],0,15).'…';
                        } ?>

                    <div class="col-sm-6 col-md-4">             
                        <div class="panel panel-default">
                            <!-- 画像 -->
                            <div class="panel-thumbnail"><img class="img-responsive" src="<?=h($event['picture_path_0'])?>"></div>
                                <div class="panel-body">
                                    <!-- イベント名 -->
                                    <a href="/portfolio/cebroad/events/show/<?=h($event['id'])?>">
                                    <p class="lead"><?=h($event['title'])?></p></a>

                                    <!-- 日付 -->
                                    
                                    <?php if ($event['date'] > $today): ?>
                                    <?php $date = date_format(date_create($event['date']), 'm-d-Y'); ?>
                                        <p><?=h($date)?></p>
                                    <?php else: ?>
                                        <p>Date:Closed</p>
                                    <?php endif; ?>
                                    

                                    <!-- いいねの数 -->
                                    <!-- $cnt_***[$event['id']]['cnt']=cnt_***[イベントID][カウントの配列名]を表す -->
                                    <p class="event_people"><i class="fa fa-users fa-lg"></i>:
                                    <?php 
                                    if(isset($cnt_participants[$event['id']]['cnt'])){
                                        echo $cnt_participants[$event['id']]['cnt']; 
                                    } else {
                                        echo '0';
                                    }
                                    ?></p>

                                    <!-- 参加者数 -->
                                    
                                    <p class="event_like"><i class="fa fa-thumbs-o-up fa-lg"></i>:
                                    <?php 
                                        if(isset($cnt_likes[$event['id']]['cnt'])){
                                        echo $cnt_likes[$event['id']]['cnt']; 
                                    } else{
                                        echo '0';
                                    } 
                                    ?></p>
                                    

                                </div>
                            </div>
                    </div>
                <?php endforeach; ?>

                <!-- 検索時のパラメータ文字列を作成 -->

                <?php

                if(!empty($_GET['category'])) {
                    $srch_categories = $_GET['category'];
                }
                if(!empty($_GET['word'])) {
                    $srch_word = $_GET['word'];
                }
                ?>

                <!-- ページジャンプ 1ページ目、最終ページからはリンクジャンプしないように条件分岐を設定-->
            <div class="col-sm-12 col-md-12 events-pad">    

                    <form method="post" action="/portfolio/cebroad/events/index/<?php echo ($page - 1); ?>" style="display:inline;">
                        <?php if(isset($srch_categories)){ ?>
                        <input type="hidden" name="srch-categories" value="<?php echo $srch_categories;?>">
                        <?php } ?>
                        <?php if(isset($srch_word)){ ?>
                        <input type="hidden" name="srch-word" value="<?php echo $srch_word;?>">
                        <?php } ?>

                        <?php if($page > 1){ ?>
                        <input type="submit" value="Back" class="btn btn-default">
                        <?php } else { ?>
                        <input type="submit" value="Back" class="btn btn-default" disabled="disabled">
                        <?php } ?>
                    </form>

                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <form method="post" action="/portfolio/cebroad/events/index/<?php echo ($page + 1); ?>" style="display:inline;">
                        <?php if(isset($srch_categories)){ ?>
                        <input type="hidden" name="srch-categories" value="<?php echo $srch_categories;?>">
                        <?php } ?>
                        <?php if(isset($srch_word)){ ?>
                        <input type="hidden" name="srch-word" value="<?php echo $srch_word;?>">
                        <?php } ?>

                        <?php if($page < $maxPage){ ?>
                        <input type="submit" value="Next" class="btn btn-default">
                        <?php } else { ?>
                        <input type="submit" value="Next" class="btn btn-default" disabled="disabled">
                        <?php } ?>
                    </form>

            </div>
        </div>
        

