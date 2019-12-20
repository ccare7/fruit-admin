<?php


namespace app\api\controller;

// REST风格  编写的API就叫做RESTFUL API
use think\controller\Rest;

class Type extends Rest
{
    public function type(){
        $method=$this->method;
        switch ($method){
        case "get":return $this->get();
        case "post":return $this->post();
        case "put":return $this->put();
        case "delete":return $this->delete();
        }
    }
    private function get(){
        //查询分页数据  查询单个数据
        $model=model('type');
        $query=input("get.");
        if(isset($query["page"])&&isset($query["pageSize"])){
           $page=$query['page'] ;
           $pageSize=$query['pageSize'];
           $start=($page-1)*$pageSize;
           $data=$model->where("is_delete",0)->limit($start,$pageSize)->select();
           $count=$model->where("is_delete",0)->count();
           return json(["msg"=>"查询成功","code"=>200,"data"=>$data,"total"=>$count]);
        }elseif(isset($query["id"])){
            $data=$model->where("id",$query["id"])->find();
            return json(["msg"=>"查询成功","code"=>200,"data"=>$data]);
        }else{
            $data=$model->where("is_delete",0)->select();
            return json(["msg"=>"查询成功","code"=>200,"data"=>$data]);
        }
    }
    private function post(){
        $model=model("type");
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
    private function put(){
        $model=model("Type");
        $body=input("put.");
        $body["update_time"]=time();
//        $body["create_time"]=time();
//        dump($body);
//        return;
        $res=$model->allowField(true)->isUpdate(true)->save($body);
        if($res===1){
            return json(["mag"=>"更新成功","code"=>200]);
        }else{
            return json(["msg"=>"更新失败","code"=>400]);
        }
    }
    private function delete(){
        $model=model("type");
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