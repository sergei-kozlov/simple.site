<!DOCTYPE HTML>
<html>
<head>
    <link href="{{asset('theme/css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>

    <link rel="stylesheet" href="{{asset('theme/font-awesome.min.css')}}">
</head>
<body>
<div class="container">
    <form method="POST" id="id-form-messages">
        <div class="form-group">
            <label for="name">Имя: *</label>
            <input class="form-control" placeholder="Имя" type="text" id="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" placeholder="Email" type="email" id="email">
        </div>

        <div class="form-group">
            <label for="message">Сообщение:</label>
            <textarea class="form-control" rows="5" cols="50" placeholder="Текст сообщения" name="message"
                      id="message"></textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Добавить">
        </div>


    </form>
    <div class="text-right"><b>Всего сообщений:</b> <i class="badge">0</i></div>
    <br>

    <div class="messages">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title"></h3>
                <span>Карлсон</span>

                <span class="pull-right label label-info">17:15:00 / 03.07.2105</span>
                </h3>
            </div>
            <div class="panel-body">

                <div class="pull-right">
                    <a class="btn btn-info" href="#">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <button class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                </div>

            </div>


        </div>

    </div>
</div>


</body>
</html>
