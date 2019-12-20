<?php


namespace app\api\controller;


use think\controller\Rest;

class Rules extends Rest
{
    public function rules()
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
        $model = model("rules");
        $query = input("get.");
        if (isset($query["did"])) {
            $data = $model->where(["is_delete" => 0, "delivery_id" => $query["did"]])->select();
            return json(["msg" => "查询成功", "code" => 200, "data" => $data]);
        }
    }
    private function post(){
        $model=model("rules");
        $body=input("post.");
        $body["create_time"]=time();
        $body["update_time"]=0;
        $res=$model->allowField(true)->save($body);
        if($res===1){
            return json(["mag"=>"操作成功","code"=>200]);
        }else{
            return json(["msg"=>"操作失败","code"=>400]);
        }
    }
    private function delete(){
        $model=model("rules");
        $id=input("get.id");
        $obj=$model->where("id",$id)->find();
        $obj->is_delete=1;
        $res=$obj->save();
        if($res===1){
            return json(["msg"=>"删除成功","code"=>200]);
        }else{
            return json(["msg"=>"删除失败","code"=>400]);
        }
    }


}