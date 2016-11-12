<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        S(array('type'=>'memcache','host'=>'localhost','port'=>11211));
        $index_key=md5("column_news_service_produts_key");
        $info=S($index_key);
        if(empty($info)){
            //查出所有栏目
            $column = D('column');
            $list = $column->field('name,english,lanmu_id,up_id')->where(array('up_id' => 0))->select();

            //公司简介
            $company= $column->field('name,lanmu_jianjie')->where(array('lanmu_id'=>17))->select();

            //新闻动态
            $news=D('news');
            $where['LENGTH(title)']= array('lt',60);
            $newsList=$news->where($where)->field('news_id,title,pulish_time,lanmu_id')->limit(7)->order(array('pulish_time'=>'desc'))->select();

            //服务项目
            $service=D('service');
            $serviceList=$service->limit(4)->select();

            //产品展示
            $produts=D('produts');
            $produtsList=$produts->field('id,pic')->select();

            $info['list']=$list;
            $info['company']=$company;
            $info['newsList']=$newsList;
            $info['serviceList']=$serviceList;
            $info['produtsList']=$produtsList;
            S($index_key,$info);
        }

        $this->assign('list',$info['list']);
        $this->assign('company',$info['company']);
        $this->assign('newsList',$info['newsList']);
        $this->assign('serviceList',$info['serviceList']);
        $this->assign('produtsList',$info['produtsList']);
        $this->display();
    }

}