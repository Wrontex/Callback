<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/d1cea24753.js" crossorigin="anonymous"></script>
	<!-- NotyJS -->
	<link href="css/noty.min.css" rel="stylesheet">
	<link href="css/themes/bootstrap-v4.css" rel="stylesheet">
	<!-- Custom -->
	<link rel="stylesheet" href="css/custom.css">
    <title>Обратный звонок</title>
</head>
<body>

</body>
<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/imask.js"></script>
<script src="js/noty.min.js"></script>
<script>
    Noty.overrideDefaults({
        progressBar: false,
        timeout: 3500,
        theme: 'bootstrap-v4',
    });
    
</script>
<!-- Обратный звонок -->
<div class="callback-bt" data-toggle="modal" data-target="#callback">
    <div class="text-call text-center">
        <i class="fa fa-phone"></i>
        <p>Заказать<br>звонок</p>
    </div>
</div>
<div class="modal fade text-black" id="callback" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="max-width: 400px; margin: auto; border-radius: 5px;">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="callback_form" style="padding: 20px;">
                    <p style="font-size: 20px;"><b>Оставьте заявку</b></p>
                    <p style="font-size: 16px;">Мы свяжемся с вами в ближайшее время</p>
                    <div class="form-group mt-4">
                        <input style="border-radius: 15px;" type="text" class="form-control" id="callback_name" placeholder="Как к Вам обращаться?" minlength="2" required>
                    </div>
                    <div class="form-group">
                        <input style="border-radius: 15px;" type="tel" class="form-control" id="callback_number" placeholder="Номер телефона" minlength="15" required>
                    </div>
                    <input type="hidden" id="input-ip" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>">
                    <button type="button" class="btn callback-send mt-3">Отправить</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Конец звонка -->
</html>