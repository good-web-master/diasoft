<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Diasoft</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
        <ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-4 col-md-3 d-sm-block bg-light sidebar">
          
          <ul class="nav nav-pills flex-column" id="users">
            <?php foreach ($users as $user): ?>
              <li class="nav-item">
                <a class="nav-link" href="#" user-id="<?=$user['id']?>"><?=$user['surname'].' '.$user['name'].' '.$user['patronymic']?></a>
              </li>
            <?php endforeach; ?>
          </ul>

        </nav>

        <main class="col-sm-8 ml-sm-auto col-md-9 pt-3" style="/* display: none; */"role="main">
          <h1 id="user-name">User name</h1>

          <div class="card border-dark mb-3" style="">
            <div class="card-header">Паспортные данные</div>
            <div class="card-body text-dark">
              <div class="row">
                <div class="col-sm-4">
                <img src="" alt="" id="user-img" class="img-thumbnail">
                </div>
                <div class="col-sm-8">
                
                  <div class="row">
                    <div class="col-sm-12"><b>Дата рождения:</b> <span id="birthday"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><b>Cерия паспорта:</b> <span id="passport_series"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><b>Номер паспорта:</b> <span id="passport_id"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><b>Дата выдачи:</b> <span id="passport_date_issue"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><b>Кто выдал:</b> <span id="passport_department_name"></span></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12"><b>Код подразделения:</b> <span id="passport_department_id"></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h2>Cчета</h2>
          <div class="table-responsive">
            <table class="table table-striped" id="bank-books">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Дата открытия </th>
                  <th>Первоначальный взнос</th>
                  <th>Годовая процентная ставка</th>
                  <th>Капитализация</th>
                </tr>
              </thead>
              <tbody>     
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
