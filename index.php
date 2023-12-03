<!DOCTYPE html>
<html lang="en">

    <head>
        <title>create qr code</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="js/bootstrap.min.js" rel="javascript">
        <script>
        function qr() {
            var a = document.getElementById("QR").value;
            document.getElementById('qrcode').value = a;
        }
        </script>
    </head>

    <body style="background-color:teal;">
        <div class="container">
            <div class=" col-sm-12">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 form-group has-success"
                    style="background-color:white;margin-top:50px; border-radius:20px;">
                    <h1 style="text-align:center;"><b><u>CREATE QR CODE</u></b></h1><br />
                    <form action="QRCodeShow.php" method="POST" enctype="multipart/form-data">
                        <label for="inputSuccess" class="control-label">Enter message for show QR Code:&nbsp;&nbsp;
                            <font color="red">*</font>
                        </label>
                        <textarea rows="5" cols="10" id="QR" class="form-control" name="name" onkeyup="qr()"
                            placeholder="Enter message for show QR code." required></textarea><br />
                        <div class="form-group">
                            <input type="submit" value="SHOW QR CODE" class="btn btn-success form-control" />
                        </div>
                    </form>
                    <form action="QRCodeDownload.php" method="POST">
                        <input type="text" id="qrcode" class="form-control" name="name" /><br />
                        <input type="submit" name="" value="DOWNLOAD QR CODE" class="btn btn-success form-control" />
                    </form><br />
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </body>

</html>
