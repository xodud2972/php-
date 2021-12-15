/** 
    전송버튼을 클릭시 AJAX로 전송되면 함수입니다.
    taeyoung.js파일과 연관됩니다.

    create by 엄태영 2021.12.16
 **/
    function BtnInsert() {
        var form = $('#form1')[0];
        var data = new FormData(form);
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: '../process/process_insert.php', 
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function(data) {
                console.log(data);
                location="../view/index.php"
            },
            error: function(e) {
                console.log("ERROR : ", e);
            }
        });
    }

/** 
    전송버튼을 클릭시 AJAX로 전송되면 함수입니다.
    taeyoung.js파일과 연관됩니다.

    create by 엄태영 2021.12.16
 **/
    function BtnEdit() {
        var form = $('#form1')[0];
        var data = new FormData(form);
        $.ajax({
          type: "POST",
          enctype: 'multipart/form-data',
          url: '../process/process_edit.php', // form을 전송할 실제 파일경로
          data: data,
          processData: false,
          contentType: false,
          cache: false,
          timeout: 600000,
          success: function(data) {
            // 전송 후 성공 시 실행 코드
            console.log(data);
            location="../view/index.php"
          },
          error: function(e) {
            // 전송 후 에러 발생 시 실행 코드
            console.log("ERROR : ", e);
          }
        });
      }



/**
    add.php에서 필수 정보값 입력을 위한 코드입니다.
    @return 해당 조건에 만족하면 clkBtn()함수가 실행됩니다. 그렇지 않으면 
    alert가 실행되고 해당 부분으로 포커스가 이동합니다.
    clkBtn() 함수는 add페이지에 하단에 있는 AJAX전송을 위한 코드입니다.

    create by 엄태영 2021.12.16
**/   
    $("#ajax").click(function() {
        if ($("#firstname").val().length == 0) {
            alert("이름을 입력하세요.");
            $("#firstname").focus();
            return false;
        }
        if ($("#lastname").val().length == 0) {
            alert("별명을 입력하세요.");
            $("#lastname").focus();
            return false;
        }
        if ($("#Middlename").val().length == 0) {
            alert("성을 입력하세요.");
            $("#Middlename").focus();
            return false;
        }
        if ($("#Address").val().length == 0) {
            alert("주소를 입력하세요.");
            $("#Address").focus();
            return false;
        }
        if ($("#Contact").val().length == 0) {
            alert("연락처를 입력하세요.");
            $("#Contact").focus();
            return false;
        }
        if ($("#comment").val().length == 0) {
            alert("소개를 입력하세요.");
            $("#comment").focus();
            return false;
        } else {
            return BtnInsert();
        }
    });

    /**
    add.php에서 필수 정보값 입력을 위한 코드입니다.
    @return 해당 조건에 만족하면 clkBtn()함수가 실행됩니다. 그렇지 않으면 
    alert가 실행되고 해당 부분으로 포커스가 이동합니다.
    clkBtn() 함수는 add페이지에 하단에 있는 AJAX전송을 위한 코드입니다.

    create by 엄태영 2021.12.16
**/   
$("#editAjax").click(function() {
    if ($("#firstname").val().length == 0) {
        alert("이름을 입력하세요.");
        $("#firstname").focus();
        return false;
    }
    if ($("#lastname").val().length == 0) {
        alert("별명을 입력하세요.");
        $("#lastname").focus();
        return false;
    }
    if ($("#Middlename").val().length == 0) {
        alert("성을 입력하세요.");
        $("#Middlename").focus();
        return false;
    }
    if ($("#Address").val().length == 0) {
        alert("주소를 입력하세요.");
        $("#Address").focus();
        return false;
    }
    if ($("#Contact").val().length == 0) {
        alert("연락처를 입력하세요.");
        $("#Contact").focus();
        return false;
    }
    if ($("#comment").val().length == 0) {
        alert("소개를 입력하세요.");
        $("#comment").focus();
        return false;
    } else {
        return BtnEdit();
    }
});



    
/**
    add.php와 edit.php 페이지에 파일업로드영역 추가삭제를 위한 코드입니다.
    업로드 영역은 최대 2개까지만 생성.
    
    create by 엄태영 2021.12.16
**/   
    attachFile = {
        idx:0,
        add:function(){ 
            var o = this;
            var idx = o.idx;
 
            var div = document.createElement('div');

            div.style.marginTop = '3px';

            div.id = 'file' + o.idx;

            var file = document.all ? document.createElement('<input name="files2[]">') : document.createElement('input');
            file.type = 'file';
            file.name = 'files2[]';
            file.size = '40';
            file.id = 'fileField' + o.idx;

            var btn = document.createElement('input');
            btn.type = 'button';
            btn.value = '파일삭제';
            btn.onclick = function(){o.del(idx)}
            btn.style.marginLeft = '5px';
            console.log(file.id)
            if(file.id == 'fileField0'){
                div.appendChild(file);
                div.appendChild(btn);
                document.getElementById('attachFileDiv').appendChild(div);
                o.idx++;
            }

            
        },
        del:function(idx){ 
            if(document.getElementById('fileField' + idx).value != '' && !confirm('삭제 하시겠습니까?')){
                return;
            }
            document.getElementById('attachFileDiv').removeChild(document.getElementById('file' + idx));
        }
    }
