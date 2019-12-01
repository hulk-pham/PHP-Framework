<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 11/30/19
 * Time: 3:29 PM
 */

namespace App\Controller\Admin;


use App\Application\Request;
use App\Controller\Controller;
use App\Model\Category;
use App\Model\Post;
use App\Model\Tag;

class PostController extends Controller {
    const defaultMasterFile = self::listMasterFile['admin'];


    public static function index(Request $request, $status = null) {
//        dd($request);
        $post_model = new Post();
        $posts = $post_model->all();

        self::render("admin/page/post_home.php", [
            'posts' => $posts,
            'status' => $status
        ]);
    }

    public static function viewPost(Request $request) {
        dd($request);
    }

    public static function formNewPost(Request $request) {

        $cate_model = new Category();
        $tag_model = new Tag();
        $listCate = $cate_model->all();
        $listTag = $tag_model->all();
        self::render("admin/page/form_new_post.php", [
            'listCate' => $listCate,
            'listTag' => $listTag
        ]);
    }

    public static function saveNewPost(Request $request) {

        $post_model = new Post();

        $file = $_FILES["avatar"];
//        dd($_SERVER);
        $error = "";
        $file_name = "";
        if ($file) {
            if ($file['error']) {
                $error = "Upload file fail";
            }

            if ($file["size"] > 3 * 1024 * 1024) {
                dd($file["size"] > 3 * 1024 * 1024);
                $error = "avatar must be smaller than 3 MB";
            }

            $file_name = time() . "." . pathinfo($file['name'], PATHINFO_EXTENSION);
            if (!move_uploaded_file($file["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/post/" . $file_name)) {
                $error = "Upload file fail";
            }
        } else  $error = "Expect avatar";

//        dd($error);
        if ($error) {
            self::saveNewPost($request);
        } else {


            $status = $post_model->insert([
                'avatar' => $file_name,
                'title' => $request->title,
                'brief' => $request->brief,
                'content' => $request->content,
                'category' => $request->category,
                'tag' => $request->tag,
            ]);

//            dd($status);
            //save
            if ($status)
                self::index($request);
            else
                self::saveNewPost($request);
        }
    }

    public static function formEditPost(Request $request) {
        dd($request);
    }

    public static function saveEditPost(Request $request) {
        dd($request);
    }

    public static function deletePost(Request $request) {
        $id = $request->id;

        $post_model = new Post();

        $status = $post_model->delete($id);
        if ($status)
            self::index($request, "info|Delete success");
        else self::index($request, "error|Delete fail");
    }
}
