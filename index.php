<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <?php
    require 'connect.php';
    include 'alert.php';

    $sql = "select * from students";
    $result = mysqli_query($connect,$sql);
    ?>

    <div class="container" style="max-width: 750px; max-width: 750px; height: 78vh; margin-top: 2%;">
        <form method="post" action="process_insert.php" autocomplete="off">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="name" name="name" class="form-control" style="background-color: #e2fcfd;" autocomplete="off"/>
                        <label class="form-label" for="name">Họ tên</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" id="address" name="address" class="form-control" autocomplete="off" />
                        <label class="form-label" for="address">Địa chỉ</label>
                    </div>
                </div>
            </div>

            <div style="display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-bottom: 15px;">
                <!-- Default radio -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Nam" checked />
                    <label class="form-check-label" for="male"> Nam </label>
                </div>
                <!-- Default checked radio -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Nữ"/>
                    <label class="form-check-label" for="Female"> Nữ </label>
                </div>
            </div>
            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="birthday" name="birthday" class="form-control" style="background-color: #e2fcfd;" autocomplete="off" />
                <label class="form-label" for="birthday">Ngày sinh</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="email" name="email" class="form-control" style="background-color: #e2fcfd;"  autocomplete="off"/>
                <label class="form-label" for="email">Email</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" id="phone" name="phone" class="form-control" autocomplete="off"/>
                <label class="form-label" for="phone">Điện thoại</label>
            </div>


            <div style="display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-bottom: 15px;">

                <!-- Default checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="english" />
                    <label class="form-check-label" for="english">Tiếng Anh</label>
                </div>

                <!-- Checked checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="manage" checked />
                    <label class="form-check-label" for="manage">Quản trị</label>
                </div>
                <!-- Checked checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="CNTT" checked />
                    <label class="form-check-label" for="CNTT">CNTT</label>
                </div>
            </div>
            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="text" id="username" class="form-control" style="background-color: #e2fcfd;" autocomplete="off" />
                <label class="form-label" for="username">Tên sử dụng</label>
            </div>

            <div class="row mb-4">

                <!-- Message input -->
                <div class="col">
                    <div class="form-outline mb-4">
                        <input type="password" class="form-control" id="password" name="password" rows="4" style="background-color: #e2fcfd;" ></input>
                        <label class="form-label" for="password">Mật khẩu</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                        <input type="password" class="form-control" id="passwordOld" name="passwordOld" rows="4" style="background-color: #e2fcfd;" ></input>
                        <label class="form-label" for="passwordOld">Gõ lại mật khẩu</label>
                    </div>
                </div>
            </div>


            <!-- Submit button -->
            <button class="btn btn-primary btn-block mb-4">Chập nhận</button>
            <button type="reset" class="btn btn-primary btn-block mb-4">Bỏ qua</button>
        </form>

    <!-- TABLE -->
    <table border="1" width="100%">
        <tr>
            <th>TT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Chức năng</th>
        </tr>
        <?php foreach ($result as $each): ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['name'] ?></td>
                <td><?php echo $each['birthday'] ?></td>
                <td><?php echo $each['gender'] ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $each['id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <script src="main.js"></script>
</body>
</html>