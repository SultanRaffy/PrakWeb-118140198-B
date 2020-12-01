<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <style>
        .container-login{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
        form{
            margin-left: 40%;
        }
    </style>

</head>

<body>
    <?= $this->session->flashdata('message'); ?>
    <div class="container-login">
    <form action="<?= base_url('login'); ?>" method="post">
        <table>
            <tr>
                <td align="center" colspan="2">Enter Login Details</td>
            </tr>
            <?= form_error('user_name'); ?>
            <tr>
                <td align="right">Username</td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <?= form_error('password'); ?>
            <tr>
                <td align="right">Password</td>
                <td>
                    <input type="password" name="password"></td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit">SUBMIT</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>