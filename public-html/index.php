<?php

include 'layout/head.php';

?>
<section id="main">

    <form>
        <div class="form-row"">
            <div class="form-group col-md-6">
                <input id="target" type="text" pattern="[a-zA-z]*"/>
            </div>
        </div>
    </form>

    <table class="table table-striped table-hover container">
        <thead>
            <tr class="row">
                <th class="col">#</th>
                <th class="col">Name</th>
                <th class="col">birth</th>
                <th class="col">phoneNum</th>
                <th class="col">Action</th>
            </tr>
        </thead>
        <tbody id="template">
            <!--
        <tr class="row">
            <td class="col">1</td>
            <td class="col">Michael Holz</td>
            <td class="col">04/10/2013</td>
            <td class="col">01012313213</td>
            <td class="col">
                <a href="#" class="settings" title="Settings"><i class="material-icons">&#xE8B8;</i></a>
                <a href="#" class="delete" title="Delete"><i class="material-icons">&#xE5C9;</i></a>
            </td>
        </tr>
        -->
        </tbody>
    </table>
</section>
</body>

</html>

<script>
    $(document).ready(function () {
        
        /* 처음 랜딩 시 초기 값 세팅 */
        $.ajax({
                type: 'GET',
                url: 'searchUser.php',
                success: function (result) {
                    $('#template').html(result);
                },
                error: function (err) {
                    console.error(err);
                }
        });

        /* 검색 창 이벤트 바인딩 */
        $("#target").on('keyup',function (e) {
            
            var aa = $(this).val();
            console.log(aa);

            $.ajax({
                type: 'GET',
                url: 'searchUser.php',
                data: {
                    q: aa
                },
                success: function (result) {
                    $('#template').html(result);
                },
                error: function (err) {
                    console.error(err);
                }
            });
        });
    });
</script>