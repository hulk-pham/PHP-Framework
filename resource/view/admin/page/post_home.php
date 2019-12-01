<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card strpied-tabled-with-hover" style="min-height: 100vh">
                    <div class="card-header ">
                        <div class="float-left">

                            <h4 class="card-title">List Post</h4>
                            <p class="card-category">There is have <?= count($posts) ?> post</p>
                        </div>
                        <div class="float-right">
                            <a href="/dashboard-new-post" class="bg-success btn btn-info text-white">New</a>
                        </div>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Avatar</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($posts as $post) { ?>
                                <tr>
                                    <td><?= $post['id'] ?></td>
                                    <td><?= $post['title'] ?></td>
                                    <td><?= $post['cate_name'] ?></td>
                                    <td>
                                        <img style="width: 40px;" src="/upload/post/<?= $post['avatar'] ?>">
                                    </td>
                                    <td><?= $post['author_name'] ?></td>
                                    <td><?= $post['created_at'] ?></td>
                                    <td>
                                        <a href="/dashboard-view-post/<?= $post['id'] ?>">
                                            <button><span class="fa fa-eye btn-block"></span></button>
                                        </a>
                                        <a href="/dashboard/postedit/<?= $post['id'] ?>">
                                            <button><span class="fa fa-pencil text-info btn-block"></span></button>
                                        </a>

                                        <button class="btn-sm" role="link" form="delete-<?= $post['id'] ?>"
                                                type="submit"><span
                                                    class="fa fa-trash text-danger btn-block"></span></button>
                                        <form id="delete-<?= $post['id'] ?>" class="d-none"
                                              action="/dashboard-delete-post/<?= $post['id'] ?>"
                                              method="post">
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


