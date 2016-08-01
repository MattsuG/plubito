//$(document).readyで画面読み込みと同時に処理を開始
  $(document).ready(function(){
  //edit.php用に、文字数制限のある項目の初期の長さを取得
  $('#title_count').text($('#title').val().length);
  $('#detail_count').text($('#detail').val().length);

});


 //3つある画像のプレビューを共通の関数で処理するためにそれぞれのidを取得する関数
 $('.pic').change(function(){
     var picId = $(this).attr('id');
     preview(picId);
 });
 //実際に画像のプレビューを行う関数
 function preview(id) {
     var file = $('#' + id).prop('files')[0];
     var num = id.slice(-1);
     var previewId = 'preview' + num;
     var labelId = 'label' + num;
     var photoCoverId = 'photoCover' + num;
     //png, jpg, jpegのどれにも一致しない場合注意文を表示
     if ( file.type == 'image/png' || file.type == 'image/jpg' || file.type == 'image/jpeg') {
         //空のimgタグにプレビューを挿入
         var fr = new FileReader();
         fr.onload = function() {
             $('#' + previewId).attr('src', fr.result ).css('display','inline');
             $('#' + labelId).text('');
         }
         fr.readAsDataURL(file);
       } else {
         $('#' + previewId).attr('src', '').css('display','none');
         $('#' + labelId).text('You can choose only jpg or png file');
       }
       //display: none;で隠したinputタグのfile情報をphotoCoverに渡す
         $('#' + photoCoverId).val($('#' + id).val().replace("C:\\fakepath\\", ""));
     }
//class="form-control"に変化がある度に発動する関数
//入力必須項目の値が全て入力されていればsubmitのdisabledをfalseにする
//一つでも空欄ができれば再びdisabledをtrueに
$('.form-control').change(function() {
    if (       $('#title').val()         !=='' 
            && $('#price').val()         !==''
            && $('#detail').val()        !=='') 
         {
         $('#confirm').attr('disabled', false);
            } else {
              $('#confirm').attr('disabled', true);
            }
        });

//文字数チェッカー 規定の文字数を超えると文字色をピンクに
    $('#title').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().length;
        $('#title_count').text(thisValueLength);
        if(thisValueLength > 50) {
            $('#title_count').addClass('cebroad-pink');
        } else {
            $('#title_count').removeClass('cebroad-pink');
        }
    });

    $('#capacity').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().length;
        $('#capacity_count').text(thisValueLength);
        if(thisValueLength > 5) {
            $('#capacity_count').addClass('cebroad-pink');
        } else {
            $('#capacity_count').removeClass('cebroad-pink');
        }
    });

    $('#detail').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().length;
        $('#detail_count').text(thisValueLength);
        if(thisValueLength > 500) {
            $('#detail_count').addClass('cebroad-pink');
        } else {
            $('#detail_count').removeClass('cebroad-pink');
        }
    });


