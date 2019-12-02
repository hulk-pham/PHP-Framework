<div style="min-height: 100vh; background-color: #e9e9e9">
    <div class="row">
        <div class="col-md-2 col-lg-3"></div>
        <div class="card mt-5 col-12 col-md-8 col-lg-6 p-5">
            <img src="<?= asset_url("assets/images/classic-blog-logo.png") ?>">
            <form action="/dashboard-user-login" method="post">
                <?php if ($error) { ?>
                    <div class="alert alert-danger">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                            <i class="nc-icon nc-simple-remove"></i>
                        </button>
                        <span>
                            <b> Error: </b> <?= $error ?></span>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="text-center">

                    <button type="submit" class="btn btn-primary btn-fill btn-round btn-warning">Login To Dashboard</button>
                </div>
            </form>
        </div>
    </div>
</div>
