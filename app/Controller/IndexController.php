<?php
namespace Step\Controller;

use Step\Model\User;
use Step\Model\Todos;

class IndexController extends BaseController
{
    public function index($userId)
    {
        $user = User::find($userId);

        $params = [
            'header' => 'test',
            'todos' => $user->todo
        ];

        echo $this->render('index', $params);
    }

    public function delete($todoId, $userId)
    {
        $todo = Todos::find($todoId);

        if ($todo instanceof Todos && $todo->user_id == $userId) {
            $todo->delete();
            header('location: /');
        }
    }

    public function add($data)
    {
        /*
        $testPost = [
            'todo' => 'test',
            'category' => 'category',
            'description' => 'description',
        ];
        */

        $todo = new Todos();
        $todo->todo = $data['todo'];
        $todo->category = $data['category'];
        $todo->description = $data['description'];
        $todo->user_id = 1;

        $todo->save();
        header('location: /');

        //$testPost['id'] = $todo->id;
        //echo json_encode($testPost);
    }
}