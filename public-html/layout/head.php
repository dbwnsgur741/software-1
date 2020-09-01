<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>소공 과제 #1</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/userManager.css">
</head>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>소프트웨어공학<b> 과제#1</b></h2>
                    </div>
                    <div class="col-sm-7" id="ctrSection">
                        <a href="#" class="btn btn-secondary" onclick="viewUser();"><i class="material-icons">&#xE147;</i> <span>목록보기</span></a>
                        <a href="#" class="btn btn-secondary" onclick="viewAddUser();"><i class="material-icons">&#xE147;</i> <span>추가하기</span></a>
                        <a href="#" class="btn btn-secondary" onclick="viewSearchUser();"><i class="material-icons">&#xE24D;</i> <span>검색하기</span></a>						
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function viewSearchUser(){
        window.location = './searchUser.php';
    }

    function viewAddUser() {
        window.location = './addUser.php';
    }

    function viewUser() {
        window.location = './';
    }
</script>
