<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="css/text">
        <title>Biodata</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #2980b9;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 80vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                margin-top:150px;
                color:#fff;
                font-size: 64px;
            }

            .box{
                margin-top:40px;
                margin-left:39.5%;
				width:400px;
				height:240px;
				background:#ecf0f1;
				border-radius: 8px;
            }
            
            .isi {
                color:#2c3e50;
                padding:15px;
                font-size:20px;
                text-align:center;
            }

        </style>
    </head>
    <body>

            <div class="content">
                <div class="title">
                    BIODATA DIRI
                </div>

                <div class="box">
                    <div class="isi">
                        <p>NIM : 183140714111080</p>
                        <p>Nama : Muhammad Irfan</p>
                        <p>Alamat : Malang</p>
                        <p>TTL : Mataram, 9 Juli 1999</p>
                    </div>
                </div>

               
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\tugas1\resources\views/welcome.blade.php ENDPATH**/ ?>