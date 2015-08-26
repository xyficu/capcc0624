<?php
/**
 * Created by PhpStorm.
 * User: DT
 * Date: 2015/7/7
 * Time: 9:01
 */

namespace Home\Controller;


use Think\Controller;

class DgmuseumController extends Controller {
    public function index()
    {
        $this->display('Public:head');

        // 传奇
        $res1= M('classic_legend');
        $data['id']=array('ELT',1);
        $data1=$res1->where($data)->select();
        $data1[0]['content']=R('SubString/subString',array($data1[0]['content'],0,170));
        $this->assign('classic_legend',$data1);

        // 市场
        $res2= M('classic_market');
        $data['id']=array('ELT',1);
        $data2=$res2->where($data)->select();
        $data2[1]['content']=R('SubString/subString',array($data2[1]['content'],0,160));
        $data2[2]['content']=R('SubString/subString',array($data2[2]['content'],0,160));
        $data2[3]['content']=R('SubString/subString',array($data2[3]['content'],0,160));
        $this->assign('classic_market',$data2);

        // 艺术群
        $res3= M('classic_group');
        $data['id']=array('ELT',1);
        $data3=$res3->where($data)->select();
        $data3[0]['content']=R('SubString/subString',array($data3[0]['content'],0,138));
        $data3[1]['content']=R('SubString/subString',array($data3[1]['content'],0,138));
        $data3[2]['content']=R('SubString/subString',array($data3[2]['content'],0,138));
        $this->assign('classic_group',$data3);

        // 评论
        $res4= M('classic_comment');
        $data['id']=array('ELT',1);
        $data4=$res4->where($data)->select();
        $data4[0]['content']=R('SubString/subString',array($data4[0]['content'],0,500));
//        $data4[1]['content']=R('SubString/subString',array($data4[1]['content'],0,138));
        $this->assign('classic_comment',$data4);

        $this->display();

        $this->display('Public:foot');
    }

}