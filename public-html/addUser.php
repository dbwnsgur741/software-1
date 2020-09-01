<?php

include 'layout/head.php';

?>
<table class="table table-striped table-hover container">
    <thead>
        <tr class="row">
            <th class="col">Name</th>
            <th class="col">birth</th>
            <th class="col">phoneNum</th>
            <th class="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr class="row">
            <td class="col"><input type="text" id="name"></td>
            <td class="col"><input type="date" id="birth"></td>
            <td class="col"><input type="text" id="phoneNum"></td>
            <td class="col">
                <button type="button" class="btn btn-primary" onclick="inputUser();">등록하기</button>
            </td>
        </tr>
    </tbody>
</table>
</body>

</html>

<script>
    function inputUser() {

        // db 전송할 데이터 객체 
        var data = {
            name: [],
            birth: [],
            phoneNum: []
        }

        var inputs = document.querySelectorAll('input');
        var _name = inputs[0].value;
        var _birth = inputs[1].value;
        var _phoneNum = inputs[2].value;

        if (_name == '' || _birth == '' || _phoneNum == '') {
            alert("빈칸없이 채워주세요");
            return;
        }

        data.name.push(_name);
        data.birth.push(_birth);
        data.phoneNum.push(_phoneNum);

        $.ajax({
            
            type: 'POST',
            url: 'php/process.php?process=inputUser',
            data: data,

            success: function (data) {
                alert("성공적으로 입력되었습니다.");
                location.reload();
            },

            error: function (data) {
                alert("오류입니다 다시 시도해주세요.");
            }
        });
    }
</script>