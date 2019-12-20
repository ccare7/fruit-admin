<?php


namespace app\api\controller;


use think\controller\Rest;


class User extends Rest
{
    public function user()
    {

        $method = $this->method;
        switch ($method) {
            case "get":
                return $this->get();
            case "post":
                return $this->post();
            case "put":
                return $this->put();
            case "delete":
                return $this->delete();
        }
    }

    private function get()
    {
        $model = model("user");
        $query = input("get.");
        $page = $query["page"];
        $pageSize = $query["pageSize"];
        $start = ($page - 1) * $pageSize;
        $where=[];
        if (isset($query["nickName"])) {
            $nickName = $query["nickName"];
            $where["nickName"] = ["like", "%$nickName%"];
        }
        $data =$model->limit($start, $pageSize)->where($where)->select();
        $total = $model->where($where)->count();
        return json(["msg" => "查询成功", "code" => 200, "data" => $data, "total" => $total]);
    }

}